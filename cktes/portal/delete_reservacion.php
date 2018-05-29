<?php
require_once("../app/views/portal/templates/page.class.php");
Page::templateHeader("Eliminar reservación");
require_once("../app/controllers/portal/reservacion/delete_controller.php");
Page::templateFooter();
?>