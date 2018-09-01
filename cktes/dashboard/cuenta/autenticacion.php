<?php
require_once("../../app/views/dashboard/templates/page3.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../../app/controllers/dashboard/empleados/autenticacion_controller.php");
Page::templateFooter();
?>