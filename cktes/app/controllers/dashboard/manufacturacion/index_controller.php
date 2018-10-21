<?php
require_once("../../app/models/pedido.class.php");
require_once("../../app/models/sustrato.class.php");
require_once("../../app/models/tipo_placa.class.php");
try{
	//cantidad de registros por página
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

	$pedido = new Pedido;
	if(isset($_POST['buscar_nuevo'])){
		$_POST = $pedido->validateForm($_POST);
		$data = $pedido->searchPedidon($_POST['busqueda_nuevo']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $pedido->getPedidon2($empieza, $por_pagina);
		}
	}else{
		$data = $pedido->getPedidon2($empieza, $por_pagina);
    }
    
    $pedidoc = new Pedido;
	if(isset($_POST['buscar_com'])){
		$_POST = $pedidoc->validateForm($_POST);
		$data2 = $pedidoc->searchPedidoc($_POST['busqueda_com']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $pedidoc->getPedidoc2($empieza2, $por_pagina2);
		}
	}else{
		$data2 = $pedidoc->getPedidoc2($empieza2, $por_pagina2);
    }

    $sustrato = new Sustrato;
	if(isset($_POST['buscar_sustrato'])){
		$_POST = $sustrato->validateForm($_POST);
		$data3 = $sustrato->searchSustrato($_POST['busqueda_sustrato']);
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