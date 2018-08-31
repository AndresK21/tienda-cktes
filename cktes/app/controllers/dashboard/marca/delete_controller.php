<?php
require_once("../../app/models/marca.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		if($_SERVER['HTTP_REFERER']){
			$marca = new Marca;
			if($marca->setId_marca($_GET['id'])){ //Establece el id en una variable para usarla despues
				if($marca->readMarca()){
					if(isset($_POST['eliminar'])){
						if($marca->deleteMarca()){//Borra la marca
								Page::showMessage(1, "Marca eliminada", "index.php");
						}
						else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Marca inexistente");
				}
			}else{
				throw new Exception("Marca incorrecta");
			}
		}else{
            Page::showMessage(2, "Marca incorrecta", "index.php");
        }
	}else{
		Page::showMessage(3, "Seleccione una marca", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/marca/delete_view.php");
?>