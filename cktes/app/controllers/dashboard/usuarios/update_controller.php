<?php
require_once("../../app/models/empleado.class.php");
try{
    if(isset($_GET['id'])){
        $usuario = new Empleado;
        if($usuario->setId_empleado($_GET['id'])){
            if($_SERVER['HTTP_REFERER']){
                if($usuario->readEmpleado()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $usuario->validateForm($_POST);
                        if($usuario->setNombres($_POST['nombres'])){
                            if($usuario->setApellidos($_POST['apellidos'])){
                                if($usuario->setCorreo($_POST['correo'])){
                                    if($usuario->setId_permiso($_POST['permiso'])){
                                        if($usuario->updateEmpleado()){
                                            Page::showMessage(1, "Usuario modificado", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("Alias incorrecto");
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
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuario/update_view.php");
?>