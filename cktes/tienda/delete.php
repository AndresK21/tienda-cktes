<?php
// E L I M I N A R  P R O D U C T O  C A R R I T O
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Eliminar del carrito");
require_once("../app/controllers/tienda/carrito/delete_controller.php");
Page::templateFooter();
?>