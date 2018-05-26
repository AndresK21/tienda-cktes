<?php
require_once("../../app/models/empleado.class.php");
try{
    if(isset($_GET['id'])){
        $usuario = new Empleado;
        if($usuario->setId_empleado($_GET['id'])){
            if($usuario->readEmpleado()){
                if(isset($_POST['actualizar'])){
                    $_POST = $usuario->validateForm($_POST);
                    if($usuario->setNombres($_POST['nombres'])){
                        if($usuario->setApellidos($_POST['apellidos'])){
                            if($usuario->setCorreo($_POST['correo'])){
                                if($usuario->setId_permiso(isset($_POST['id_permiso'])?1:2)){ //Establece que el id_permiso solo puede ser 1 o 2
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
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuario/update_view.php");
?>