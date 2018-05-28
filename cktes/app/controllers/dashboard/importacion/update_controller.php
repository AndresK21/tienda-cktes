<?php
require_once("../../app/models/reservaciones.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        $reservacion = new Reservacion;
        if($reservacion->setId_Reservacion($_GET['id'])){ //Establece el id en una varible para usarla despues
            if($reservacion->readReservacion()){
            }else{
                Page::showMessage(2, "Desarrollo inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Desarrollo incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un desarrollo", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/reservacion/update_view.php");
?>