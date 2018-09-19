<?php
require_once("../app/models/cliente.class.php");
require_once("../app/controllers/tienda/account/autenticacionPublic_controller.php");
try {
    $object = new Cliente;
    if (isset($_POST['siguiente'])) {
        $_POST = $object->validateForm($_POST);
        if ($object->readUsuario2($_SESSION['correo_electronico'])) {
            if ($object->getAut()) {
                $aut = $object->getAut();
                if ($aut == $_POST['cod']) {
                    Page::showMessage(1, "Autenticación correcta", "categorias.php");
                } else {
                    throw new Exception("Código incorrecto, vuelva a intentarlo");
                }
            } else {
                throw new Exception("el error");
            }
        } else {
            
            Page::showMessage(3, "Correo electronico incorrecto", "logout.php");
        }
    }
    
    if (isset($_POST['volver'])) {
        if ($object->readUsuario2($_SESSION['correo_electronico'])) {
            $_SESSION['id_cliente2']        = $object->getId();
            $_SESSION['correo_electronico'] = $object->getCorreo();
            $_SESSION['nombres2']           = $object->getNombres();
            $_SESSION['apellidos2']         = $object->getApellidos();
            $_SESSION['imagen']             = $object->getImagen();
            $correo                         = new CorreoPublic;
            
        } else {
            
            Page::showMessage(3, "Correo electronico incorrecto", "logout.php");
        }
    }
    
}
catch (Exception $error) {
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../app/views/tienda/login/autenticacion_public.php");
?>