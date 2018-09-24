<?php
//Controlador para ver el carrito
    require_once("../../app/models/detalle.class.php");
    if(isset($_GET['id'])){
	try{	
			$detalle = new DetalleCliente;
			// Se obtiene el id pdel cliente 
			if($detalle->setCompra($_GET['id'])){
				//Se obtienen los detalles del historial de compra
				$detalles= $detalle->readHistorialdetalle();
				if($detalles){
					 require_once("../../app/views/dashboard/clientes/detalle_view.php");
				}else{
					throw new Exception("No hay productos");
				}
			}else{
				throw new Exception("Cliente incorrecto");
			}
		}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "index.php");
    }
}
?>