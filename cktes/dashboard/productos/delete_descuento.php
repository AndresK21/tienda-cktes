<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar descuento");
require_once("../../app/controllers/dashboard/descuentos/delete_controller.php");
Page::templateFooter();
?>