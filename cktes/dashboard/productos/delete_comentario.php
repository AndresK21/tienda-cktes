<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar comentario");
require_once("../../app/controllers/dashboard/producto/delete_comen_controller.php");
Page::templateFooter();
?>