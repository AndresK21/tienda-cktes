<?php
require_once("../../app/models/tipo_placa.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $tipo = new Tipo_placa;
            if($tipo->setId_tipo_placa($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($tipo->readTipo_placa()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $tipo->validateForm($_POST);
                        if($tipo->setTipo_placa($_POST['tipo'])){
                                if($tipo->updateTipo_placa()){ //Modifica la marca
                                    Page::showMessage(1, "Tipo de placa modificado", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }                   
                        }else{
                            throw new Exception("Tipo de placa incorrecto");
                        } 
                    }
                }else{
                    Page::showMessage(2, "Tipo de placa inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Tipo de placa incorrecto", "index.php");
            }
        }else{
            Page::showMessage(3, "Tipo de placa incorrecto", "index.php");
        } 
    }else{
        Page::showMessage(3, "Seleccione un tipo de placa", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_placa/update_view.php");
?>