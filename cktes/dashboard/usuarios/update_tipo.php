<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar tipo usuario");
require_once("../../app/controllers/dashboard/permisos/update_controller.php");
Page::templateFooter();
?>