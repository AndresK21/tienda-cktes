<?php
//Controlador para poder realizar una compra
require_once("../app/models/detalle.class.php"); 
try{
  // Se realizará cuando se de click al input 'comprar'   
  if(isset($_POST['comprar'])){
    $comprar = new DetalleCliente;
    $_POST = $comprar->validateForm($_POST);
    if($comprar->setCompra($_SESSION['id_carrito'])){
      $productos = $comprar->getCarrito();
      // Se hace una cuenta de los productos que hay 
      if ($productos) {                        
        $cantidades = count($productos);
        $existencias = null;
   
        $comprar->setCompra($_SESSION['id_carrito']);                
        // Se cambia el estado de "En proceso" a "Solicitado"
        $comprar->Comprar($_SESSION['totalCarrito']);    
        //Se crea otra compra seleccionando el máximo Id
        $comprar->setCliente($_SESSION['id_cliente']);
        $comprar->createCompra();
        $comprar->maxId();
        $_SESSION['id_carrito'] = $comprar->getCompra();
        Page::showMessage(1, "Compra solicitada", 'categorias.php'); 

      }else{
        Page::showMessage(2, "Error", 'index.php');
      }

    }else{
      throw new Exception("No existe el carrito");
    }
  }

}catch(Exception $error){
  Page::showMessage(2, $error->getMessage(), 'index.php');
}
?>