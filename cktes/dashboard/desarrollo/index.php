<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Desarrollo");
require_once("../../app/controllers/dashboard/desarrollo/index_controller.php");
Page::templateFooter();
?>