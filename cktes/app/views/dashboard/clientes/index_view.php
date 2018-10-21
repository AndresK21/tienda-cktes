<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s4"><a class="black-text" href="#text1">Clientes activos</a></li>
            <li class="tab col s4"><a class="black-text" href="#text2">Clientes bloqueados</a></li>
            <li class="tab col s4"><a class="black-text" href="#text3">Tipo de clientes</a></li>
        </ul>
    </div>


    <div id="text1" class="col s12">
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form class="col s12" method='post'>
                    <div class="col s10">
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input type="text" id="autocomplete-input" name='busqueda_cliente' autocomplete="off" class="autocomplete">
                            <label for="autocomplete-input" class="black-text">Buscar cliente por nombre o apellido</label>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar_cliente' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
                    </div>
                <form>
            </div>
        </div>


        <div class="container">
            <div class="row">
                <!--Parte de clasificacion de la tabla-->
                <table class="bordered highlight responsive-table z-depth-2">
                    <thead class="cktes white-text">
                        <tr>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Correo electr&oacute;nico</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    <!--Producto de ejemplo 1-->
                        <?php
                            foreach($data as $row){
                                print("
                                <tr>
                                    <td>$row[apellidos]</td>
                                    <td>$row[nombres]</td>
                                    <td>$row[correo_electronico]</td>
                                    <td>
                                        <a class='waves-effect waves-light tooltipped' data-position='right' data-delay='50' data-tooltip='Visualizar ventas' href='compras.php?id=$row[id_cliente]'><i class='material-icons blue-text text-darken-3 prefix'>shopping_basket</i></a>
                                        <a class='waves-effect waves-light tooltipped' data-position='right' data-delay='50' data-tooltip='Bloquear cliente' href='delete.php?id=$row[id_cliente]'><i class='material-icons red-text text-darken-3 prefix'>lock</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            <?php
                /*print("
                <div class='right-align'>
                    <a href='../../app/view/dashboard/clientes/reporte.php?id=$_SESSION[nombre_completo]' target='_blank' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons'>content_paste</i>    Generar reporte</a>
                </div>
                ");*/
            ?>
        </div>
        <?php
            //seleccionar todo de la tabla usuarios
            $resultado=$cliente->getClientes();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$cliente->getId()."&pagina=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$cliente->getId()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$cliente->getId()."&pagina=$total_paginas'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>

    <div id="text2" class="col s12">
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form class="col s12" method='post'>
                    <div class="col s10">
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input type="text" id="buscar_label" name='busqueda_cliente2' autocomplete="off" class="autocomplete">
                            <label for="buscar_label" class="black-text">Buscar cliente por nombre o apellido</label>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar_cliente2' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
                    </div>
                <form>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <!--Parte de clasificacion de la tabla-->
                <table class="bordered highlight responsive-table z-depth-2">
                    <thead class="cktes white-text">
                        <tr>
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Correo electr&oacute;nico</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    <!--Producto de ejemplo 1-->
                        <?php
                            foreach($data3 as $row){
                                print("
                                <tr>
                                    <td>$row[apellidos]</td>
                                    <td>$row[nombres]</td>
                                    <td>$row[correo_electronico]</td>
                                    <td>
                                        <a class='waves-effect waves-light tooltipped' data-position='right' data-delay='50' data-tooltip='Visualizar ventas' href='compras.php?id=$row[id_cliente]'><i class='material-icons blue-text text-darken-3 prefix'>shopping_basket</i></a>
                                        <a class='waves-effect waves-light tooltipped' data-position='right' data-delay='50' data-tooltip='Desbloquear cliente' href='delete2.php?id=$row[id_cliente]'><i class='material-icons red-text text-darken-3 prefix'>lock_open</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            <?php
                /*print("
                <div class='right-align'>
                    <a href='../../app/view/dashboard/clientes/reporte.php?id=$_SESSION[nombre_completo]' target='_blank' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons'>content_paste</i>    Generar reporte</a>
                </div>
                ");*/
            ?>
        </div>
        <?php
            //seleccionar todo de la tabla usuarios
            $resultado2=$cliente->getClientes222();

            //Contar el total de registros
            $total_registros2 = count($resultado2);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas2 = ceil($total_registros2 / $por_pagina2);  

            //link a primera pagina
            print("<ul class='pagination center'><a href='index.php?id=".$cliente->getId()."&pagina2=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$cliente->getId()."&pagina2=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$cliente->getId()."&pagina2=$total_paginas2'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>


    <div id="text3" class="col s12">
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form class="col s12" method='post'>
                    <div class="col s10">
                        <div class="input-field">
                            <i class="material-icons prefix">search</i>
                            <input type="text" id="buscar_label" name='busqueda_tipo' autocomplete="off" class="autocomplete">
                            <label for="buscar_label" class="black-text">Buscar tipo de cliente</label>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar_tipo' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por tipo de cliente'><i class='material-icons'>search</i></button>
                    </div>
                <form>
            </div>
        </div>

        <!--Boton fijo en la pantalla para agregar nuevos productos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger colorNa tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de cliente" href="create_tipo.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <div class="row">
                <!--Parte de clasificacion de la tabla-->
                <table class="bordered highlight responsive-table z-depth-2">
                    <thead class="cktes white-text">
                        <tr>
                            <th>Tipo de cliente</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                    <!--Producto de ejemplo 1-->
                        <?php
                            foreach($data2 as $row2){
                                print("
                                <tr>
                                    <td>$row2[tipo_cliente]</td>
                                    <td>
                                        <a class='waves-effect waves-light modal-trigger tooltipped' data-position='right' data-delay='50' data-tooltip='Editar tipo de cliente' href='update_tipo.php?id=$row2[id_tipo_cliente]'><i class='material-icons blue-text text-darken-3 prefix'>edit</i></a>
                                        <a class='waves-effect waves-light modal-trigger tooltipped' data-position='right' data-delay='50' data-tooltip='Eliminar tipo de cliente' href='delete_tipo.php?id=$row2[id_tipo_cliente]'><i class='material-icons red-text text-darken-3 prefix'>delete</i></a>
                                    </td>
                                </tr>
                                ");
                            }
                        ?>

                    </tbody>
                </table>
            </div>
            <?php
                /*print("
                <div class='right-align'>
                    <a href='../../app/view/dashboard/clientes/reporte.php?id=$_SESSION[nombre_completo]' target='_blank' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons'>content_paste</i>    Generar reporte</a>
                </div>
                ");*/
            ?>
        </div>
    </div>
</div>