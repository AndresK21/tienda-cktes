<?php
require_once("../../app/models/empleado.class.php");
try{
    $usuario = new Empleado;
    if(isset($_POST['crear'])){
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setNombres($_POST['nombres'])){
            if($usuario->setApellidos($_POST['apellidos'])){
                if($usuario->setCorreo($_POST['correo'])){
                    if($usuario->setId_permiso($_POST['permiso'])){
                        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                            if($usuario->setImagen($_FILES['archivo'])){
                                if($_POST['clave1'] == $_POST['clave2'] ){
                                    if($usuario->setContrasena($_POST['clave1'])){
                                        if($_POST['clave1'] != $_POST['correo']){
                                            if($usuario->createEmpleado()){
                                                Page::showMessage(1, "Usuario creado", "index.php");
                                            }else{
                                                throw new Exception(Database::getException());
                                            }
                                        }else{
                                            throw new Exception("La contraseña no puede ser igual al correo electrónico");
                                        }
                                    }else{
                                        throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
                                    }
                                }else{
                                    throw new Exception("Las contraseñas no coinciden");
                                }
                            }else{
                                throw new Exception($usuario->getImageError());
                            }
                        }else{
                            throw new Exception("Seleccione una imagen");
                        }
                                             
                    }else{
                        throw new Exception("Seleccione un tipo de usuario");
                    }
                }else{
                    throw new Exception("Correo incorrecto");
                }
            }else{
                throw new Exception("Apellidos incorrectos");
            }
        }else{
            throw new Exception("Nombres incorrectos");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuario/create_view.php");
?>