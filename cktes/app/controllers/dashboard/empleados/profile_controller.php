<?php
require_once("../../app/models/empleado.class.php");
try{
    $usuario = new Empleado;
    if($usuario->setId_empleado($_SESSION['id_empleado_d'])){
        if($usuario->readEmpleado()){
            if(isset($_POST['editar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombres($_POST['nombres'])){
                    if($usuario->setApellidos($_POST['apellidos'])){
                        if($usuario->setCorreo($_POST['correo'])){
                            if($usuario->setEst(isset($_POST['auten'])?2:1)){
                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                    if(!$usuario->setImagen($_FILES['archivo'])){
                                        throw new Exception($producto->getImageError());
                                    }
                                    }if($usuario->updateEmpleado()){
                                        $_SESSION['correo_electronico2_d'] = $usuario->getCorreo();
                                        $_SESSION['imagen_d'] = $usuario->getImagen();
                                        $_SESSION['nombres2_d'] = $usuario->getNombres();
                                        $_SESSION['apellidos2_d'] = $usuario->getApellidos();
                                        Page::showMessage(1, "Perfil modificado", "index.php");
                                    }else{
                                        throw new Exception("No se pudo modificar el perfil");
                                    }
                                }else{
                                    throw new Exception("Error en la doble autenticacion");
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
        }else{
            Page::showMessage(2, "Usuario inexistente", "index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/profile_view.php");
?>