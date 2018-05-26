<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear Usuario");
require_once("../../app/controllers/dashboard/usuarios/create_controller.php");
Page::templateFooter();
?>