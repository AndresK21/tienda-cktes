<?php
// Controlador para agregar productos al carrito
require_once("../app/models/detalle.class.php");
require_once("../app/models/productos.class.php");
try{        
    $agregar = new DetalleCliente;
        // Se realizará cuando se de click al input 'agregar'
        if($producto->readProducto2()){
        $existencias = $producto->getCantidad();
        if(isset($_POST['agregar'])){
            $cantidad_a_comprar = $_POST['cantidad'];
            if($cantidad_a_comprar <= $existencias){
            $_POST = $agregar->validateForm($_POST);
            // Se obtienen los datos del juguete para agregar en ele carrito
                if($agregar->setCantidad($_POST['cantidad'])){
                    if($agregar->setProducto($_GET['id'])){
                        if($agregar->setCompra($_SESSION['id_carrito'])){
                            // Si el producto que se quiere agregar al carrito ya existe en él sólo de modificará la cantidad
                            if(!$agregar->readCarrito()){
                                // Se agrega el producto al carrito
                            if($agregar->createDetalle()){
                                    Page::showMessage(1, "Producto añadido al carrito", "categorias.php");
                                }else{
                                    throw new Exception(Database::getException());
                                }
                            }else{
                                Page::showMessage(4, "Producto ya esta añadido", null);
                                }
                        }else{
                                throw new Exception("Carrito incorrecto");
                            }
                    }else{
                        throw new Exception("Producto incorrectos");
                    }
                }else{
                    throw new Exception("Cantidad incorrectos");
                }
            }else{
                Page::showMessage(3, "La cantidad excede las existencias", "categorias.php");
            }
        }
    }else{
        throw new Exception("Producto inexistente");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
?>