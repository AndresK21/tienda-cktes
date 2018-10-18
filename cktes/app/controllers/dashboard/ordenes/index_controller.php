<?php
require_once("../../app/models/detalle.class.php");
try{
	$orden = new DetalleCliente;
	if(isset($_POST['buscar'])){
		$_POST = $orden->validateForm($_POST);
		$data = $orden->searchOrden($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $orden->getOrden();
		}
	}else{
		$data = $orden->getOrden();
	}

	if($data){
		require_once("../../app/views/dashboard/ordenes/index_view.php");
	}else{
		Page::showMessage(3, "No hay ordenes solicitadas", "../cuenta/");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>