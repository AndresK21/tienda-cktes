<?php
require_once("../../app/models/empleado.class.php");
try{
    if(isset($_POST['cambiar'])){
        $usuario = new Empleado;
        $_POST = $usuario->validateForm($_POST);
        if($usuario->setId_empleado($_SESSION['id_empleado'])){
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){
                if($usuario->setContrasena2($_POST['clave_actual_1'])){
                    if($usuario->checkPassword()){
                        if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){
                            if($_POST['clave_nueva_1'] != $_SESSION['correo_electronico2']){
                                if($_POST['clave_nueva_1'] != $_POST['clave_actual_1']){
                                    if($usuario->setContrasena($_POST['clave_nueva_1'])){
                                        if($usuario->changePassword()){
                                            Page::showMessage(1, "Clave cambiada", "index.php");
                                        }else{
                                            throw new Exception(Database::getException());
                                        }
                                    }else{
                                        throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
                                    }
                                }else{
                                    throw new Exception("La nueva contraseña no puede ser igual a la anterior");
                                }
                            }else{
                                throw new Exception("La contraseña no puede ser igual al correo electrónico");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("Clave actual menor a 8 caracteres");
                }
            }else{
                throw new Exception("Claves actuales diferentes");
            }
        }else{
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/password_view.php");
?>