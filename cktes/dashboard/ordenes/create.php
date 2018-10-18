<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear orden");
require_once("../../app/controllers/dashboard/ordenes/create_controller.php");
Page::templateFooter();
?>