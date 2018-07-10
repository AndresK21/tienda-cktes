<?php
require_once("../../app/models/tipo_cliente.class.php");
try{
    $tipo = new Tipo_cliente;
    if(isset($_POST['crear_tipo'])){ //El controlador funciona con el ñpost con ese nombre
        $_POST = $tipo->validateForm($_POST);
        if($tipo->setTipo_cliente($_POST['tipo'])){
            if($tipo->createTipo_cliente()){ //Se crea el tipo de cliente
                Page::showMessage(1, "Tipo de cliente creado", "index.php");
            }else{
                throw new Exception(Database::getException());
            }
        }else{
            throw new Exception("Tipo de cliente incorrecto");
        }
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_cliente/create_view.php");
?>