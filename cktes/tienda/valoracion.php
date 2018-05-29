<?php
    require_once("../app/views/tienda/templates/page.class.php");
    Page::templateHeader("Valoracion");   
    require_once("../app/controllers/tienda/valoracion/valoracion_controller.php");
    Page::templateFooter();
?>