<?php
require_once("../../app/models/productos.class.php"); //Llama el modelo Categoria
require_once("../../app/models/valoraciones.class.php");
try{
	if(isset($_GET['id'])){
		$producto = new Producto;
		$valoraciones = new Valoracion;
		if($producto->setId_producto($_GET['id'])){
			if($producto->readProducto2()){
				if($valoraciones->setId_producto($_GET['id'])){
					if($valoraciones->getValoracionesProducto()){
						$valoracion2 = $valoraciones->getValoracionesProducto();
					}else{
						throw new Exception("Este producto no tiene comentarios");
					}
				}else{
					throw new Exception("Valoracion incorrecta");
				}

			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecto");
		}
	}else{
		throw new Exception("Seleccione producto");
	}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/producto/comentario_view.php");
?>