<?php
// Se actualiza la cantidad de un juguete en especifico en el carrito
require_once("../app/models/detalle.class.php");
try{
    if(isset($_GET['id'])){
        $detalle = new Detalle;
        if($detalle->setId($_GET['id'])){
            if($detalle->readProducto()){
                // Se realizará cuando se de clck al input 'actualizar'
                if(isset($_POST['actualizar'])){
                    $_POST = $detalle->validateForm($_POST);
                    if($detalle->setCantidad($_POST['cantidad'])){
                            // Se modifica la cantidad
                            if($detalle->updateDetalle()){
                                Page::showMessage(1, "Cantidad modificada modificado", "carrito.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/carrito/update_view.php");
?>