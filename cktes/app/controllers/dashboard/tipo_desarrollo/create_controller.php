<?php
require_once("../../app/models/tipo_desarrollo.class.php");
try{
    $tipo = new Tipo_desarrollo;
    if(isset($_POST['crear'])){ //El controlador funciona con el ñpost con ese nombre
        $_POST = $tipo->validateForm($_POST);
        if($tipo->setTipo_desarrollo($_POST['tipo'])){
            if($tipo->createTipo_desarrollo()){ //Se crea la marca
                Page::showMessage(1, "Tipo de desarrollo creado", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Tipo de desarrollo incorrecto");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_desarrollo/create_view.php");
?>