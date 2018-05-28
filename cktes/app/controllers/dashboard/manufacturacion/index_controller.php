<?php
require_once("../../app/models/pedido.class.php");
require_once("../../app/models/sustrato.class.php");
require_once("../../app/models/tipo_placa.class.php");
try{
	$pedido = new Pedido;
	if(isset($_POST['buscar_nuevo'])){
		$_POST = $pedido->validateForm($_POST);
		$data = $pedido->searchPedidon($_POST['busqueda_nuevo']);
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
    
    $pedidoc = new Pedido;
	if(isset($_POST['buscar_com'])){
		$_POST = $pedidoc->validateForm($_POST);
		$data = $pedidoc->searchPedidoc($_POST['busqueda_com']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $pedidoc->getPedidoc();
		}
	}else{
		$data2 = $pedidoc->getPedidoc();
    }

    $sustrato = new Sustrato;
	if(isset($_POST['buscar_sustrato'])){
		$_POST = $sustrato->validateForm($_POST);
		$data3 = $sustrato->searchSustratos($_POST['busqueda_sustrato']);
		if($data3){
			$rows = count($data3);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data3 = $sustrato->getSustratos();
		}
	}else{
		$data3 = $sustrato->getSustratos();
    }

    $tipo = new Tipo_placa;
	if(isset($_POST['buscar_tipo'])){
		$_POST = $tipo->validateForm($_POST);
		$data4 = $tipo->searchTipo_placa($_POST['busqueda_tipo']);
		if($data4){
			$rows = count($data4);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data4 = $tipo->getTipo_placas();
		}
	}else{
		$data4 = $tipo->getTipo_placas();
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