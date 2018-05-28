<?php
require_once("../../app/models/sustrato.class.php");
try{
    $sustrato = new Sustrato;
    if(isset($_POST['crear'])){
        $_POST = $sustrato->validateForm($_POST);
        if($sustrato->setSustrato($_POST['sustrato'])){
            if($sustrato->createSustrato()){
                Page::showMessage(1, "Sustrato creado", "index.php");
            }          
        }else{
            throw new Exception("Nombre de sustrato incorrecto");
        }        
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/sustrato/create_view.php");
?>