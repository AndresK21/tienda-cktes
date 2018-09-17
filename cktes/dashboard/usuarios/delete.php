<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Bloquear usuario");
require_once("../../app/controllers/dashboard/usuarios/delete_controller.php");
Page::templateFooter();
?>