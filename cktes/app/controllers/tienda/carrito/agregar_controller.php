<?php
// Controlador para agregar productos al carrito
require_once("../app/models/detalle.class.php");
try{        
    $agregar = new Detalle;
        // Se realizará cuando se de click al input 'agregar'
        if(isset($_POST['agregar'])){
            $_POST = $agregar->validateForm($_POST);
            // Se obtienen los datos del juguete para agregar en ele carrito
            if($agregar->setCantidad($_POST['cantidad'])){
                if($agregar->setCompra($_SESSION['id_carrito'])){
                    if($agregar->setProducto($_GET['id'])){
                        // Si el producto que se quiere agregar al carrito ya existe en él sólo de modificará la cantidad
                        if(!$agregar->readCarrito()){
                            // Se agrega el producto al carrito
                           if($agregar->createDetalle()){
                                Page::showMessage(1, "Producto añadido al carrito", null);
                            }else{
                                throw new Exception(Database::getException());
                            }
                        }else{
                            Page::showMessage(4, "Producto ya esta añadido", null);
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