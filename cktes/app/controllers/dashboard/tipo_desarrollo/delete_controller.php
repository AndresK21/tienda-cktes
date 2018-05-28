<?php
require_once("../../app/models/tipo_desarrollo.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		$tipo = new Tipo_desarrollo;
		if($tipo->setId_tipo($_GET['id'])){ //Establece el id en una variable para usarla despues
			if($tipo->readTipo_desarrollo()){
				if(isset($_POST['eliminar'])){
					if($tipo->deleteTipo_desarrollo()){//Borra la marca
							Page::showMessage(1, "Tipo de desarrollo eliminado", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Tipo de desarrollo inexistente");
			}
		}else{
			throw new Exception("Tipo de desarrollo incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un tipo de desarrollo", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipo_desarrollo/delete_view.php");
?>