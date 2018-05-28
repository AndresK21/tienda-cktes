<?php
require_once("../../app/models/tipo_placa.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		$tipo = new Tipo_placa;
		if($tipo->setId_tipo_placa($_GET['id'])){ //Establece el id en una variable para usarla despues
			if($tipo->readTipo_placa()){
				if(isset($_POST['eliminar'])){
					if($tipo->deleteTipo_placa()){//Borra la marca
							Page::showMessage(1, "Tipo de placa eliminado", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Tipo de placa inexistente");
			}
		}else{
			throw new Exception("Tipo de placa incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un tipo de placa", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipo_placa/delete_view.php");
?>