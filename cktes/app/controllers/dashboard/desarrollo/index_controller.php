<?php
require_once("../../app/models/desarrollo.class.php");
require_once("../../app/models/tipo_desarrollo.class.php");
try{
	$desarrollo = new Desarrollo;
	if(isset($_POST['buscar'])){
		$_POST = $desarrollo->validateForm($_POST);
		$data = $desarrollo->searchDesarrollo($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $desarrollo->getDesarrollos();
		}
	}else{
		$data = $desarrollo->getDesarrollos();
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