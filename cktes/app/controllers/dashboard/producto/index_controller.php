<?php
require_once("../../app/models/productos.class.php");
require_once("../../app/models/marca.class.php");
require_once("../../app/models/presentaciones.class.php");
require_once("../../app/models/tipo_producto.class.php");
require_once("../../app/models/impuestos.class.php");
try{
	$producto = new Producto;
	if(isset($_POST['buscar'])){
		$_POST = $producto->validateForm($_POST);
		$data = $producto->searchProducto($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $producto->getProducto();
		}
	}else{
		$data = $producto->getProducto();
	}

	$marca = new Marca;
	if(isset($_POST['buscar_marca'])){
		$_POST = $marca->validateForm($_POST);
		$data_marca = $marca->searchMarca($_POST['busqueda_marca']);
		if($data_marca){
			$rows = count($data_marca);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data_marca = $marca->getMarcas();
		}
	}else{
		$data_marca = $marca->getMarcas();
	}

	$presentacion = new Presentacion;
	if(isset($_POST['buscar_presentacion'])){
		$_POST = $presentacion->validateForm($_POST);
		$data_presentacion = $presentacion->searchPresentacion($_POST['busqueda_presentacion']);
		if($data_presentacion){
			$rows = count($data_presentacion);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data_presentacion = $presentacion->getPresentaciones();
		}
	}else{
		$data_presentacion = $presentacion->getPresentaciones();
	}

	$tipo_p = new Tipo_producto;
	if(isset($_POST['buscar_tipo'])){
		$_POST = $tipo_p->validateForm($_POST);
		$data_tipo = $tipo_p->searchTipo_producto($_POST['busqueda_tipo']);
		if($data_tipo){
			$rows = count($data_tipo);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data_tipo = $tipo_p->getTipo_productos();
		}
	}else{
		$data_tipo = $tipo_p->getTipo_productos();
	}






	if($data){
		require_once("../../app/views/dashboard/producto/index_view.php");
	}else{
		Page::showMessage(4, "No hay productos disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>