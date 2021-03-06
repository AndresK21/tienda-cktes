<?php
//Controlador para eliminar productos del carrito de compra
require_once("../app/models/detalle.class.php");
require_once("../app/models/productos.class.php");
try{
	//Se obtiene el id del juguete que se desea eliminar
	if(isset($_GET['id'])){
		$detal = new DetalleCliente;
		$producto = new Producto;
		if($detal->setId($_GET['id'])){
			if($detal->readDetalle2()){
				$existencia = $detal->getCantidad();
				if(isset($_POST['eliminar'])){
					$id = $detal->getProducto();
					//Se elimina el producto del carrito
					if($detal->deleteDetalle()){
						$producto->updateCantidad2($existencia, $id);
							Page::showMessage(1, "Producto eliminado del carrito", "carrito.php");
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("Producto inexistente");
			}
		}else{
			throw new Exception("Producto incorrecta");
		}
	}else{
		Page::showMessage(3, "Producto categoría", "carrito.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "carrito.php");
}
require_once("../app/views/tienda/carrito/delete_view.php");
?>
