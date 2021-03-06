<?php
require_once("../../app/models/cliente.class.php");
try{
    $cliente = new Cliente;
	if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            if($cliente->setId($_GET['id'])){
                if($cliente->readUsuario()){
                    if(isset($_POST['eliminar'])){
                        if($cliente->bloquearCliente()){
                            Page::showMessage(1, "Cliente bloqueado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }
                }else{
                    throw new Exception("Cliente inexistente");
                }
            }else{
                throw new Exception("Cliente incorrecto");
            }
        }else{
            Page::showMessage(2, "Cliente incorrecto", "index.php");
        }
	}else{
		Page::showMessage(3, "Seleccione Cliente", "index.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/clientes/delete_view.php");
?>