<?php
    //Controlador para cerrar sesión
    require_once("../app/models/cliente.class.php");
     //Vuelve nulo el campo del id de la base
     $object = new Cliente;
    if($object->logOut()){
        $object->unsetIp($_SESSION['correo_electronico']);
        Page::showMessage(1, "Autenticación eliminada", "acceder.php");
    }else{
        Page::showMessage(2, "Ocurrió un problema", "acceder.php");
    }
?>