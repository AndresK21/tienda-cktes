<?php
require_once("../app/models/cliente.class.php");
try{
    // Accioón que se va a ejecutar cuando se de click en el input con nombre "cambiar"
    if(isset($_POST['cambiar'])){
        $cliente = new Cliente;
        $_POST = $cliente->validateForm($_POST);
        if($cliente->setId($_SESSION['id_cliente'])){
            // Se que clave actual de los dos campos sean iguales
            if($_POST['clave_actual_1'] == $_POST['clave_actual_2']){
                if($cliente->setContrasena($_POST['clave_actual_1'])){
                    if($cliente->checkPassword()){
                        if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){
                            if($cliente->setContrasena($_POST['clave_nueva_1'])){
                                // con mto. ChangePassword se actualiza la contraseña 
                                if($cliente->changePassword()){
                                    Page::showMessage(1, "Clave cambiada", "categorias.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Clave nueva menor a 6 caracteres");
                            }
                        }else{
                            throw new Exception("Claves nuevas diferentes");
                        }
                    }else{
                        throw new Exception("Clave actual incorrecta");
                    }
                }else{
                    throw new Exception("Clave actual menor a 6 caracteres");
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
require_once("../app/views/tienda/login/contrasena_view.php");
?>