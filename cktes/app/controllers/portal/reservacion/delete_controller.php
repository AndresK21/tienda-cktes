<?php
require_once("../app/models/portal/importaciones.class.php");
//Controlador para llamar la vista de la seccion nosotros
    require_once("../app/views/portal/reservacion/delete_view.php");
//-----------------------------------------------------------------------------------------
try{    
	$eliminarreser = new Importaciones;
        if(isset($_POST['eliminar'])){
            $_POST = $eliminarreser->validateForm($_POST);
                    if($eliminarreser->setId($_GET['id'])){
                    	$elim = $eliminarreser->EliminarReservacion(); 
                          if(!$elim){
                                        Page::showMessage(1, "Reservacion eliminada", 'index.php');
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                 throw new Exception("NO SE PUDO ELIMINAR");
            }
        }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
//--------------------------------------------------------------------------


?>