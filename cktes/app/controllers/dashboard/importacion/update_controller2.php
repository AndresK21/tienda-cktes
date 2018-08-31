<?php
require_once("../../app/models/importaciones.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $importacion = new Importacion;
            if($importacion->setId_Importacion($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($importacion->readImportacion()){
                    if(isset($_POST['editar'])){
                        $_POST = $importacion->validateForm($_POST);
                        if($importacion->setId_estado($_POST['estado'])){
                            if($importacion->setFecha_estimada($_POST['fecha'])){
                                if($importacion->updateImportacion()){
                                    Page::showMessage(1, "importacion modificada", "index.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                throw new Exception("Fecha incorrecta");
                            }
                        }else{
                            throw new Exception("Seleccione un estado");
                        }
                    }
                }else{
                    Page::showMessage(2, "Importacion inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Importacion incorrecta", "index.php");
            }
        }else{
            Page::showMessage(2, "Importacion incorrecta", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una importacion", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/reservacion/update_view2.php");
?>