<?php
require_once("../../app/models/pedido.class.php");
require_once("../../app/models/sustrato.class.php");
require_once("../../app/models/tipo_placa.class.php");
try{
	$pedido = new Pedido;
	if(isset($_POST['buscar'])){
		$_POST = $pedido->validateForm($_POST);
		$data = $pedido->searchPedidon($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $pedido->getPedidon();
		}
	}else{
		$data = $pedido->getPedidon();
    }
    











	if($data){
		require_once("../../app/views/dashboard/manufacturacion/index_view.php");
	}else{
		require_once("../../app/views/dashboard/manufacturacion/index_view.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>