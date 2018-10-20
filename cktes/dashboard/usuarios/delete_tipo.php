<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar tipo de usuario");
require_once("../../app/controllers/dashboard/permisos/delete_controller.php");
Page::templateFooter();
?>