<?php
require_once("../../app/models/impuestos.class.php"); //Llama el modelo del tipo de producto
try{
    if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            $impuesto = new Impuesto;
            if($impuesto->setId_impuesto($_GET['id'])){
                if($impuesto->readImpuesto()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $impuesto->validateForm($_POST);
                        if($impuesto->setNombre($_POST['nombre'])){  //Recibe el tipo de prodcuto
                            if($impuesto->setPorcentaje($_POST['porcentaje'])){
                                if($impuesto->updateImpuesto()){ //Crea el tipo de producto
                                    Page::showMessage(1, "Impuesto modificado", "index.php");
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
                }else{
                    Page::showMessage(2, "Impuesto inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Impuesto incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Impuesto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un impuesto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/impuesto/update_view.php");
?>