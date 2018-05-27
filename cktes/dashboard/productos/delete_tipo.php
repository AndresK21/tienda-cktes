<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar tipo de producto");
require_once("../../app/controllers/dashboard/tipo_p/delete_controller.php");
Page::templateFooter();
?>