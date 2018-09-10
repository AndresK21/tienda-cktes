<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateAu("Acceder");
require_once("../app/controllers/tienda/account/cambioContrasena_controller.php");
Page::templateFooter();
?>