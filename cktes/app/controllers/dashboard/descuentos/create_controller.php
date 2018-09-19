<?php
require_once("../../app/models/descuentos.class.php"); //Llama el modelo del tipo de producto
try{
    $descuento = new Descuento;
    if(isset($_POST['crear'])){
        $_POST = $descuento->validateForm($_POST);
        if($descuento->setDescuento($_POST['descuento'])){
            if($descuento->createDescuento()){ //Crea el tipo de producto
                Page::showMessage(1, "Descuento creado", "index.php");
            }else{
                throw new Exception("No se pudo crear el descuento");        
            }
        }else{
            throw new Exception("Ingrese un porcentaje de descuento");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/descuentos/create_view.php");
?>