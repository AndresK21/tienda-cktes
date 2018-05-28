<?php
//Controlador para ver el carrito
    require_once("../app/models/detalle.class.php");
    if(isset($_SESSION['id_cliente'])){
	try{
			$detalle = new Detalle;
			// Se obtiene el id pdel cliente 
			if($detalle->setCliente($_SESSION['id_cliente'])){
				//Se obtienen el historial de compras
				$detalles= $detalle->readHistorial();
				if($detalles){
					 require_once("../app/views/tienda/historial/historial_view.php");
				}else{
					throw new Exception("No ha realizado compras");
				}
			}else{
				throw new Exception("Cliente incorrecto");
			}
		}catch(Exception $error){
		Page::showMessage(3, $error->getMessage(), "categorias.php");
    }
}
?>