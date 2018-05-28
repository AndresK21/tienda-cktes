<?php
require_once("../../app/models/tipo_desarrollo.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        $tipo = new Tipo_desarrollo;
        if($tipo->setId_tipo($_GET['id'])){ //Establece el id en una varible para usarla despues
            if($tipo->readTipo_desarrollo()){
                if(isset($_POST['actualizar'])){
                    $_POST = $tipo->validateForm($_POST);
                    if($tipo->setTipo_desarrollo($_POST['tipo'])){
                            if($tipo->updateTipo_desarrollo()){ //Modifica la marca
                                Page::showMessage(1, "Tipo de desarrollo modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }                   
                    }else{
                        throw new Exception("Tipo de desarrollo incorrecto");
                    } 
                }
            }else{
                Page::showMessage(2, "Tipo de desarrollo inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Tipo de desarrollo incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un tipo de desarrollo", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_desarrollo/update_view.php");
?>