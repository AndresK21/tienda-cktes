<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Reportes");
require_once("../../app/controllers/dashboard/empleados/reportes_controller.php");
Page::templateFooter();
?>