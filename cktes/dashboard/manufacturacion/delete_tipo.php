<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar tipo de placa");
require_once("../../app/controllers/dashboard/tipo_placa/delete_controller.php");
Page::templateFooter();
?>