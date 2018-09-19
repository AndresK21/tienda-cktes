<?php
require_once("../../app/models/descuentos.class.php"); //Llama el modelo del tipo de producto
try{
    if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            $descuento = new Descuento;
            if($descuento->setId_descuento($_GET['id'])){
                if($descuento->readDescuento()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $descuento->validateForm($_POST);
                        if($descuento->setDescuento($_POST['descuento'])){
                            if($descuento->updateDescuento()){ //Crea el tipo de producto
                                Page::showMessage(1, "Descuento modificado", "index.php");
                            }else{
                                throw new Exception("No se pudo crear el descuento");        
                            }
                        }else{
                            throw new Exception("Ingrese un porcentaje de descuento");
                        }
                    }
                }else{
                    Page::showMessage(2, "Descuento inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Descuento incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Descuento incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un descuento", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/descuentos/update_view.php");
?>