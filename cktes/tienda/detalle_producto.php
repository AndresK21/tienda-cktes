<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Detalle Producto");
require_once("../app/controllers/tienda/producto/detalle_controller.php");
require_once("../app/controllers/tienda/carrito/agregar_controller.php");
Page::templateFooter();
?>