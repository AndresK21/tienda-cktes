<?php
//Controlador para llamar la vista de la seccion "detalle reservación"
require_once("../app/models/portal/importaciones.class.php");
if(isset($_SESSION['id_cliente'])){
try{
    //verifica si existe la variable
	if(isset($_GET['id'])){
		$importacion = new Importaciones;
		if($importacion->setId($_GET['id'])){
            //se hace la consulta con los datos de la importacion
			if($importacion->readImportacion()){
				   require_once("../app/views/portal/detalle/detalle_view.php");
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
}
else{
	Page::showMessage(3,"Debes haber iniciado sesion", "index.php");
}
//aqui empieza el try para comprar
try{    
	$comprar = new Importaciones;
        if(isset($_POST['comprar'])){
            //se valida el formulario
            $_POST = $comprar->validateForm($_POST);
            if($comprar->setCantidad($_POST['cantidad'])){
                if($comprar->setCliente($_SESSION['id_cliente'])){
                    if($comprar->setId($_GET['id'])){
                        //luego se manda a leer el producto
                        if(!$comprar->readImportaciones()){
                            //luego se manda a crear la reservacion
                           if(!$comprar->createReservacion()){
                                        Page::showMessage(1, "Añadido al carrito", null);
                                    }else{
                                        throw new Exception(Database::getException());
                                    }
                                }
                                else{
                                Page::showMessage(3, "Este producto ya esta agregado", null);
                    }
                }else{
                        throw new Exception("Producto incorrecto");
                    }
                }else{
                    throw new Exception("Usuario incorrectos");
                }
            }else{
                throw new Exception("Cantidad incorrectos");
            }
        }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}


?>