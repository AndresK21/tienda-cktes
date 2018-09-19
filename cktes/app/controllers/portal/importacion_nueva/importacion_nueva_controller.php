<?php
     require_once("../app/models/importaciones.class.php");
try{
    $importacion = new Importacion;
	if (isset($_SESSION['id_cliente'])) {
     if (isset($_POST['enviar'])) { 
     	if ($importacion->setProducto($_POST['nombres'])) {
     		if ($importacion->setCantidad($_POST['cantidad'])) {
				if ($importacion->setId_cliente($_SESSION['id_cliente'])) {
					if($importacion->createImportacionNueva()) {
						Page::showMessage(1, "Importacion nueva registrada", "index.php");
					}else {
						throw new Exception(Database::getException());
					}
				}else{
					throw new Exception("Cliente desconocido");
				}
     		}else{
				 throw new Exception("Cantidad incorrecta");
     				}
     	}else{
			 throw new Exception("Nombre de importacion incorrecto");
     				}
     }
	}
	else{
		throw new Exception("Debes iniciar sesion");		
	}
     
 }
  catch(Exception $error){
     Page::showMessage(2, $error->getMessage(), "index.php");
  }  

//Controlador para llamar la vista de la seccion desarrollo
     require_once("../app/views/portal/importacion_nueva/importacion_nueva_view.php");
?>