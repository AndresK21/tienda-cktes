<?php
require_once("../app/models/portal/importaciones.class.php");
//se verifica si hay usuario registrado
if (isset($_SESSION['id_cliente'])) {
try{
	$buscar = new Importaciones;
	if(isset($_POST['buscar'])){
		//se valida el formulario
		$_POST = $buscar->validateForm($_POST);
		//se lee el input para la busqueda y se manda un parametro
		$importaciones = $buscar->searchONLYProducto($_POST['busqueda']);
		if($importaciones){
			//se cuenta los datos que obtiene
			$rows = count($importaciones);
			Page::showMessage(4, "Se encontraron $rows resultado", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$importaciones = $buscar->getImportacionesONLY();
		}
	}else{
		$importaciones = $buscar->getImportacionesONLY();
	}
	//se observa si tiene datos en importaciones
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