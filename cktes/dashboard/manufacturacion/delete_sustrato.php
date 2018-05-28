<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar sustrato");
require_once("../../app/controllers/dashboard/sustrato/delete_controller.php");
Page::templateFooter();
?>