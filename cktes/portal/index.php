<?php
require_once("../app/views/portal/templates/page.class.php");
Page::templateHeader("Inicio");
require_once("../app/controllers/portal/index/index_controller.php");
Page::templateFooter();  
$_SESSION['id_cliente'] = 1;
$_SESSION['correo_electronico'] = "ronnie@gmail.com";
?>