<?php
require_once("../app/views/portal/templates/page.class.php");
Page::templateHeader("Importacion nueva");
require_once("../app/controllers/portal/importacion_nueva/importacion_nueva_controller.php");
Page::templateFooter(); 
?>