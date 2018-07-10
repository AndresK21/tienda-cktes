<?php
require_once("../../app/models/tipo_cliente.class.php");
try{
	if(isset($_GET['id'])){ //Llama al id de la marca
		$tipo = new Tipo_cliente;
		if($tipo->setId_tipo($_GET['id'])){ //Establece el id en una variable para usarla despues
			if($tipo->readTipo_cliente()){
				if(isset($_POST['eliminar'])){
					if($tipo->deleteTipo_cliente()){//Borra la marca
							Page::showMessage(1, "Tipo de cliente eliminado", "index.php");
					}
					else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Tipo de cliente inexistente");
			}
		}else{
			throw new Exception("TIpo de cliente incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un tipo de cliente", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipo_cliente/delete_view.php");
?>