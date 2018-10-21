<?php
require_once("../../app/models/desarrollo.class.php");
require_once("../../app/models/tipo_desarrollo.class.php");
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

	$desarrollo = new Desarrollo;
	if(isset($_POST['buscar'])){
		$_POST = $desarrollo->validateForm($_POST);
		$data = $desarrollo->searchDesarrollo($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $desarrollo->getDesarrolloss2($empieza, $por_pagina);
		}
	}else{
		$data = $desarrollo->getDesarrolloss2($empieza, $por_pagina);
	}
	
	if(isset($_POST['buscar2'])){
		$_POST = $desarrollo->validateForm($_POST);
		$data3 = $desarrollo->searchDesarrollo2($_POST['busqueda2']);
		if($data3){
			$rows = count($data3);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data3 = $desarrollo->getDesarrollosCom2($empieza2, $por_pagina2);
		}
	}else{
		$data3 = $desarrollo->getDesarrollosCom2($empieza2, $por_pagina2);
    }
    
	$tipo = new Tipo_desarrollo;
	if(isset($_POST['buscar_tipo'])){
		$_POST = $tipo->validateForm($_POST);
		$data2 = $tipo->searchTipo_desarrollo($_POST['busqueda_tipo']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $tipo->getTipo_desarrollos();
		}
	}else{
		$data2 = $tipo->getTipo_desarrollos();
    }

	if($data){
		require_once("../../app/views/dashboard/desarrollo/index_view.php");
	}else{
		require_once("../../app/views/dashboard/desarrollo/index_view.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>