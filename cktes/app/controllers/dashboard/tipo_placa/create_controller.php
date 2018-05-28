<?php
require_once("../../app/models/tipo_placa.class.php");
try{
    $tipo = new Tipo_placa;
    if(isset($_POST['crear'])){ //El controlador funciona con el ñpost con ese nombre
        $_POST = $tipo->validateForm($_POST);
        if($tipo->setTipo_placa($_POST['tipo'])){
            if($tipo->createTipo_placa()){ //Se crea la marca
                Page::showMessage(1, "Tipo de placa creada", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Tipo de placa incorrecta");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_placa/create_view.php");
?>