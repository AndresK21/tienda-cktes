<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Manufacturacion");
require_once("../../app/controllers/dashboard/manufacturacion/index_controller.php");
Page::templateFooter();
?>