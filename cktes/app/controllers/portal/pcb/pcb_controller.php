<?php
require_once("../app/models/pedido.class.php");
try{
    $pedido = new Pedido;
	if (isset($_SESSION['id_cliente'])) {
     if (isset($_POST['pedidos'])) { 
     	if ($pedido->setCapas($_POST['capas'])) {
     		if ($pedido->setMedida($_POST['medida'])) {
     		   if ($pedido->setTipo_placa($_POST['tipo'])) {
     		   	 if ($pedido->setSustrato($_POST['tipo_sustrato'])) {
						if ($pedido->setId_cliente($_SESSION['id_cliente'])) {
                             if ($pedido->setCantidad($_POST['cantidad'])) {
						        $pedido->createPlaca();
						        $max = $pedido->maxPlaca();
						        $id = $max[0]['Id_max'];
                                 $pedido->setId_placa($id);
                                 if($pedido->createPedidon()){
                                  Page::showMessage(1, 'Pedido solicitado', "index.php");
                                 }
                                 else{
                                 	throw new Exception("Error al solicitarlo");
                                 	
                                 }
                             }
						}
						else{
							throw new Exception("Error en el cliente");
						}
					}else{
						throw new Exception("tipo de sustrato incorrecto");
					}
				}
				else{
				 throw new Exception("tipo de placa incorrecta");
     				}
     	}else{
				 throw new Exception("Medida incorrectas");
     				}
     	}else{
			 throw new Exception("Capas incorrectas");
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
//Controlador para llamar la vista de la seccion nosotros
    require_once("../app/views/portal/pcb/pcb_view.php");
?>