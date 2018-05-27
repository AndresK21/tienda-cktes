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
                        if($producto->setTipoCliente($_POST['tipo_cliente'])){
                            // Se verifica que las dos claves sean iguales
                            if($_POST['clave1'] == $_POST['clave2']){
                                if($usuario->setClave($_POST['clave1'])){
                                    // Se crea el usuario (cliente)
                                    if($usuario->createUsuario()){   
                                        Page::showMessage(1, "Usuario registrado", "categorias.php");
                                        $usuario->maxCliente();
                                        $usuario->CreateCompra();
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
                            throw new Exception("Correo incorrecto");
                        }
                    
                    }else{
                        throw new Exception("Telefono incorrecto");
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
require_once("../app/views/tienda/login/login_view.php");
?>
