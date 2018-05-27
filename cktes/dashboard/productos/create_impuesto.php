<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear impuesto");
require_once("../../app/controllers/dashboard/impuesto/create_controller.php");
Page::templateFooter();
?>