<?php
require_once("../app/views/portal/templates/page.class.php");
Page::templateHeader("Editar reservacion");
require_once("../app/controllers/portal/reservacion/modificar_controller.php");
Page::templateFooter();
?>