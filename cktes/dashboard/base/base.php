<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Base de datos");
require_once("../../app/controllers/dashboard/base/index_controller.php");
Page::templateFooter();
?>