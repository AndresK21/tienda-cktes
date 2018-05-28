<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear sustrato");
require_once("../../app/controllers/dashboard/sustrato/create_controller.php");
Page::templateFooter();
?>