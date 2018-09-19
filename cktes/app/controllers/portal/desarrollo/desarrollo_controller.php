<?php
     require_once("../app/models/portal/desarrollo.class.php");
try{
    $desarrollo = new Desarrollo;
	if (isset($_SESSION['id_cliente'])) {
     if (isset($_POST['enviar'])) { 
     	if ($desarrollo->setMensaje($_POST['mensaje'])) {
     		if ($desarrollo->setTipo_desa($_POST['tipo'])) {
				if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
					if($desarrollo->setArchivo($_FILES['archivo'])){
						if ($desarrollo->setId($_SESSION['id_cliente'])) {
							$desarrollo->createDesarrollo();
						}else{
							throw new Exception("Cliente desconocido");
						}
					}else{
						throw new Exception("Archivo incorrecto");
						}
				}else{
					throw new Exception("Ingrese un archivo correcto");
				}
     		}else{
				 throw new Exception("Tipo incorrecto");
     				}
     	}else{
			 throw new Exception("Mensaje incorrecto");
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
     require_once("../app/views/portal/desarrollo/desarrollo_view.php");
?>