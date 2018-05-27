<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s2"><a class="active black-text" href="#test1">Productos</a></li>
            <li class="tab col s2"><a class="black-text" href="#test2">Marca</a></li>
            <li class="tab col s2"><a class="black-text" href="#test3">Presentaciones</a></li>
            <li class="tab col s3"><a class="black-text" href="#test4">Tipo de producto</a></li>
            <li class="tab col s3"><a class="black-text" href="#test5">Impuestos</a></li>
        </ul>
    </div>

    <!--Contenido del tab de productos-->
    <div id="test1" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda'>
                                <label for="buscar_label" class="black-text">Buscar producto</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar' class='btn waves-effect grey darken-3 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevos productos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo producto" href="create.php">
                <i class="large material-icons">add</i>
            </a>
        </div>


        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Presentaci&oacute;n</th>
                        <th>Existencias</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if($data){
                            foreach($data as $row){
                                print("
                                <tr>
                                    <td><img src='../../web/img/productos/$row[imagen]' class='materialboxed' width='50' height='50'></td>
                                    <td>$row[nombre]</td>
                                    <td>$row[cantidad]</td>
                                    <td>$row[precio]</td>
                                    <td>$row[presentacion]</td>
                                    <td><i class='material-icons'>".($row['id_estado']?"check":"")."</i></td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver comentarios' href='comentarios.php?id=$row[id_producto]'><i class='material-icons blue-grey-text text-darken-4 prefix'>comment</i></a>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar producto' href='update.php?id=$row[id_producto]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar producto' href='delete.php?id=$row[id_producto]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        }else{

                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
    
    
    <!--Contenido del tab de marcas-->
    <div id="test2" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_marca'>
                                <label for="buscar_label" class="black-text">Buscar marca</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_marca' class='btn waves-effect grey darken-3 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevos marcas-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva marca" href="create_marca.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th>Nombre de marca</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if($data_marca){
                            foreach($data_marca as $marca){
                                print("
                                <tr>
                                    <td>$marca[marca]</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar producto' href='update_marca.php?id=$marca[id_marca]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar producto' href='delete_marca.php?id=$marca[id_marca]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        }else{

                        }
                    ?>
                </tbody>
            </table>
        </div>

    </div>


    <!--Contenido del tab de presentacioness-->
    <div id="test3" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_presentacion'>
                                <label for="buscar_label" class="black-text">Buscar presentaci&oacute;n</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_presentacion' class='btn waves-effect grey darken-3 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevas presentaciones-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva presentación" href="create_presentacion.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th>Presentaci&oacute;n</th>
                        <th>Tipo de producto</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if($data_presentacion){
                            foreach($data_presentacion as $presentacion){
                                print("
                                <tr>
                                    <td>$presentacion[presentacion]</td>
                                    <td>$presentacion[tipo_producto]</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar producto' href='update_presentacion.php?id=$presentacion[id_presentacion]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar producto' href='delete_presentacion.php?id=$presentacion[id_presentacion]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        }else{

                        }
                    ?>
                </tbody>
            </table>
        </div>
    
    </div>


    <!--Contenido del tab de tipo de producto-->
    <div id="test4" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_tipo'>
                                <label for="buscar_label" class="black-text">Buscar tipo de producto</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_tipo' class='btn waves-effect grey darken-3 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevos tipos de productos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de producto" href="create_tipo.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th>Tipo de producto</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if($data_tipo){
                            foreach($data_tipo as $tipo){
                                print("
                                <tr>
                                    <td>$tipo[tipo_producto]</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar producto' href='update_tipo.php?id=$tipo[id_tipo_producto]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar producto' href='delete_tipo.php?id=$tipo[id_tipo_producto]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        }else{

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>


    <!--Contenido del tab de tipo de producto-->
    <div id="test5" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_impuesto'>
                                <label for="buscar_label" class="black-text">Buscar impuesto</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_impuesto' class='btn waves-effect grey darken-3 tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>
    
        <!--Boton fijo en la pantalla para agregar nuevos tipos de productos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de producto" href="create_impuesto.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf">
                <thead class="grey darken-3 white-text">
                    <tr>
                        <th>Impuesto</th>
                        <th>Valor</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        if($data_impuesto){
                            foreach($data_impuesto as $impuesto){
                                print("
                                <tr>
                                    <td>$impuesto[nombre]</td>
                                    <td>$impuesto[porcentaje] %</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar producto' href='update_impuesto.php?id=$impuesto[id_impuesto]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                        <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar producto' href='delete_impuesto.php?id=$impuesto[id_impuesto]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        }else{

                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>