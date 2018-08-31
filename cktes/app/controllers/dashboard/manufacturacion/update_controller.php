<?php
require_once("../../app/models/pedido.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $pedido = new Pedido;
            if($pedido->setId_Pedido($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($pedido->readPedido()){
                    if(isset($_POST['editar'])){
                        $_POST = $pedido->validateForm($_POST);
                        if($pedido->setId_estado($_POST['estado'])){
                            if($pedido->updatePedido()){
                                Page::showMessage(1, "Pedido modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            throw new Exception("Seleccione un estado");
                        }
                    }
                }else{
                    Page::showMessage(2, "Pedido inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Pedido incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Pedido incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un pedido", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/manufacturacion/update_view.php");
?>