<?php
require_once("../../app/views/dashboard/templates/page2.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../../app/controllers/dashboard/empleados/login_controller.php");
Page::templateFooter();
?>