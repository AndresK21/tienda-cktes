 <?php
 //Controlador para poder realizar una compra
require_once("../app/models/detalle.class.php"); 
try{
// Se realizará cuando se de click al input 'comprar'   
if(isset($_POST['comprar'])){
    $comprar = new Detalle;
      $_POST = $comprar->validateForm($_POST);
            if($comprar->setCompra($_SESSION['id_carrito'])){
                  $producto = $comprar->getCarrito();
                  // Se hace una cuenta de los productos que hay 
                  if ($producto) {                        
                    $cantidades = count($productos);
                    $existencias = null;
                    for ($i=0; $i < $cantidades ; $i++) { 
                    if($productos[$i]['Existencias']>=$productos[$i]['cantidad']){    
                          $comprar->setCompra($_SESSION['id_carrito']);                
                          // Se cambia el estado de "En proceso" a "Finalizado"
                          $comprar->Comprar();
                          // Se resta la cantidad de productos del carrito a las existencias generales del producto
                          $existencias = ($productos[$i]['Existencias']-$productos[$i]['cantidad']);
                          $comprar->setProducto($productos[$i]['id_producto']);
                          $comprar->setCantidad($existencias);
                          // Se modifican existencias en la tabla juguetes
                          $comprar->Modificarexistencia();     
                          Page::showMessage(1, "Compra Realizada", 'categorias.php');
                          //Se crea otra compra seleccionando el máximo Id
                          $comprar->setCliente($_SESSION['id_cliente']);
                          $comprar->createCarrito();
                          $comprar->maxId();  
                          $_SESSION['id_carrito'] = $comprar->getCompra();
                        }
                  
                    else {
                      Page::showMessage(2, "No se puede realizar compra porque no hay suficientes productos",null);
                          }
                    }                
                 }else{
                    Page::showMessage(2, "ERROR EN ALGO", 'index.php');
                     }

          }else{
                 throw new Exception("NO CLIENTE");
               }
}
}catch(Exception $error){
Page::showMessage(2, $error->getMessage(), 'index.php');
}
//--------------------------------------------------------------------------
?>