<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear tipo de desarrollo");
require_once("../../app/controllers/dashboard/tipo_desarrollo/create_controller.php");
Page::templateFooter();
?>