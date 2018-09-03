<?php
require_once("../app/models/cliente.class.php");
try{
    $object = new Cliente;
        if(isset($_POST['siguiente'])){
            $_POST = $object->validateForm($_POST);
            if($object->readUsuario2($_SESSION['correo_electronico'])){
                if($object->getAut()){
                    $aut = $object->getAut();
                    if($aut == $_POST['cod']){
                        Page::showMessage(1, "Autenticación correcta", "categorias.php");
                    }else{
                        throw new Exception("Código incorrecto, vuelva a intentarlo");
                    }
                }else{
                    throw new Exception("el error");
                }
            }else{
                Page::showMessage(3, "Correo electronico incorrecto", "acceder.php");
            }
        }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/login/autenticacion_public.php");
?>