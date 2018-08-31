<?php
require_once("../../app/models/presentaciones.class.php");
try{
	if(isset($_GET['id'])){ //Llama el id de la presentaion
		if($_SERVER['HTTP_REFERER']){
			$presentaciones = new Presentacion;
			if($presentaciones->setId_Presentacion($_GET['id'])){ //Establece el id en una variable para usarla despues
				if($presentaciones->readPresentacion()){
					if(isset($_POST['eliminar'])){
						if($presentaciones->deletePresentacion()){ //Elimina la presentacion
							Page::showMessage(1, "Presentacion eliminada", "index.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Presentacion inexistente");
				}	
			}else{
				throw new Exception("Presentacion incorrecto");
			}
		}else{
            Page::showMessage(2, "Presentacion incorrecta", "index.php");
        }
	}else{
		Page::showMessage(3, "Seleccione una presentacion", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/presentaciones/delete_view.php");
?>