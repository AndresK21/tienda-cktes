<?php
require_once("../../app/models/reservaciones.class.php");
require_once("../../app/models/importaciones.class.php");
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

	$importacion = new Importacion;
	if(isset($_POST['buscar_impor'])){
		$_POST = $importacion->validateForm($_POST);
		$data2 = $importacion->searchImportacion($_POST['busqueda_impor']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $importacion->getImportacion();
		}
	}else{
		$data2 = $importacion->getImportacion();
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