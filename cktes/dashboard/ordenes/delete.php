<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Bloquear orden");
require_once("../../app/controllers/dashboard/ordenes/delete_controller.php");
Page::templateFooter();
?>