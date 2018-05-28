<?php
//Controlador para ver el carrito
    require_once("../app/models/detalle.class.php");
    if(isset($_SESSION['id_cliente'])){
	try{
		
			$detalle = new Detalle;
			// Se obtiene el id pdel cliente 
			if($detalle->setCompra($_SESSION['id_carrito'])){
				$detalles= $detalle->readDetalle();
				if($detalles){
					 require_once("../app/views/tienda/carrito/carrito_view.php");
				}else{
					throw new Exception("No hay productos en el carrito");
				}
			}else{
				throw new Exception("Cliente incorrecto");
			}
		}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "categorias.php");
    }
}
?>