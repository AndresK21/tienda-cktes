<?php
// A C T U A L I Z A R  C A N T I D A D  P R O D U C T O
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Actualizar");
require_once("../app/controllers/tienda/carrito/update_controller.php");
Page::templateFooter();
?>