<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Acceder");
require_once("../app/controllers/tienda/account/login_controller.php");
Page::templateFooter();
$_SESSION['id_cliente'] = 4;
$_SESSION['correo_electronico'] = "ggf@gmal.com";
$_SESSION['id_carrito'] = 3;
?>