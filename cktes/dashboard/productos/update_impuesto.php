<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar impuesto");
require_once("../../app/controllers/dashboard/impuesto/update_controller.php");
Page::templateFooter();
?>