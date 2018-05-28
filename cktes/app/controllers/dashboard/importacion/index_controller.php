<?php
require_once("../../app/models/reservaciones.class.php");
try{
	$reservacion = new Reservacion;
	if(isset($_POST['buscar'])){
		$_POST = $reservacion->validateForm($_POST);
		$data = $reservacion->searchReservacion($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $reservacion->getReservacion();
		}
	}else{
		$data = $reservacion->getReservacion();
	}
	if($data){
		require_once("../../app/views/dashboard/reservacion/index_view.php");
	}else{
		require_once("../../app/views/dashboard/reservacion/index_view.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>