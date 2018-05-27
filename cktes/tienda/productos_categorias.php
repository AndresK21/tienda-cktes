<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Productos");
require_once("../app/controllers/tienda/producto/productos_controller.php");
Page::templateFooter();
?>