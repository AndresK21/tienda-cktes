<?php
require_once("../../app/models/desarrollo.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $desarrollo = new Desarrollo;
            if($desarrollo->setId_Desarrollo($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($desarrollo->readDesarrollo()){
                    if(isset($_POST['editar'])){
                        $_POST = $desarrollo->validateForm($_POST);
                        if($desarrollo->setid_estado($_POST['estado'])){  //Recibe el tipo de prodcuto
                            if($desarrollo->updateDesarrollo()){ //Crea el tipo de producto
                                Page::showMessage(1, "Estado del desarrollo actualizado", "index.php");
                            }else{
                                throw new Exception("No se pudo cambiar el estado");        
                            }
                        }else{
                            throw new Exception("Ingrese un estado");
                        }
                    }
                }else{
                    Page::showMessage(2, "Desarrollo inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Desarrollo incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Desarrollo incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un desarrollo", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/desarrollo/view_view.php");
?>