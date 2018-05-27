<?php
// Controlador para registrar
require_once("../app/models/cliente.class.php");
try{
    $usuario = new Cliente;
        // Se realizará cuando se de click al input 'registrar'
        if(isset($_POST['registrar'])){
            $_POST = $usuario->validateForm($_POST);
            // Se obtienen los datos de los diferentes inputs
            if($usuario->setNombres($_POST['nombres'])){
                if($usuario->setApellidos($_POST['apellidos'])){
                    if($usuario->setCorreo($_POST['correo'])){
                        if($usuario->setTipoCliente($_POST['tipo_cliente'])){
                            // Se verifica que las dos claves sean iguales
                            if($_POST['clave1'] == $_POST['clave2']){
                                if($usuario->setContrasena($_POST['clave1'])){
                                    // Se crea el usuario (cliente)
                                    if($usuario->createUsuario()){   
                                        Page::showMessage(1, "Usuario registrado, debe iniciar sesion", "acceder.php");
                                        $usuario->maxCliente();
                                        $usuario->CreateCarrito();
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                    throw new Exception("Clave menor a 6 caracteres");
                                }
                            }else{
                                throw new Exception("Claves diferentes");
                            }
                        
                        }else{
                            throw new Exception("tipo incorrecto");
                        }
                    
                    }else{
                        throw new Exception("Correoincorrecto");
                    }
                }else{
                    throw new Exception("Apellidos incorrectos");
                }
            }else{
                throw new Exception("Nombres incorrectos");
            }
     
    }
    

///////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $usuario = new Cliente;
	if($usuario->getUsuarios()){$usuario->getId_cliente();
		if(isset($_POST['iniciar'])){
			$_POST = $usuario->validateForm($_POST);
			if($usuario->setCorreo($_POST['correo_existente'])){
				// Se verifica la existencia del correo y que tenga un estado "Activo"
				if($usuario->checkAlias()){
					if($usuario->setContrasena($_POST['clave_existente'])){
						// Se verifica que la clave que ingrese sea correcta
						if($usuario->checkPassword()){
							//Si el usuario y la contraseña son correctos se inicia sesión
							$_SESSION['id_cliente'] = $usuario->getId_cliente();
							$_SESSION['correo_electronico'] = $usuario->getCorreo();
							//Esta funcion es para obtener el maximo Id de la compra
							$usuario->maxId();  
							$_SESSION['id_carrito'] = $usuario->getCarrito();
							//Se hace la comparación de que si la compra ya esta finalizada o no
							if($usuario->getEstado() == 6){
								//Si el estado esta en finalizado se crea una nueva compra
								$usuario->CreateCarrito();        
						}
							Page::showMessage(1, "Autenticación correcta", "acceder.php");
							}else{
								throw new Exception("Clave incorrecta");
							}
						}else{
							throw new Exception("Clave menor a 6 caracteres");
						}
					}else{
						throw new Exception("Cuenta bloqueada");
					}
				}else{
					throw new Exception("Cuenta incorrecto");
				}
			}		
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "acceder.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/login/login_view.php");
?>

