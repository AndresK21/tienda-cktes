<?php
require_once("../../app/models/valoraciones.class.php");
try{
	if(isset($_GET['id'])){
		if($_SERVER['HTTP_REFERER']){
			$producto = new Valoracion;
			if($producto->setId_valoracion($_GET['id'])){
				if($producto->readValoracion()){
					if(isset($_POST['eliminar'])){
						if($producto->deleteValoracion()){
							Page::showMessage(1, "Producto eliminado", "index.php");
						}else{
							throw new Exception(Database::getException());
						}
					}
				}else{
					throw new Exception("Valoracion inexistente");
				}	
			}else{
				throw new Exception("Valoracion incorrecta");
			}
		}else{
			throw new Exception("Valoracion incorrecta");
		}
	}else{
		Page::showMessage(3, "Seleccione una valoracion", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/producto/delete_comen_view.php");
?>