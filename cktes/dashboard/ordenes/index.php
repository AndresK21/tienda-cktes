<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Ordenes");
require_once("../../app/controllers/dashboard/ordenes/index_controller.php");
Page::templateFooter();
?>