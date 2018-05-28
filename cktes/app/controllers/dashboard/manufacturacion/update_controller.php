<?php
require_once("../../app/models/pedido.class.php");
try{
    if(isset($_GET['id'])){
        $pedido = new Pedido;
        if($pedido->setId_pedido($_GET['id'])){
            if($pedido->readPedido()){
                if(isset($_POST['actualizar'])){
                    $_POST = $pedido->validateForm($_POST);
                    if($pedido->setId_estado($_POST['estado'])){
                        if($pedido->updatePedido()){
                            Page::showMessage(1, "Producto modificado", "index.php");
                        }                          
                    }else{
                        throw new Exception("Seleccione un estado");
                    }         
                }
            }else{
                Page::showMessage(2, "Producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/manufacturacion/update_view.php");
?>