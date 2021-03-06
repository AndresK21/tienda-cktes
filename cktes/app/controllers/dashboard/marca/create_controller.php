<?php
require_once("../../app/models/marca.class.php");
try{
    $marca = new Marca;
    if(isset($_POST['crear_marca'])){ //El controlador funciona con el ñpost con ese nombre
        $_POST = $marca->validateForm($_POST);
        if($marca->setMarca($_POST['marca'])){
            if($marca->createMarca()){ //Se crea la marca
                Page::showMessage(1, "Marca creada", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Marca incorrecta");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/marca/create_view.php");
?>