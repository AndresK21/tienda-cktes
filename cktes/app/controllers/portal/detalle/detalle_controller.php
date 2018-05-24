<?php
//Controlador para llamar la vista de la seccion "detalle reservación"
require_once("../app/models/portal/importaciones.class.php");
if(isset($_SESSION['id_cliente'])){
try{
	if(isset($_GET['id'])){
		$importacion = new Importaciones;
		if($importacion->setId($_GET['id'])){
			if($importacion->readImportacion()){
				   require_once("../app/views/portal/detalle/detalle_view.php");
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
}
else{
	Page::showMessage(3,"Debes haber iniciado sesion", "index.php");
}

?>