<?php
require_once("../../app/models/impuestos.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		$impuesto = new Impuesto;
		if($impuesto->setId_impuesto($_GET['id'])){ //Establece el id en una variable para usarla despues
			if($impuesto->readImpuesto()){
				if(isset($_POST['eliminar'])){
					if($impuesto->deleteImpuesto()){//Borra la marca
						Page::showMessage(1, "Impuesto eliminado", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("impuesto inexistente");
			}
		}else{
			throw new Exception("impuesto incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un impuesto", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/impuesto/delete_view.php");
?>