<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar orden");
require_once("../../app/controllers/dashboard/ordenes/update_controller.php");
Page::templateFooter();
?>