<?php
require_once("../app/views/portal/templates/page.class.php");
Page::templateHeader("Mis pedidos");
require_once("../app/controllers/portal/pedido/pedido_controller.php");
Page::templateFooter(); 
?>