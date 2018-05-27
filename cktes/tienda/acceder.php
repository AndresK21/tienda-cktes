<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Acceder");
require_once("../app/controllers/tienda/account/login_controller.php");
Page::templateFooter();
?>