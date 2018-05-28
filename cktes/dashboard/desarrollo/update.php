<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar tipo de desarrollo");
require_once("../../app/controllers/dashboard/tipo_desarrollo/update_controller.php");
Page::templateFooter();
?>