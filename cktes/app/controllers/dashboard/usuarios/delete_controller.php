<?php
require_once("../../app/models/empleado.class.php");
try{
	if(isset($_GET['id'])){
		if($_SERVER['HTTP_REFERER']){
			if($_GET['id'] != $_SESSION['id_empleado_d']){
				$usuario = new Empleado;
				if($usuario->setId_empleado($_GET['id'])){
					if($usuario->readEmpleado()){
						if(isset($_POST['eliminar'])){
							if($usuario->deleteEmpleado()){
								Page::showMessage(1, "Usuario eliminado", "index.php");
							}else{
								throw new Exception(Database::getException());
							}
						}
					}else{
						throw new Exception("Usuario inexistente");
					}
				}else{
					throw new Exception("Usuario incorrecto");
				}
			}else{
				throw new Exception("No se puede eliminar a sí mismo");
			}
		}else{
			Page::showMessage(3, "Usuario incorrecto", "index.php");
		}
	}else{
		Page::showMessage(3, "Seleccione usuario", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/usuario/delete_view.php");
?>