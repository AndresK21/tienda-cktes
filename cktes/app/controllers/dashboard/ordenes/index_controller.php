<?php
require_once("../../app/models/detalle.class.php");
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

	$orden = new DetalleCliente;
	if(isset($_POST['buscar'])){
		$_POST = $orden->validateForm($_POST);
		$data = $orden->searchOrden($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $orden->getOrden22($empieza, $por_pagina);
		}
	}else{
		$data = $orden->getOrden22($empieza, $por_pagina);
	}

	if(isset($_POST['buscar2'])){
		$_POST = $orden->validateForm($_POST);
		$data2 = $orden->searchOrden2($_POST['busqueda2']);
		if($dat2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $orden->getOrden222($empieza2, $por_pagina2);
		}
	}else{
		$data2 = $orden->getOrden222($empieza2, $por_pagina2);
	}

	if($data){
		require_once("../../app/views/dashboard/ordenes/index_view.php");
	}else{
		Page::showMessage(3, "No hay ordenes nuevas", "../cuenta/");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>