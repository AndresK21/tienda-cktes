<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar presentacion");
require_once("../../app/controllers/dashboard/presentaciones/update_controller.php");
Page::templateFooter();
?>