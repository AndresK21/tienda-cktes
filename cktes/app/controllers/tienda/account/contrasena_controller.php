<?php
require_once("../app/models/cliente.class.php");
try {
    // Accioón que se va a ejecutar cuando se de click en el input con nombre "cambiar"
    if (isset($_POST['cambiar'])) {
        $cliente = new Cliente;
        $_POST   = $cliente->validateForm($_POST);
        if ($cliente->setId($_SESSION['id_cliente'])) {
            // Se que clave actual de los dos campos sean iguales
            if ($_POST['clave_actual_1'] == $_POST['clave_actual_2']) {
                if ($cliente->setContrasena2($_POST['clave_actual_1'])) {
                    if ($cliente->checkPassword()) {
                        $clave = $_POST['clave_nueva_1'];
                        if ($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']) {
                            if ($_POST['clave_nueva_1'] != $_POST['clave_actual_1']) {
                                
                                if (strlen($clave) > 7) {
                                    if (preg_match('`[a-z]`', $clave)) {
                                        if (preg_match('`[A-Z]`', $clave)) {
                                            $especiales = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                                            if (preg_match($especiales, $clave)) {
                                                if (preg_match('`[0-9]`', $clave)) {
                                                    
                                                    if ($cliente->setContrasena($_POST['clave_nueva_1'])) {
                                                        // con mto. ChangePassword se actualiza la contraseña 
                                                        if ($cliente->changePassword()) {
                                                            Page::showMessage(1, "Clave cambiada", "categorias.php");
                                                        } else {
                                                            throw new Exception(Database::getException());
                                                        }
                                                    } else {
                                                        throw new Exception("clave inválida");
                                                    }
                                                } else {
                                                    throw new Exception("La clave debe poseer un número");
                                                }
                                            } else {
                                                throw new Exception("La clave debe poseer un caracter especial");
                                            }
                                        } else {
                                            throw new Exception("La clave debe poseer al una letra mayúscula ");
                                        }
                                    } else {
                                        throw new Exception("La clave debe poseer al una letra minúscula ");
                                    }
                                } else {
                                    throw new Exception("La clave debe poseer al menos 8 caracteres ");
                                }
                                
                            } else {
                                throw new Exception("La nueva contraseña no puede ser igual a la anterior");
                            }
                        } else {
                            throw new Exception("Claves nuevas diferentes");
                        }
                    } else {
                        throw new Exception("Clave actual incorrecta");
                    }
                } else {
                    throw new Exception("Clave actual menor a 8 caracteres");
                }
            } else {
                throw new Exception("Claves actuales diferentes");
            }
        } else {
            Page::showMessage(2, "Usuario incorrecto", "index.php");
        }
    }
}
catch (Exception $error) {
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/login/contrasena_view.php");
?>