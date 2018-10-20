<?php
require_once("../../app/models/permisos.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		if($_SERVER['HTTP_REFERER']){
			$permiso = new Permiso;
			if($permiso->setId_permiso($_GET['id'])){ //Establece el id en una variable para usarla despues
				if($permiso->readPermiso()){
					if(isset($_POST['eliminar'])){
						if($permiso->deletePermiso()){//Borra la marca
							Page::showMessage(1, "Tipo de usuario eliminado", "index.php");
						}
						else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Tipo de usuario inexistente");
				}
			}else{
				throw new Exception("Tipo de usuario incorrecto");
			}
		}else{
            Page::showMessage(2, "Tipo de usuario incorrecto", "index.php");
        }
	}else{
		Page::showMessage(3, "Seleccione un tipo de usuario", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/permisos/delete_view.php");
?>