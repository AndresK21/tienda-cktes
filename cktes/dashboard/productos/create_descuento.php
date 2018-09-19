<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear descuento");
require_once("../../app/controllers/dashboard/descuentos/create_controller.php");
Page::templateFooter();
?>