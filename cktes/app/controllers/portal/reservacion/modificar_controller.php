<?php
require_once("../app/models/portal/importaciones.class.php");

//-----------------------------------------------------------------------------------------
try{    
    $actualizarReser = new Importaciones;
    $actualizarReser->setId($_GET['id']);
    $cant = $actualizarReser->cargarReservaciones();
        if(isset($_POST['actualizar'])){
            $_POST = $actualizarReser->validateForm($_POST);
                    if($actualizarReser->setId($_GET['id'])){
                        if ($actualizarReser->setCantidad($_POST['cantidad'])) {
                        $elim = $actualizarReser->modificarReservacion(); 
                          if(!$elim){
                                        Page::showMessage(1, "Reservacion actualizada", 'index.php');
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }else{
                                 throw new Exception("Cantidad incorrecta");
            }
                                }else{
                                 throw new Exception("NO SE PUDO ELIMINAR");
            }
        }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
//Controlador para llamar la vista de la seccion nosotros
    require_once("../app/views/portal/reservacion/modificar_view.php");
//--------------------------------------------------------------------------
?>