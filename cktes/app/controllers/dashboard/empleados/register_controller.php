<?php
require_once("../../app/models/empleado.class.php");
try{
	$usuario = new Empleado;
	if($usuario->getEmpleado()){
        Page::showMessage(3, "Hay usuarios disponibles", "login.php");
    }else{
        if(isset($_POST['registrar'])){
            $_POST = $usuario->validateForm($_POST);
            if($usuario->setNombres($_POST['nombres'])){
                if($usuario->setApellidos($_POST['apellidos'])){
                    if($usuario->setCorreo($_POST['correo'])){
                        if($usuario->setContrasena($_POST['clave1'])){
                            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                if($usuario->setImagen($_FILES['archivo'])){
                                    if($usuario->setId_permiso("1")){ //Establece que solo puede ser administrador
                                        if($usuario->createEmpleado()){
                                            Page::showMessage(1, "Usuario registrado", "login.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Seleccione un permiso");
                                    }
                                }else{
                                    throw new Exception($empleado->getImageError());
                                }
                            }else{
                                throw new Exception("Seleccione una imagen");
                            }
                        }else{
                            throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
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
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/register_view.php");
?>