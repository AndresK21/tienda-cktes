<?php
    require_once("../app/views/tienda/templates/page.class.php");
    Page::templateHeader("Carrito");   
    require_once("../app/controllers/tienda/carrito/carrito_controller.php");
    Page::templateFooter();
?>