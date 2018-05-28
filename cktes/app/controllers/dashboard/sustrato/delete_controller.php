<?php
require_once("../../app/models/sustrato.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		$sustrato = new Sustrato;
		if($sustrato->setId_Sustrato($_GET['id'])){ //Establece el id en una variable para usarla despues
			if($sustrato->readSustrato()){
				if(isset($_POST['eliminar'])){
					if($sustrato->deleteSustrato()){//Borra la marca
							Page::showMessage(1, "Sustrato eliminado", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Sustrato inexistente");
			}
		}else{
			throw new Exception("Sustrato incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un sustrato", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/sustrato/delete_view.php");
?>