<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear tipo de placa");
require_once("../../app/controllers/dashboard/tipo_placa/create_controller.php");
Page::templateFooter();
?>