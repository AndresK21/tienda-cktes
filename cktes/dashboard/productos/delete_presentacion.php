<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar presentacion");
require_once("../../app/controllers/dashboard/presentaciones/delete_controller.php");
Page::templateFooter();
?>