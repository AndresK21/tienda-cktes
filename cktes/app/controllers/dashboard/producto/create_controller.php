<?php
require_once("../../app/models/productos.class.php");
try{
    $producto = new Producto;
    if(isset($_POST['crear'])){
        $_POST = $producto->validateForm($_POST);
        if($producto->setNombre($_POST['nombre'])){
            if($producto->setPrecio($_POST['precio'])){
                if($producto->setDescripcion($_POST['descripcion'])){
                    if(is_uploaded_file($_FILES['ficha']['tmp_name'])){
                        if($producto->setFicha($_FILES['ficha'])){
                            if($producto->setId_estado($_POST['estado'])){
                                if($producto->setTamano($_POST['tamano'])){
                                    if($producto->setCantidad($_POST['cantidad'])){
                                        if($producto->setId_marca($_POST['marca'])){
                                            if($producto->setId_proveedor($_POST['proveedor'])){
                                                if($producto->setId_presentacion($_POST['presentacion'])){
                                                    if($producto->setId_tipo_producto($_POST['tipo'])){
                                                        if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                                                            if($producto->setImagen($_FILES['archivo'])){
                                                                if($producto->setId_impuesto($_POST['impuesto'])){
                                                                    if($producto->setId_descuento($_POST['descuento'])){
                                                                        if($producto->devValor()){ 
                                                                            if($producto->devValor2()){
                                                                                if($producto->createProducto()){
                                                                                    Page::showMessage(1, "Producto creado", "index.php");
                                                                                }else{
                                                                                    throw new Exception(Database::getException());
                                                                                }
                                                                            }else{
                                                                                throw new Exception(Database::getException());
                                                                            }
                                                                        }else{
                                                                            throw new Exception(Database::getException());
                                                                        }
                                                                    }else{
                                                                        throw new Exception("Seleccione un descuento");
                                                                    } 
                                                                }else{
                                                                    throw new Exception("Seleccione un impuesto");
                                                                }  
                                                            }else{
                                                                throw new Exception($producto->getImageError());
                                                            }
                                                        }else{
                                                            throw new Exception("Seleccione una imagen");
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
                            throw new Exception($producto->getArchiveError());
                        }
                    }else{
                        throw new Exception("Seleccione un archivo");
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
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/producto/create_view.php");
?>