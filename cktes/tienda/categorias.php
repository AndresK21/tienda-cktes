<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Categorias");
require_once("../app/controllers/tienda/producto/categorias_controller.php");
Page::templateFooter();
?>