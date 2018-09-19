<?php
require_once("../../app/models/descuentos.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		if($_SERVER['HTTP_REFERER']){
			$descuento = new Descuento;
			if($descuento->setId_descuento($_GET['id'])){ //Establece el id en una variable para usarla despues
				if($descuento->readDescuento()){
					if(isset($_POST['eliminar'])){
						if($descuento->deleteDescuento()){//Borra la marca
							Page::showMessage(1, "Descuento eliminado", "index.php");
						}
						else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Descuento inexistente");
				}
			}else{
				throw new Exception("Descuento incorrecto");
			}
		}else{
            Page::showMessage(2, "Descuento incorrecto", "index.php");
        }
	}else{
		Page::showMessage(3, "Seleccione un descuento", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/descuentos/delete_view.php");
?>