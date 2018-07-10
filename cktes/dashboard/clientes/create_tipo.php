<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Tipos de cliente");
require_once("../../app/controllers/dashboard/tipo_cliente/create_controller.php");
Page::templateFooter();
?>