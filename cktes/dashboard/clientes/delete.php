<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Bloquear cliente");
require_once("../../app/controllers/dashboard/clientes/delete_controller.php");
Page::templateFooter();
?>