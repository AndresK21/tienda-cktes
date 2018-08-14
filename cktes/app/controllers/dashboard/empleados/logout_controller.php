<?php
require_once("../../app/models/empleado.class.php");
$object = new Empleado;
$object->unsetIp($_SESSION['correo_electronico2']);
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>