<?php
require_once("../app/models/pedido.class.php");//Llama el modelo Categoria
require_once("../app/models/productos.class.php"); 
try{
    $pedido = new Pedido;
    if($pedido->setId_cliente($_SESSION['id_cliente'])){
        $pedidos = $pedido->getPedidosT();
        if($pedidos){
        //Controlador para llamar la vista de la seccion pedidos
         require_once("../app/views/portal/pedido/pedido_view.php");          
        }else{
            throw new Exception('No hay pedidos');
        }
    }
    else{ 
        throw new Exception('Cliente desconocido');
    }
}catch(Exception $error){
	Page::showMessage(3, $error->getMessage(), "index.php");
}

try{
    $pedido = new Pedido;
    if (isset($_POST['cancelar'])) {
     if ($pedido->setId_pedido($_POST['id'])) {
            if ($pedido->CancelarP()) {
                Page::showMessage(1, "Pedido cancelado", "index.php");
            }else{
                throw new Exception("Error al eliminarlo");
                
            }
        }else{
            throw new Exception("Cliente incorrecto");
        }
    }  
}catch(Exception $error){
    Page::showMessage(3, $error->getMessage(), "index.php");
}
?>