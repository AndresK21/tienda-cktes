<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar tipo de cliente");
require_once("../../app/controllers/dashboard/tipo_cliente/delete_controller.php");
Page::templateFooter();
?>