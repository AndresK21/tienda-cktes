<?php
//Controlador para ver el carrito
    require_once("../../app/models/detalle.class.php");
    if(isset($_GET['id'])){
	try{
			$detalle = new DetalleCliente;
			// Se obtiene el id pdel cliente 
			if($detalle->setCliente($_GET['id'])){
				//Se obtienen el historial de compras
				$detalles= $detalle->readHistorial();
				if($detalles){
					 require_once("../../app/views/dashboard/clientes/historial_view.php");
				}else{
					throw new Exception("Este cliente no ha realizado compras");
				}
			}else{
				throw new Exception("Cliente incorrecto");
			}
		}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "index.php");
    }
}
?>