<?php
    require_once("../app/views/tienda/templates/page.class.php");
    Page::templateHeader("Detalle carrito");   
    require_once("../app/controllers/tienda/historial/historialdetalle_controller.php");
    Page::templateFooter();
?>