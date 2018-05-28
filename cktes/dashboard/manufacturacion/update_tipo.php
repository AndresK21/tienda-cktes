<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar tipo de placa");
require_once("../../app/controllers/dashboard/tipo_placa/update_controller.php");
Page::templateFooter();
?>