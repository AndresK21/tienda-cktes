<?php
require_once("../../app/models/permisos.class.php"); //Llama el modelo del tipo de producto
try{
    if(isset($_GET['id'])){
        if($_SERVER['HTTP_REFERER']){
            $permiso = new Permiso;
            if($permiso->setId_permiso($_GET['id'])){
                if($permiso->readPermiso()){
                    if(isset($_POST['actualizar'])){
                        $_POST = $permiso->validateForm($_POST);
                        if($permiso->setPermiso($_POST['permiso'])){  //Recibe el tipo de usuario

                            $nchecks=8;
                            for($i=1;$i<=$nchecks;$i++)
                            {
                                $nombre="check$i";
                                if(!isset($_POST[$nombre])){
                                    $_POST[$nombre] = 1;
                                }
                            }            

                            if($permiso->setDashboard($_POST['check1'])){
                                if($permiso->setUsuarios($_POST['check2'])){
                                    if($permiso->setClientes($_POST['check3'])){
                                        if($permiso->setProductos($_POST['check4'])){
                                            if($permiso->setOrdenes($_POST['check5'])){
                                                if($permiso->setManufacturacion($_POST['check6'])){
                                                    if($permiso->setDesarrollo($_POST['check7'])){
                                                        if($permiso->setImportacion($_POST['check8'])){
                                                            if($permiso->updatePermiso()){ //Crea el tipo de usuario
                                                                Page::showMessage(1, "Tipo de usuario modificado", "index.php");
                                                            }else{
                                                                throw new Exception("No se pudo crear el tipo de usuario");        
                                                            }
                                                        }else{
                                                            throw new Exception("Error con el permiso de Importación de productos");
                                                        }
                                                    }else{
                                                        throw new Exception("Error con el permiso de Desarrollo de proyectos");
                                                    }
                                                }else{
                                                    throw new Exception("Error con el permiso de Manufacturación");
                                                }
                                            }else{
                                                throw new Exception("Error con el permiso de Ordenes");
                                            }
                                        }else{
                                            throw new Exception("Error con el permiso de Productos");
                                        }
                                    }else{
                                        throw new Exception("Error con el permiso de Clientes");
                                    }
                                }else{
                                    throw new Exception("Error con el permiso de Usuarios");
                                }
                            }else{
                                throw new Exception("Error con el permiso de Dashboard");
                            }
                
                        }else{
                            throw new Exception("Ingrese un nombre para el tipo de usuario");
                        }
                    }
                }else{
                    Page::showMessage(2, "Tipo de usuario inexistente", "index.php");
                }
            }else{
                Page::showMessage(2, "Tipo de usuario incorrecto", "index.php");
            }
        }else{
            Page::showMessage(2, "Tipo de usuario incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione un tipo de usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/permisos/update_view.php");
?>