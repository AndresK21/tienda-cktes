<?php
require_once("../../app/models/tipo_producto.class.php"); //Llama al modelo de tipo de productos
try{
    if(isset($_GET['id'])){ //Lllama el Id del tipo de producto
        if($_SERVER['HTTP_REFERER']){
            $tipo_p = new Tipo_producto;
            if($tipo_p->setId_tipo_producto($_GET['id'])){ //Establece el id en la variable id_tipo para utilizarla luego
                if($tipo_p->readTipo_producto()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $tipo_p->validateForm($_POST);
                        if($tipo_p->setTipo_producto($_POST['tipo_p'])){
                            if($tipo_p->updateTipo_producto()){ //Actualiza el tipo de prodcuto
                                Page::showMessage(1, "Tipo de producto modificado", "index.php");
                            }else{
                                throw new Exception(Database::getException());
                            }
                            
                        }else{
                            throw new Exception("Tipo de producto incorrecto");
                        }
                    }
                }else{
                    Page::showMessage(2, "Producto inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Producto incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipo_p/update_view.php"); 
?>