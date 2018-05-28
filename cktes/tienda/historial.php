<?php
    require_once("../app/views/tienda/templates/page.class.php");
    Page::templateHeader("Historial");
    require_once("../app/controllers/tienda/historial/historial_controller.php");
    Page::templateFooter();
?>