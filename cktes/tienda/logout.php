<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Logout");
require_once("../app/controllers/tienda/account/logout_controller.php");
Page::templateFooter();

?>s