<?php
require_once("../../app/models/reservaciones.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $reservacion = new Reservacion;
            if($reservacion->setId_Reservacion($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($reservacion->readReservacion()){
                    if(isset($_POST['editar'])){
                        $_POST = $reservacion->validateForm($_POST);
                        if($reservacion->setId_estado($_POST['estado'])){
                            if($reservacion->setFecha_estimada($_POST['fecha'])){
                                if($reservacion->updateReservacion()){
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
require_once("../../app/views/dashboard/reservacion/update_view.php");
?>