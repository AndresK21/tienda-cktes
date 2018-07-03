<?php
require_once("../app/views/portal/templates/page.class.php");
Page::templateHeader("Inicio");
require_once("../app/controllers/portal/index/index_controller.php");
Page::templateFooter();  
?>