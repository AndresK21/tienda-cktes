<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar usuario");
require_once("../../app/controllers/dashboard/usuarios/update_controller.php");
Page::templateFooter();
?>