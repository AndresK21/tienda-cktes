<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar descuento");
require_once("../../app/controllers/dashboard/descuentos/update_controller.php");
Page::templateFooter();
?>