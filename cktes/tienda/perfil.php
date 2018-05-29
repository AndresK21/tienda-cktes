<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Perfil");
require_once("../app/controllers/tienda/account/perfil_controller.php");
Page::templateFooter();
?>