<?php
require_once("../../app/models/productos.class.php");
try{
    if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            $producto = new Producto;
            if($producto->setId_producto($_GET['id'])){
                if($producto->readProducto()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $producto->validateForm($_POST);
                        if($producto->setNombre($_POST['nombre'])){
                            if($producto->setPrecio($_POST['precio'])){
                                if($producto->setDescripcion($_POST['descripcion'])){
                                    if($producto->setFicha($_POST['ficha'])){
                                        if($producto->setId_estado($_POST['estado'])){
                                            if($producto->setTamano($_POST['tamano'])){
                                                if($producto->setCantidad($_POST['cantidad'])){
                                                    if($producto->setId_marca($_POST['marca'])){
                                                        if($producto->setId_proveedor($_POST['proveedor'])){
                                                            if($producto->setId_presentacion($_POST['presentacion'])){
                                                                if($producto->setId_tipo_producto($_POST['tipo'])){
                                                                    if($producto->setId_impuesto($_POST['impuesto'])){
                                                                        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                                                            if(!$producto->setImagen($_FILES['archivo'])){
                                                                                throw new Exception($producto->getImageError());
                                                                            }
                                                                        }if($producto->devValor()){
                                                                            if($producto->updateProducto()){
                                                                                Page::showMessage(1, "Producto modificado", "index.php");
                                                                            }else{
                                                                                throw new Exception("No se pudo modificar el producto");
                                                                            }
                                                                        }else{
                                                                            throw new Exception(Database::getException());
                                                                        }
                                                                    }else{
                                                                        throw new Exception("Seleccione un impuesto");
                                                                    }                                                                
                                                                }else{
                                                                    throw new Exception("Seleccione un tipo de producto");
                                                                }
                                                            }else{
                                                                throw new Exception("Seleccione una presentacion");
                                                            }
                                                        }else{
                                                            throw new Exception("Seleccione un proveedor");
                                                        }
                                                    }else{
                                                        throw new Exception("Seleccione una marca");
                                                    }
                                                }else{
                                                    throw new Exception("Ingrese una cantidad");
                                                }
                                            }else{
                                                throw new Exception("Ingrese un tamaño");
                                            }
                                        }else{
                                            throw new Exception("Estado incorrecto");
                                        }
                                    }else{
                                        throw new Exception("Ingrese una ficha tecnica");
                                    }
                                }else{
                                    throw new Exception("Descripción incorrecta");
                                }
                            }else{
                                throw new Exception("Precio incorrecto");
                            }
                        }else{
                            throw new Exception("Nombre incorrecto");
                        }
                    }
                }else{
                    Page::showMessage(2, "Producto inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Producto incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/update_view.php");
?>