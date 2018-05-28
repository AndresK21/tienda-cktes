<?php
require_once("../../app/models/sustrato.class.php");
try{
    $sustrato = new Sustrato;
    if(isset($_POST['crear'])){ //El controlador funciona con el ñpost con ese nombre
        $_POST = $sustrato->validateForm($_POST);
        if($sustrato->setSustrato($_POST['sustrato'])){
            if($sustrato->createSustrato()){ //Se crea la marca
                Page::showMessage(1, "Sustrato creado", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Sustrato incorrecto");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/sustrato/create_view.php");
?>