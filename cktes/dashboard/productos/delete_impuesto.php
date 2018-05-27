<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar impuesto");
require_once("../../app/controllers/dashboard/impuesto/delete_controller.php");
Page::templateFooter();
?>