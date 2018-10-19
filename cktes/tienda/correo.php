<?php
require_once("../app/views/tienda/templates/page.class.php");
Page::templateHeader("Recuperar contraseña");
require_once("../app/controllers/tienda/account/correo_controller.php");
Page::templateFooter();
?>