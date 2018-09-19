<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Compras realizadas");
require_once("../../app/controllers/dashboard/clientes/detalle_controller.php");
Page::templateFooter();
?>