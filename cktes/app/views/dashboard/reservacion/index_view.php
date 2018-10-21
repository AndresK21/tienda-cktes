<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s3"><a class="active black-text" href="#test1">Pedidos normales</a></li>
            <li class="tab col s3"><a class="black-text" href="#test2">Pedidos normales completados</a></li>
            <li class="tab col s3"><a class="black-text" href="#test3">Pedidos especiales</a></li>
            <li class="tab col s3"><a class="black-text" href="#test4">Pedidos especiales completados</a></li>
            <!--<li class="tab col s3"><a class="black-text" href="#test3">Sustratos</a></li>
            <li class="tab col s3"><a class="black-text" href="#test4">Tipos de placa</a></li>-->
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
                                <input type="text" id="buscar_label" name='busqueda' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar pedido por nombre del cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombres o apellidos'><i class='material-icons'>search</i></button>
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
                                <th>Cliente</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha estimada</th>
                                <th>Estado</th>
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
                                            <td>$row[nombre]</td>
                                            <td>$row[cantidad]</td>
                                            <td>$row[fecha_estimada]</td>
                                            <td>$row[estado]</td>
                                            <td>
                                                <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver detalles' href='update.php?id=$row[id_reservacion]'><i class='material-icons grey-text text-darken-3 prefix'>content_paste</i></a>
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
            $resultado=$reservacion->getReservacion();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$reservacion->getId_reservacion()."&pagina=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$reservacion->getId_reservacion()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$reservacion->getId_reservacion()."&pagina=$total_paginas'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>


    <!--Contenido del tab de pedidos-->
    <div id="test2" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar pedido por nombre del cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombres o apellidos'><i class='material-icons'>search</i></button>
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
                                <th>Cliente</th>
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Fecha estimada</th>
                                <th>Estado</th>
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
                                            <td>$row[nombre]</td>
                                            <td>$row[cantidad]</td>
                                            <td>$row[fecha_estimada]</td>
                                            <td>$row[estado]</td>
                                            <td>
                                                <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver detalles' href='update.php?id=$row[id_reservacion]'><i class='material-icons grey-text text-darken-3 prefix'>content_paste</i></a>
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
            $resultado2=$reservacion->getReservacionCom();

            //Contar el total de registros
            $total_registros2 = count($resultado2);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas2 = ceil($total_registros2 / $por_pagina2);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$reservacion->getId_reservacion()."&pagina2=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas2; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$reservacion->getId_reservacion()."&pagina2=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$reservacion->getId_reservacion()."&pagina2=$total_paginas2'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>


    <!--Contenido del tab de pedidos COMPLETADOS-->
    <div id="test3" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_impor' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar pedido por nombre del cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_impor' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombres o apellidos '><i class='material-icons'>search</i></button>
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
                            <th>Cliente</th>
                            <th>Estado de la importaci&oacute;n</th>
                            <th>Producto solicitado</th>
                            <th>Cantidad</th>
                            <th>Fecha estimada</th>
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
                                            <td>$row[nombres] $row[apellidos]</td>
                                            <td>$row[estado]</td>
                                            <td>$row[nombre]</td>
                                            <td>$row[cantidad]</td>
                                            <td>$row[fecha_estimada]</td>
                                            <td>
                                                <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver detalles' href='update_impor.php?id=$row[id_importacion]'><i class='material-icons grey-text text-darken-3 prefix'>content_paste</i></a>
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
            $resultado3=$importacion->getImportacion();

            //Contar el total de registros
            $total_registros3 = count($resultado3);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas3 = ceil($total_registros3 / $por_pagina3);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$importacion->getId_importacion()."&pagina3=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas3; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$importacion->getId_importacion()."&pagina3=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$importacion->getId_importacion()."&pagina3=$total_paginas3'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>


    <!--Contenido del tab de pedidos COMPLETADOS-->
    <div id="test4" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda_impor2' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar pedido por nombre del cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar_impor2' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombres o apellidos '><i class='material-icons'>search</i></button>
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
                            <th>Cliente</th>
                            <th>Estado de la importaci&oacute;n</th>
                            <th>Producto solicitado</th>
                            <th>Cantidad</th>
                            <th>Fecha estimada</th>
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
                                            <td>$row[nombres] $row[apellidos]</td>
                                            <td>$row[estado]</td>
                                            <td>$row[nombre]</td>
                                            <td>$row[cantidad]</td>
                                            <td>$row[fecha_estimada]</td>
                                            <td>
                                                <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Ver detalles' href='update_impor.php?id=$row[id_importacion]'><i class='material-icons grey-text text-darken-3 prefix'>content_paste</i></a>
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
            $resultado4=$importacion->getImportacionCom();

            //Contar el total de registros
            $total_registros4 = count($resultado4);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas4 = ceil($total_registros4 / $por_pagina4);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$importacion->getId_importacion()."&pagina4=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas4; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$importacion->getId_importacion()."&pagina4=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$importacion->getId_importacion()."&pagina4=$total_paginas4'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>
    
</div>