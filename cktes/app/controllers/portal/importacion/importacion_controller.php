<?php
require_once("../app/models/portal/importaciones.class.php");

if (isset($_SESSION['id_cliente'])) {
try{
	$buscar = new Importaciones;
	if(isset($_POST['buscar'])){
		$_POST = $buscar->validateForm($_POST);
		$importaciones = $buscar->searchONLYProducto($_POST['busqueda']);
		if($importaciones){
			$rows = count($importaciones);
			Page::showMessage(4, "Se encontraron $rows resultado", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$importaciones = $buscar->getImportacionesONLY();
		}
	}else{
		$importaciones = $buscar->getImportacionesONLY();
	}
	if($importaciones){
		 require_once("../app/views/portal/importacion/importacion_view.php");
	}else{
		Page::showMessage(4, "No hay disponibles disponibles", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
 }
   else{
   	Page::showMessage(4, "Debes iniciar sesion para poder ver esta pagina", "index.php");
   }
?>