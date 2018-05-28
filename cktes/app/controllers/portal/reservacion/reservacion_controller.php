<?php
//Controlador para llamar la vista de la seccion "Reservación"
require_once("../app/models/portal/importaciones.class.php");
//se verifica si hay usuario registrado
if(isset($_SESSION['id_cliente'])){
try{
	//se verifica si hay un id en la pagina
	if(isset($_GET['id'])){
		$importacion = new Importaciones;
		if($importacion->setId($_GET['id'])){
			//Se lee la importaciones
			if($importacion->readImportacion()){
				 require_once("../app/views/portal/reservacion/reservacion_view.php");
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

