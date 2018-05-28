<?php
require_once("../../app/models/empleado.class.php");
try{
	$usuario = new Empleado;
	if(isset($_POST['buscar'])){
		$_POST = $usuario->validateForm($_POST);
		$data = $usuario->searchEmpleado($_POST['busqueda']);
		if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $usuario->getEmpleado();
		}
	}else{
		$data = $usuario->getEmpleado();
	}
	if($data){
		require_once("../../app/views/dashboard/usuario/index_view.php");
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>