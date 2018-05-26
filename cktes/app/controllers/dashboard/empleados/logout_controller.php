<?php
require_once("../../app/models/empleado.class.php");
$object = new Empleado;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "login.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "index.php");
}
?>