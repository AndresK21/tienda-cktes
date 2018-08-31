<?php
require_once("../../app/models/sustrato.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $sustrato = new Sustrato;
            if($sustrato->setId_Sustrato($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($sustrato->readSustrato()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $sustrato->validateForm($_POST);
                        if($sustrato->setSustrato($_POST['sustrato'])){
                                if($sustrato->updateSustrato()){ //Modifica la marca
                                    Page::showMessage(1, "Sustrato modificado", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }                   
                        }else{
                            throw new Exception("Sustrato incorrecto");
                        } 
                    }
                }else{
                    Page::showMessage(2, "Sustrato inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Sustrato incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Sustrato incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un sustrato", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/sustrato/update_view.php");
?>