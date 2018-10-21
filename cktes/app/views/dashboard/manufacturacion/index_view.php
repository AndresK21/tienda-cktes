<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s3"><a class="active black-text" href="#test1">Pedidos nuevos</a></li>
            <li class="tab col s3"><a class="black-text" href="#test2">Pedidos completados</a></li>
            <li class="tab col s3"><a class="black-text" href="#test3">Sustratos</a></li>
            <li class="tab col s3"><a class="black-text" href="#test4">Tipos de placa</a></li>
        </ul>
    </div>

    <!--Contenido del tab de pedidos-->
    <div id="test1" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_nuevo' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar pedido por nombre de cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_nuevo' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!--muestra la lista de pedidos-->
                <div class="col s12">
                        
                    <table class="bordered highlight responsive-table z-depth-2">
                        <thead class="cktes white-text">
                            <tr>
                                <th>Pedidos</th>
                                <th>Estado del pedido</th>
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
                                            <td>$row[nombres] $row[apellidos]</td>
                                            <td>$row[estado]</td>
                                            <td>
                                                <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver detalles' href='update_pedido.php?id=$row[id_pedido]'><i class='material-icons grey-text text-darken-3 prefix'>content_paste</i></a>
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
        <?php
            //seleccionar todo de la tabla usuarios
            $resultado=$pedido->getPedidon();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$pedido->getId_pedido()."&pagina=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$pedido->getId_pedido()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$pedido->getId_pedido()."&pagina=$total_paginas'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>


    <!--Contenido del tab de pedidos COMPLETADOS-->
    <div id="test2" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_com' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar pedido por nombre de cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_com' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <!--muestra la lista de pedidos-->
                <div class="col s12">
                        
                    <table class="bordered highlight responsive-table z-depth-2">
                        <thead class="cktes white-text">
                            <tr>
                                <th>Pedidos</th>
                                <th>Estado del pedido</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                                if($data2){
                                    foreach($data2 as $row){
                                        print("
                                        <tr>
                                            <td>$row[nombres] $row[apellidos]</td>
                                            <td>$row[estado]</td>
                                            <td>
                                                <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver detalles' href='update_pedido.php?id=$row[id_pedido]'><i class='material-icons grey-text text-darken-3 prefix'>content_paste</i></a>
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
        <?php
            //seleccionar todo de la tabla usuarios
            $resultado2=$pedido->getPedidoc();

            //Contar el total de registros
            $total_registros2 = count($resultado2);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas2 = ceil($total_registros2 / $por_pagina2);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$pedido->getId_pedido()."&pagina2=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas2; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$pedido->getId_pedido()."&pagina2=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$pedido->getId_pedido()."&pagina2=$total_paginas2'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>


    <!--Contenido del tab de sustratos-->
    <div id="test3" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_sustrato' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar sustrato</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_sustrato' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre del sustrato'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>

        <!--Boton fijo en la pantalla para agregar nuevos sutratos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger colorNa tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo sustrato" href="create_sustrato.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <div class="row">

                <!--muestra la lista de sustratos existentes-->
                <div class="col s12">
                        
                        <table class="bordered highlight responsive-table z-depth-2">
                            <thead class="cktes white-text">
                            <tr>
                                <th>Sustrato</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    if($data3){
                                        foreach($data3 as $row){
                                            print("
                                            <tr>
                                                <td>$row[sustrato]</td>
                                                <td>
                                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar sustrato' href='update_sustrato.php?id=$row[id_sustrato]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar sustrato' href='delete_sustrato.php?id=$row[id_sustrato]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
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
        </div>
    </div>


    <!--Contenido del tab de tipos de placa-->
    <div id="test4" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_tipo' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar tipo de placa</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_tipo' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por tipo de placa'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>

        <!--Boton fijo en la pantalla para agregar nuevos sutratos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger colorNa tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de placa" href="create_tipo.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <div class="row">

                <!--muestra la lista de usuarios existentes-->
                <div class="col s12">
                        
                        <table class="bordered highlight responsive-table z-depth-2">
                            <thead class="grey darken-3 white-text">
                            <tr>
                                <th>Tipo de placa</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>

                            <tbody>
                                <?php
                                    if($data4){
                                        foreach($data4 as $row){
                                            print("
                                            <tr>
                                                <td>$row[tipo_placa]</td>
                                                <td>
                                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar tipo de placa' href='update_tipo.php?id=$row[id_tipo_placa]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar tipo de placa' href='delete_tipo.php?id=$row[id_tipo_placa]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
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
        </div>
    </div>

</div>