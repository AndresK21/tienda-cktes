<?php
// Se actualiza la cantidad de un juguete en especifico en el carrito
require_once("../app/models/detalle.class.php");
require_once("../app/models/productos.class.php");

try{
    if(isset($_GET['id'])){
        $detalle = new DetalleCliente;
        $producto = new Producto;
        if($detalle->setId($_GET['id'])){
            if($detalle->readDetalle2()){
                $existencia = $detalle->getCantidad();
                // Se realizará cuando se de clck al input 'actualizar'
                if(isset($_POST['actualizar'])){
                    $_POST = $detalle->validateForm($_POST);
                    if($detalle->setCantidad($_POST['cantidad'])){
						$id = $detalle->getProducto();
						if($existencia < $_POST['cantidad']){
							$diferencia = $_POST['cantidad'] - $existencia;
							$producto->updateCantidad1($diferencia, $id);
							if($detalle->updateDetalle3()){ //Edita la categoria
								Page::showMessage(1, "Cantidad modificada", "carrito.php");
							}else{
								throw new Exception(Database::getException());
							}
							//sacar diferrencia y restarlo al inventario
						}else if($existencia > $_POST['cantidad']){
							$diferencia = $existencia - $_POST['cantidad'];
							$producto->updateCantidad2($diferencia, $id);
							if($detalle->updateDetalle3()){ //Edita la categoria
								Page::showMessage(1, "Cantidad modificada", "carrito.php");
							}else{
								throw new Exception(Database::getException());
							}
						}else if($existencia = $_POST['cantidad']){
							if($detalle->updateDetalle3()){ //Edita la categoria
								Page::showMessage(1, "Cantidad modificada", "carrito.php");
							}else{
								throw new Exception(Database::getException());
							}
						}else{
							throw new Exception("Ha habido un problema");
						}
												                        
                    }else{
                        throw new Exception("Cantidad incorrecta");
                    } 
                }
            }else{
                Page::showMessage(2, "Producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/carrito/update_view.php");
?>