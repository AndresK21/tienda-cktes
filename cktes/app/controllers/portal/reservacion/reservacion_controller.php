<?php
//Controlador para llamar la vista de la seccion "Reservación"
require_once("../app/models/portal/importaciones.class.php");
//se verifica si hay usuario registrado
if(isset($_SESSION['id_cliente'])){
try{
	//se verifica si hay un id en la pagina
		$importacion = new Importaciones;
		if($importacion->setCliente($_SESSION['id_cliente'])){
			//Se lee la importaciones
             $reservaciones = $importacion->cargarReservaciones();
			if($reservaciones){
				 require_once("../app/views/portal/reservacion/reservacion_view.php");
			}else{
				throw new Exception("No hay reservaciones pendientes");
			}
		}else{
			throw new Exception("Error incorrecto");
		}
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
 }
}
else{
	Page::showMessage(3,"Debes haber iniciado sesion", "index.php");
}


//-----------------------------------------------------------------------------------------
try{    
    if(isset($_POST['reservar'])){
            $comprar = new Importaciones;
              $_POST = $comprar->validateForm($_POST);
                    if($comprar->setCliente($_SESSION['id_cliente'])){
                          $productos = $comprar->cargarReservaciones();
                          if ($productos) {                        
                          $cantidades = count($productos);
                          $nuevaexistencia = null;
                          for ($i=0; $i < $cantidades ; $i++) { 
                            $comprar->setCliente($_SESSION['id_cliente']);
                            $comprar->setId($productos[$i]['id_reservacion']);
                            $comprar->comprarReservacion();
                          }
                          Page::showMessage(1, "Compra Realizada", 'index.php');
                          }
                          else{
                            Page::showMessage(2, "ERROR EN ALGO", 'index.php');
                          }

                          }                         
                                else{
                                 throw new Exception("NO CLIENTE");
            }
        }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), 'index.php');
}


?>   

