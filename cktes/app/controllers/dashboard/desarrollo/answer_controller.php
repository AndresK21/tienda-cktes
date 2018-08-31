<?php
require_once("../../app/models/desarrollo.class.php");
try{
    if(isset($_GET['id'])){ //Llama al id de la maraca
        if($_SERVER['HTTP_REFERER']){
            $desarrollo = new Desarrollo;
            if($desarrollo->setId_Desarrollo($_GET['id'])){ //Establece el id en una varible para usarla despues
                if($desarrollo->readDesarrollo()){
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
require_once("../../app/views/dashboard/desarrollo/answer_view.php");
?>