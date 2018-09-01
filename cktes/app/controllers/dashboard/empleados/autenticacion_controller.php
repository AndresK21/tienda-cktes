<?php
require_once("../../app/models/empleado.class.php");
try{
    $object = new Empleado;
        if(isset($_POST['continuar'])){
            $_POST = $object->validateForm($_POST);
            if($object->readEmpleado2($_SESSION['correo_electronico2_d'])){
                if($object->getAut()){
                    $aut = $object->getAut();
                    if($aut == $_POST['codigo']){
                        Page::showMessage(1, "Autenticación correcta", "index.php");
                    }else{
                        throw new Exception("Código incorrecto, vuelva a intentarlo");
                    }
                }else{
                    throw new Exception("el error");
                }
            }else{
                Page::showMessage(3, "Correo electronico incorrecto", "../cuenta/logout.php");
            }
        }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/cuenta/autenticacion_view.php");
?>