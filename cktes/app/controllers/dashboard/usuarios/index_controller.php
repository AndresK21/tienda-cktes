<?php
require_once("../../app/models/empleado.class.php");
require_once("../../app/models/permisos.class.php");
try{
	$usuario = new Empleado;
	$permiso = new Permiso;
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



	if(isset($_POST['buscar2'])){
		$_POST = $usuario->validateForm($_POST);
		$data2 = $usuario->searchEmpleado_bloq($_POST['busqueda2']);
		if($data2){
			$rows = count($data2);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data2 = $usuario->getEmpleado_bloq();
		}
	}else{
		$data2 = $usuario->getEmpleado_bloq();
	}

	if(isset($_POST['buscar3'])){
		$_POST = $permiso->validateForm($_POST);
		$data3 = $permiso->searchPermiso($_POST['busqueda3']);
		if($data3){
			$rows = count($data3);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data3 = $permiso->getPermisos();
		}
	}else{
		$data3 = $permiso->getPermisos();
	}

	if($data || $data2){
		require_once("../../app/views/dashboard/usuario/index_view.php");
	}else{
		Page::showMessage(3, "No hay usuarios disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../cuenta/");
}
?>