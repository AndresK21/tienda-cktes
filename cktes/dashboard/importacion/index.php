<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Importaciones");
require_once("../../app/controllers/dashboard/importacion/index_controller.php");
Page::templateFooter();
?>