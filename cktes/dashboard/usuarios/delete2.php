<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Desbloquear usuario");
require_once("../../app/controllers/dashboard/usuarios/delete2_controller.php");
Page::templateFooter();
?>