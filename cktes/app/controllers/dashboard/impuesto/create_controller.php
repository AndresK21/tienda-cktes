<?php
require_once("../../app/models/impuestos.class.php"); //Llama el modelo del tipo de producto
try{
    $impuesto = new Impuesto;
    if(isset($_POST['crear'])){
        $_POST = $impuesto->validateForm($_POST);
        if($impuesto->setNombre($_POST['nombre'])){  //Recibe el tipo de prodcuto
            if($impuesto->setPorcentaje($_POST['porcentaje'])){
                if($impuesto->createImpuesto()){ //Crea el tipo de producto
                    Page::showMessage(1, "Impuesto creado", "index.php");
                }else{
                    throw new Exception("No se pudo crear el impuesto");        
                }
            }else{
                throw new Exception("Ingrese un porcentaje");
            }
        }else{
            throw new Exception("Ingrese un nombre");
        }
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/impuesto/create_view.php");
?>