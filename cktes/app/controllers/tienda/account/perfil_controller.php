<?php
// Controller para editar perfil
require_once("../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
    if($cliente->setId($_SESSION['id_cliente'])){
        if($cliente->readUsuario()){
            //Se realizará cuando se de click al input 'editar'
            if(isset($_POST['editar'])){
                $_POST = $cliente->validateForm($_POST);
                // Se obtiene la información de los diferentes inputs
                if($cliente->setNombres($_POST['nombres'])){
                    if($cliente->setApellidos($_POST['apellidos'])){
                            if($cliente->setCorreo($_POST['correo'])){
                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                    if(!$cliente->setImagen($_FILES['archivo'])){
                                        throw new Exception("Error con la imagen");
                                    }
                                }
                                // Se modifica usuario
                                if($cliente->updateUsuario()){
                                    $_SESSION['correo_electronico'] = $cliente->getCorreo();
                                    $_SESSION['id_cliente'] = $cliente->getId();
                                    $_SESSION['nombres2'] = $cliente->getNombres();
                                    $_SESSION['apellidos2'] = $cliente->getApellidos();
                                    $_SESSION['imagen'] = $cliente->getImagen();
                                    Page::showMessage(1, "Perfil modificado", "categorias.php");
                                }else{
                                    throw new Exception(Database::getException());
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
            Page::showMessage(2, "Usuario inexistente", "categorias.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "categorias.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/login/perfil_view.php");
?>