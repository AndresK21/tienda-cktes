<?php
require_once("../app/helpers/validator.class.php"); // Llama las validaciones
require_once("../app/models/valoraciones.class.php");// Llama el modelo de las valoraciones
try{
$valoraciones = new Valoracion;
    if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            if($valoraciones->setId_cliente($_SESSION['id_cliente'])){ // Obtenemos el id del cliente
                if(isset($_POST['valorar'])){ // Declaramos la varible a 
                    $_POST = $valoraciones -> validateForm($_POST); // Campo de validacion
                    if($valoraciones->setId_producto($_GET['id'])){ // Obtenemos el id del producto a valorar
                        if(isset($_POST['estrellas'])){
                            $estrella = true;
                            $valoraciones->setEstrellas($_POST['estrellas']); // Llenamos las estrellas con el numero correspondiente
                        }else{
                            $estrella = false;
                            $valoraciones->setEstrellas(NULL);
                        }
                        
                        if($valoraciones->setComentario($_POST['comentario'])){ // Llenamos el comentario
                            $comentario = true;
                        }else{
                            $comentario = false;
                        }
                        if($estrella || $comentario){
                            if($valoraciones->createValoracion()){ // metodo crear valoracion
                                Page::showMessage(1, "Valoracion creada", "../tienda/historial.php");
                            }else{
                                Page::showMessage(3, "Valoracion no creada",null);
                            }    
                        }else{
                            Page::showMessage(3, "Debe realizar alguna valoracion",null);
                        }
                    }else{
                        Page::showMessage(3, "Error en el Producto Seleccionado",null);
                    }
                }
            }else{
                throw new Exception("Error en el Cliente");
            }
        }else{
            Page::showMessage(2, "Valoración Alterada", "../tienda/historial.php");
        }
    }else{
        Page::showMessage(3, "Seleccione una Valoración", "../tienda/historial.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), "historial.php");
}
require_once("../app/views/tienda/valoracion/valoracion_view.php");
?>