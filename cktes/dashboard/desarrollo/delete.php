<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar tipo de desarrollo");
require_once("../../app/controllers/dashboard/tipo_desarrollo/delete_controller.php");
Page::templateFooter();
?>