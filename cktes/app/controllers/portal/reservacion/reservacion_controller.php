<?php
//Controlador para llamar la vista de la seccion "Reservación"
require_once("../app/models/reservaciones.class.php");
//se verifica si hay usuario registrado
if(isset($_SESSION['id_cliente'])){
try{
	//se verifica si hay un id en la pagina
		$importacion = new Reservacion;
		if($importacion->setId_cliente($_SESSION['id_cliente'])){
			//Se lee la importaciones
             $reservaciones = $importacion->cargarReservaciones();
			if($reservaciones){
				 require_once("../app/views/portal/reservacion/reservacion_view.php");
			}else{
				throw new Exception("No hay reservaciones pendientes");
			}
		}else{
			throw new Exception("Error incorrecto");
		}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
 }
}
else{
	Page::showMessage(3,"Debes haber iniciado sesion", "index.php");
}



?>   

