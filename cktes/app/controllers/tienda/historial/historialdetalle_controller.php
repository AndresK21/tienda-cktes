<?php
//Controlador para ver el carrito
    require_once("../app/models/detalle.class.php");
    if(isset($_SESSION['id_carrito'])){
	try{	
			$detalle = new Detalle;
			// Se obtiene el id pdel cliente 
			if($detalle->setCompra($_GET['id'])){
				//Se obtienen los detalles del historial de compra
				$detalles= $detalle->readHistorialdetalle();
				if($detalles){
					 require_once("../app/views/tienda/historial/historialdetalle_view.php");
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