<?php
require_once("../app/models/cliente.class.php");
require_once("../app/recaptcha/php/recaptchalib.php");
try {
    // Controlador para registrar
    $usuario = new Cliente;
    // Se realizará cuando se de click al input 'registrar'
    if (isset($_POST['registrar'])) {
        $_POST = $usuario->validateForm($_POST);
        
        // RECAPTCHA GOOGLE
        //Clave Secreta
        $secret    = "6LeLpG0UAAAAADnxPpB6PMVDKZ-0yXM5AtYjFEU3";
        $response  = null;
        // comprueba la clave secreta
        $reCaptcha = new ReCaptcha($secret);
        if ($_POST["g-recaptcha-response"]) {
            $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
        }
        if ($response != null && $response->success) {
            // Se obtienen los datos de los diferentes inputs
            if ($usuario->setNombres($_POST['nombres'])) {
                if ($usuario->setApellidos($_POST['apellidos'])) {
                    if ($usuario->setCorreo($_POST['correo'])) {
                        if ($usuario->setTipoCliente($_POST['tipo_cliente'])) {
                            // Se verifica que las dos claves sean iguales
                            if ($_POST['clave1'] == $_POST['clave2']) {
                                $clave = $_POST['clave1'];
                                if ($_POST['nombres'] != $_POST['clave1']) {
                                    if ($_POST['apellidos'] != $_POST['clave1']) {
                                        if ($_POST['clave1'] != $_POST['correo']) {
                                            if (strlen($clave) > 7) {
                                                if (preg_match('`[a-z]`', $clave)) {
                                                    if (preg_match('`[A-Z]`', $clave)) {
                                                        $especiales = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
                                                        if (preg_match($especiales, $clave)) {
                                                            if (preg_match('`[0-9]`', $clave)) {
                                                                if ($usuario->setContrasena($_POST['clave1'])) {
                                                                    
                                                                    // Se crea el usuario (cliente)
                                                                    if ($usuario->createUsuario()) {
                                                                        Page::showMessage(1, "Usuario registrado, debe iniciar sesion", "acceder.php");
                                                                        $usuario->maxCliente();
                                                                        $usuario->CreateCarrito();
                                                                    } else {
                                                                        throw new Exception(Database::getException());
                                                                    }
                                                                } else {
                                                                    throw new Exception("Clave inválida");
                                                                }
                                                            } else {
                                                                throw new Exception("La clave debe tener al menos un caracter númerico ");
                                                            }
                                                        } else {
                                                            throw new Exception("La clave debe tener al menos un caracter especial ");
                                                        }
                                                    } else {
                                                        throw new Exception("La clave debe tener al menos una letra mayúscula ");
                                                    }
                                                } else {
                                                    throw new Exception("La clave debe tener al menos una letra minúscula");
                                                }
                                            } else {
                                                throw new Exception("La clave debe poseer más de 8 caracteres");
                                            }
                                        } else {
                                            throw new Exception("La clave no puede ser igual al correo");
                                        }
                                    } else {
                                        throw new Exception("La clave no puede ser igual al apellido");
                                    }
                                } else {
                                    throw new Exception("La clave no puede ser igual al nombre");
                                }
                            } else {
                                throw new Exception("Claves diferentes");
                            }
                        } else {
                            throw new Exception("tipo incorrecto");
                        }
                    } else {
                        throw new Exception("Correo incorrecto");
                    }
                } else {
                    throw new Exception("Apellidos incorrectos");
                }
            } else {
                throw new Exception("Nombres incorrectos");
            }
        } else {
            // Si el código no es válido, lanzamos mensaje de error al usuario
            throw new Exception("Porfavor llena el reCAPTCHA");
        }
    }
    
    
    // Controlador para Iniciar Sesion
    if ($usuario->getUsuarios()) {
        $usuario->getId();
        if (isset($_POST['iniciar'])) {
            $_POST = $usuario->validateForm($_POST);
            if ($usuario->setCorreo($_POST['correo_existente'])) {
                $_SESSION['correo_electronico'] = $usuario->getCorreo();
                // Se verifica la existencia del correo y que tenga un estado "Activo"
                if ($usuario->checkAlias()){
                    if ($usuario->setContrasena2($_POST['contrasena_existente'])) {
                        // Se verifica que la clave que ingrese sea correcta
                        if ($usuario->checkPassword()) {
                            if($usuario->getEstadoCliente() == 3){
                                $usuario->intentoCero($_SESSION['correo_electronico']);
                                //Si el usuario y la contraseña son correctos se inicia sesión
                                $_SESSION['id_cliente']=$usuario->getId();
                                //Esta funcion es para obtener el maximo Id de la compra
                                $usuario->maxId();
                                $_SESSION['id_carrito']=$usuario->getCarrito();
                                $_SESSION['tiempo'] = time();
                                //Se hace la comparación de que si la compra ya esta finalizada o no  
                                Page::showMessage(1, "Autenticación correcta", "categorias.php");
                            }else{
								$valor = date('Y-m-d h:i:s');
								$valor2 = new DateTime($valor);
								$valor3 = new DateTime($usuario->getFecha2());
								$bloqueo = $valor3->diff($valor2);
								if($bloqueo->d >= 1){
									if($usuario->readUsuario2($_SESSION['correo_electronico'])){ //Obtiene toda la informacion de ese cliente
                                        $usuario->updateEstado2($_SESSION['correo_electronico']); //Regresa el estado del usuario a disponible para iniciar sesion
                                        $_SESSION['id_cliente2'] = $usuario->getId();
                                        $_SESSION['correo_electronico2'] = $usuario->getCorreo();
                                        $_SESSION['nombres2'] = $usuario->getNombres();
                                        $_SESSION['apellidos2'] = $usuario->getApellidos();
                                        $usuario->intentoCero($_SESSION['correo_electronico']);
                                        //Si el usuario y la contraseña son correctos se inicia sesión
                                        $_SESSION['id_cliente']=$usuario->getId();
                                        //Esta funcion es para obtener el maximo Id de la compra
                                        $usuario->maxId();
                                        $_SESSION['id_carrito']=$usuario->getCarrito();
                                        $_SESSION['tiempo'] = time();
                                        //Se hace la comparación de que si la compra ya esta finalizada o no  
                                        Page::showMessage(1, "Autenticación correcta", "categorias.php");

                                    }else{
										throw new Exception("Su cuenta está bloqueada por exceder los intentos de inicio de sesión");
									}
								}
							}
                        }else{
							if($usuario->sumarIntento($_SESSION['correo_electronico'])){
								Page::showMessage(2, "Clave incorrecta", "acceder.php");
								$usuario->getIntentos($_SESSION['correo_electronico']);
								if($usuario->getContador() >= 3){
									$usuario->updateEstado($_SESSION['correo_electronico']);
									if($usuario->intentoCero($_SESSION['correo_electronico'])){
										Page::showMessage(3, "Su cuenta ha sido bloqueada por exceder los intentos de inicio de sesión", "acceder.php");
									}else{
										throw new Exception("No se reseteo el contador");
									}
								}
							}else{
								throw new Exception("No se sumo el intento");
							}
						}
                    }else {
                        throw new Exception("La clave debe tener al menos 8 dígitos, al menos un número, al menos una minúscula, al menos una mayúscula y al menos un caracter especial");
                    }
                }else {
                    throw new Exception("Cuenta bloqueada");
                }
            } else {
                throw new Exception("Cuenta incorrecto");
            }
        }
    } else {
        
    }
}
catch (Exception $error) {
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/login/login_view.php");
?>







