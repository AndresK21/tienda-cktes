<?php
require_once("../../app/models/reservaciones.class.php");
require_once("../../app/models/importaciones.class.php");
try{
	$por_pagina=10;
	if (isset($_GET["pagina"])) {
	$pagina = $_GET["pagina"];
	}
	else {
	$pagina=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza = ($pagina-1) * $por_pagina;


	$por_pagina2=10;
	if (isset($_GET["pagina2"])) {
	$pagina2 = $_GET["pagina2"];
	}
	else {
	$pagina2=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza2 = ($pagina2-1) * $por_pagina2;

	$reservacion = new Reservacion;
	if(isset($_POST['buscar'])){
		$_POST = $reservacion->validateForm($_POST);
		$data = $reservacion->searchReservacion($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $reservacion->getReservacion2($empieza, $por_pagina);
		}
	}else{
		$data = $reservacion->getReservacion2($empieza, $por_pagina);
	}

	if(isset($_POST['buscar2'])){
		$_POST = $reservacion->validateForm($_POST);
		$data2 = $reservacion->searchReservacion2($_POST['busqueda2']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $reservacion->getReservacionCom2($empieza2, $por_pagina2);
		}
	}else{
		$data2 = $reservacion->getReservacionCom2($empieza2, $por_pagina2);
	}

	
	
	$por_pagina3=10;
	if (isset($_GET["pagina3"])) {
	$pagina3 = $_GET["pagina3"];
	}
	else {
	$pagina3=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza3 = ($pagina3-1) * $por_pagina3;


	$por_pagina4=10;
	if (isset($_GET["pagina4"])) {
	$pagina4 = $_GET["pagina4"];
	}
	else {
	$pagina4=1;
	}
	// la pagina inicia en 0 y se multiplica $por_pagina
	$empieza4 = ($pagina4-1) * $por_pagina4;
	

	$importacion = new Importacion;
	if(isset($_POST['buscar_impor'])){
		$_POST = $importacion->validateForm($_POST);
		$data3 = $importacion->searchImportacion($_POST['busqueda_impor']);
		if($data3){
			$rows = count($data3);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data3 = $importacion->getImportacion2($empieza3, $por_pagina3);
		}
	}else{
		$data3 = $importacion->getImportacion2($empieza3, $por_pagina3);
	}

	if(isset($_POST['buscar_impor2'])){
		$_POST = $importacion->validateForm($_POST);
		$data4 = $importacion->searchImportacion2($_POST['busqueda_impor2']);
		if($data4){
			$rows = count($data4);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data4 = $importacion->getImportacionCom2($empieza3, $por_pagina3);
		}
	}else{
		$data4 = $importacion->getImportacionCom2($empieza3, $por_pagina3);
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