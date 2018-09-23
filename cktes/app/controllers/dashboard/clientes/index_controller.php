<?php
require_once("../../app/models/cliente.class.php");
require_once("../../app/models/tipo_cliente.class.php");
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

	//Controlador de clientes
	$cliente = new Cliente;
	if(isset($_POST['buscar_cliente'])){
		$_POST = $cliente->validateForm($_POST);
		$data = $cliente->searchCliente($_POST['busqueda_cliente']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $cliente->getClientes2($empieza, $por_pagina);
		}
	}else{
		$data = $cliente->getClientes2($empieza, $por_pagina);
	}

	if(isset($_POST['buscar_cliente2'])){
		$_POST = $cliente->validateForm($_POST);
		$data3 = $cliente->searchCliente2($_POST['busqueda_cliente2']);
		if($data3){
			$rows = count($data3);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data3 = $cliente->getClientes22($empieza, $por_pagina);
		}
	}else{
		$data3 = $cliente->getClientes22($empieza, $por_pagina);
	}

	//Controlador de clientes
	$tipo = new Tipo_cliente;
	if(isset($_POST['buscar_tipo'])){
		$_POST = $tipo->validateForm($_POST);
		$data2 = $tipo->searchTipo_cliente($_POST['busqueda_tipo']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $tipo->getTipo_clientes();
		}
	}else{
		$data2 = $tipo->getTipo_clientes();
	}

	if($data){
		require_once("../../app/views/dashboard/clientes/index_view.php");
	}else{
		Page::showMessage(4, "No hay clientes registrados en el sistema", "../cuenta/index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>