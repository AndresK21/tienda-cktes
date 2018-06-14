<?php
require_once("../../app/models/presentaciones.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la presentacion
        $presentacion = new Presentacion;
        if($presentacion->setId_presentacion($_GET['id'])){ //Estbalece el id en la variable para usarla despues
            if($presentacion->readPresentacion()){
                if(isset($_POST['actualizar'])){
                    $_POST = $presentacion->validateForm($_POST);
                    if($presentacion->setPresentacion($_POST['presentacion'])){
                        if($presentacion->updatePresentacion()){ //Modifica la presentacion
                            Page::showMessage(1, "Presentacion modificada", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }                       
                    }else{
                        throw new Exception("Presentacion incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Presentacion inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Presentacion incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una presentacion", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/presentaciones/update_view.php");
?>