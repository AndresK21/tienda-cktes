<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar tipo de cliente");
require_once("../../app/controllers/dashboard/tipo_cliente/update_controller.php");
Page::templateFooter();
?>