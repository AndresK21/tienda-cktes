<?php
require_once("../../app/models/permisos.class.php"); //Llama el modelo del tipo de usuario
try{
    $permiso = new Permiso;
    if(isset($_POST['crear'])){
        $_POST = $permiso->validateForm($_POST);
        if($permiso->setPermiso($_POST['permiso'])){  //Recibe el tipo de usuaario

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
                                            if($permiso->createPermiso()){ //Crea el tipo de usuario
                                                Page::showMessage(1, "Tipo de usuario creado", "index.php");
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
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/permisos/create_view.php");
?>