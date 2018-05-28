<?php
//Controlador para llamar la vista de la seccion "Reservación"
require_once("../app/models/portal/importaciones.class.php");

if(isset($_SESSION['id_cliente'])){

try{
	$importacion = new Importaciones;
	if ($importacion->setCliente($_SESSION['id_cliente'])){
		$reservaciones = $importacion->cargarReservaciones();
			if ($reservaciones) {
				 require_once("../app/views/portal/reservacion/reservacion_view.php");
			}
			else{
				throw new Exception("NO tiene reservaciones pendientes");	
			}
		}else{
			throw new Exception("Cliente no registrado");
			
		}	
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
 }

}
else{
	Page::showMessage(3,"Debes haber iniciado sesion", "index.php");
}

?>   

