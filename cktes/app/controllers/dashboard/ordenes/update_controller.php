<?php
require_once("../../app/models/detalle.class.php"); //Llama el modelo del tipo de producto
try{
    if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            $orden = new DetalleCliente;
            if($orden->setId($_GET['id'])){
                if($orden->readEstado()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $orden->validateForm($_POST);
                        if($orden->setEstado($_POST['estado'])){  //Recibe el tipo de prodcuto
                            if($orden->updateOrden()){ //Crea el tipo de producto
                                Page::showMessage(1, "Estado de la compra actualizado", "index.php");
                            }else{
                                throw new Exception("No se pudo finalizar la compra");        
                            }
                        }else{
                            throw new Exception("Ingrese un estado");
                        }
                    }
                }else{
                    Page::showMessage(2, "Orden inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Orden incorrecta", "index.php");
            }
        }else{
            Page::showMessage(2, "Orden incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una orden", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/ordenes/update_view.php");
?>