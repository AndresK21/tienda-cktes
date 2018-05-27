<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear presentacion");
require_once("../../app/controllers/dashboard/presentaciones/create_controller.php");
Page::templateFooter();
?>