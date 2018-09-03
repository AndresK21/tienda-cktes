<?php
    //Controlador para cerrar sesión
    require_once("../app/models/cliente.class.php");
    $object = new Cliente;
    $object->unsetIp($_SESSION['correo_electronico']);  //Vuelve nulo el campo del id de la base
        if($object->logOut()){
            Page::showMessage(1, "Autenticación eliminada", "acceder.php");
        }else{
            Page::showMessage(2, "Ocurrió un problema", "acceder.php");
        }
?>