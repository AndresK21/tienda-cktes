<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar tipo de producto");
require_once("../../app/controllers/dashboard/tipo_p/update_controller.php");
Page::templateFooter();
?>