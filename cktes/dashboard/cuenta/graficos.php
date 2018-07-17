<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Graficos");
require_once("../../app/controllers/dashboard/empleados/graficos_controller.php");
Page::templateFooter();
?>