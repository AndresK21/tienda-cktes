<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear presentacion");
require_once("../../app/controllers/dashboard/tipo_p/create_controller.php");
Page::templateFooter();
?>