<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Eliminar");
require_once("../app/controllers/tienda/carrito/delete_controller.php");
Page::templateFooter();

?>