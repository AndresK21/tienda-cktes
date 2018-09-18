<?php
// Controller para editar perfil
require_once("../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
    if($cliente->setId($_SESSION['id_cliente'])){
        $tipo= $_SESSION['id_tipo_cliente'];
        if($cliente->readUsuario()){
              if($tipo==1){
            require_once("../app/views/tienda/login/perfil_view.php");
            //Se realizará cuando se de click al input 'editar'
            if(isset($_POST['editar'])){
                $_POST = $cliente->validateForm($_POST);
                // Se obtiene la información de los diferentes inputs
                if($cliente->setNombres($_POST['nombres'])){
                    if($cliente->setApellidos($_POST['apellidos'])){
                            if($cliente->setCorreo($_POST['correo'])){
                                if($cliente->setDUI($_POST['dui'])){
                                    echo $_POST['nada'];
                                    if($cliente->setDireccion($_POST['direccion'])){
                                        if ($cliente->setActividad($_POST['nada'])) {
                                        if($cliente->setNIT($_POST['nit'])){
                                if($cliente->setEst(isset($_POST['auten'])?2:1)){
                                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                    if(!$cliente->setImagen($_FILES['archivo'])){
                                        throw new Exception($cliente->getImageError());
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
                                throw new Exception("Error en doble autenticación");
                            }
                            }else{
                                throw new Exception("NIT incorrecto");
                            }
                        }else{
                            throw new Exception("Actividad incorrecta");
                        }
                        }else{
                                throw new Exception("Direccion incorrecta");
                            }
                        }else{
                            throw new Exception("DUI incorrectos");
                        }
                        }
                    else{
                        throw new Exception("Correo incorrectos");
                    }
                    }else{
                        throw new Exception("Apellidos incorrectos");
                    }
                }else{
                    throw new Exception("Nombres incorrectos");
                }
            }
       
    }
    else{
        require_once("../app/views/tienda/login/perfil_empresa_view.php");
        if(isset($_POST['editarE'])){
            $_POST = $cliente->validateForm($_POST);
            // Se obtiene la información de los diferentes inputs
            if($cliente->setNombres($_POST['nombres'])){
                if($cliente->setEncargado($_POST['nombreEn'])){
                        if($cliente->setCorreo($_POST['correo'])){
                            if($cliente->setCargo($_POST['cargo'])){
                            if($cliente->setNRC($_POST['nrc'])){
                                if($cliente->setDireccion($_POST['direccion'])){
                                    if ($cliente->setActividad($_POST['actividad'])) {
                                    if($cliente->setNIT($_POST['nit'])){
                            if($cliente->setEst(isset($_POST['auten'])?2:1)){
                            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                if(!$cliente->setImagen($_FILES['archivo'])){
                                    throw new Exception($cliente->getImageError());
                                }
                            }
                            // Se modifica usuario
                            if($cliente->updateUsuarioEm()){
                                $_SESSION['correo_electronico'] = $cliente->getCorreo();
                                $_SESSION['id_cliente'] = $cliente->getId();
                                $_SESSION['nombres2'] = $cliente->getNombres();
                                $_SESSION['apellidos2'] = $cliente->getApellidos();
                                $_SESSION['imagen'] = $cliente->getImagen();
                                $_SESSION['actividad']= $cliente->getActividad();
                                Page::showMessage(1, "Perfil modificado", "categorias.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Error en doble autenticación");
                        }
                        }else{
                            throw new Exception("NIT incorrecto");
                        }
                    }else{
                        throw new Exception("Actividad incorrecta");
                    }
                    }else{
                            throw new Exception("Direccion incorrecta");
                        }
                    }else{
                        throw new Exception("DUI incorrectos");
                    }
                }
                else{
                    throw new Exception("Cargo incorrectos");
                }
                    }
                else{
                    throw new Exception("Correo incorrectos");
                }
                }else{
                    throw new Exception("Apellidos incorrectos");
                }
            }else{
                throw new Exception("Nombres incorrectos");
            }
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




?>