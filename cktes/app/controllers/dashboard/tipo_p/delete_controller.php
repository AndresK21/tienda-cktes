<?php
require_once("../../app/models/tipo_producto.class.php"); //Llama el modelo de tipo de producto
try{
	if(isset($_GET['id'])){ //Llama el id de del tipo de de producto
		if($_SERVER['HTTP_REFERER']){
			$tipo_p = new Tipo_producto;
			if($tipo_p->setId_tipo_producto($_GET['id'])){ //Establece el id en la variable id_tipo para manejarla despues
				if($tipo_p->readTipo_producto()){
					if(isset($_POST['eliminar'])){
						if($tipo_p->deleteTipo_producto()){ //Elimina el tipo de ususario
							Page::showMessage(1, "Tipo de producto eliminado", "index.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Tipo de producto inexistente");
				}	
			}else{
				throw new Exception("Tipo de producto incorrecto");
			}
		}else{
			throw new Exception("Tipo de producto incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione un tipo de producto", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipo_p/delete_view.php");
?>