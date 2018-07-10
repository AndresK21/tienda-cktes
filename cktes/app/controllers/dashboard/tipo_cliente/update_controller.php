<?php
require_once("../../app/models/tipo_cliente.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        $tipo = new Tipo_cliente;
        if($tipo->setId_tipo($_GET['id'])){ //Establece el id en una varible para usarla despues
            if($tipo->readTipo_cliente()){
                if(isset($_POST['actualizar_tipo'])){
                    $_POST = $tipo->validateForm($_POST);
                    if($tipo->setTipo_cliente($_POST['tipo'])){
                            if($tipo->updateTipo_cliente()){ //Modifica el tipo de cliente
                                Page::showMessage(1, "Tipo de cliente modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }                   
                    }else{
                        throw new Exception("Tipo de cliente incorrecto");
                    } 
                }
            }else{
                Page::showMessage(2, "Tipo de cliente inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Tipo de cliente incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un tipo de cliente", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_cliente/update_view.php");
?>