<?php
require_once("../app/models/portal/importaciones.class.php");

try{
	if(isset($_GET['id'])){
		$producto = new Producto;
		if($producto->setId($_GET['id'])){
			if($producto->readProducto()){
				require_once("../app/vistas/public/productos/detalles_view.php");
			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		throw new Exception("Seleccione producto");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}

?>