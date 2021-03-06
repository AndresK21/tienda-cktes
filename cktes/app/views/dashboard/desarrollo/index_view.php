<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s4"><a class="active black-text" href="#test1">Ideas nuevas</a></li>
            <li class="tab col s4"><a class="active black-text" href="#test2">Ideas procesadas</a></li>
            <li class="tab col s4"><a class="black-text" href="#test3">Tipos de desarrollo</a></li>
        </ul>
    </div>

    <!--Contenido del tab de pedidos-->
    <div id="test1" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form class="col s12" method="post" enctype='multipart/form-data'>
                    <!--muestra la lista de usuarios existentes-->
                    <div class="col s10">
                        <div class="input-field">
                            <i class="material-icons grey-text text-darken-3 prefix">search</i>
                            <input type="text" id="input" name='busqueda' autocomplete="off">
                            <label for="input" class="black-text">Buscar por cliente</label>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
                    </div>
                </form>
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
                            <th>Ver/Responder</th>
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
                                        <td>
                                            <a href='view.php?id=$row[id_desarrollo]' class='grey-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Ver mensaje'><i class='material-icons'>visibility</i></a>
                                            <a href='answer.php?id=$row[id_desarrollo]' class='blue-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Responder mensaje'><i class='material-icons'>mail</i></a>
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
            $resultado=$desarrollo->getDesarrolloss();

            //Contar el total de registros
            $total_registros = count($resultado);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas = ceil($total_registros / $por_pagina);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$desarrollo->getId_desarrollo()."&pagina=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$desarrollo->getId_desarrollo()."&pagina=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$desarrollo->getId_desarrollo()."&pagina=$total_paginas'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>

    <!--Contenido del tab de pedidos-->
    <div id="test2" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form class="col s12" method="post" enctype='multipart/form-data'>
                    <!--muestra la lista de usuarios existentes-->
                    <div class="col s10">
                        <div class="input-field">
                            <i class="material-icons grey-text text-darken-3 prefix">search</i>
                            <input type="text" id="input" name='busqueda2' autocomplete="off">
                            <label for="input" class="black-text">Buscar por cliente</label>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar2' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
                    </div>
                </form>
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
                            <th>Ver/Responder</th>
                            <th></th>
                        </tr>
                        </thead>

                        <tbody>
                            <?php
                            if($data2){
                                foreach($data3 as $row3){
                                    print("
                                    <tr>
                                        <td>$row3[nombres] $row3[apellidos]</td>
                                        <td>
                                            <a href='view.php?id=$row3[id_desarrollo]' class='grey-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Ver mensaje'><i class='material-icons'>visibility</i></a>
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
            $resultado2=$desarrollo->getDesarrollosCom();

            //Contar el total de registros
            $total_registros2 = count($resultado2);

            //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
            $total_paginas2 = ceil($total_registros2 / $por_pagina2);  

            //link a primera pagina
            print("<ul class='pagination  center'><a href='index.php?id=".$desarrollo->getId_desarrollo()."&pagina2=1'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Primer pagina'>first_page</i></a></li>");
            for ($i=1; $i<=$total_paginas2; $i++) {
            print("<li class='waves-effect white-text ligactive'><a href='index.php?id=".$desarrollo->getId_desarrollo()."&pagina2=".$i."'>".$i."</a></li>");
            };
            // link a la ultima pagina
            print("<a href='index.php?id=".$desarrollo->getId_desarrollo()."&pagina2=$total_paginas2'>".''."<i class='material-icons tooltipped' data-position='top' data-delay='50' data-tooltip='Ultima pagina'>last_page</i></a></li>");
        ?>
    </div>

    <!--Contenido del tab de tipos de desarrollo-->
    <div id="test3" class="col s12">
    
        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form class="col s12" method="post" enctype='multipart/form-data'>
                    <!--muestra la lista de usuarios existentes-->
                    <div class="col s10">
                        <div class="input-field">
                            <i class="material-icons grey-text text-darken-3 prefix">search</i>
                            <input type="text" id="input" name='busqueda_tipo' autocomplete="off">
                            <label for="input" class="black-text">Buscar tipo de desarrollo</label>
                        </div>
                    </div>
                    <div class="input-field col s2">
                        <button type='submit' name='buscar_tipo' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por tipo de desarrollo'><i class='material-icons'>search</i></button>
                    </div>
                </form>
            </div>
        </div>

        <!--Boton fijo en la pantalla para agregar nuevos sutratos-->
        <div class="fixed-action-btn">
            <a class="btn-floating btn-large modal-trigger colorNa tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de desarrollo" href="create.php">
                <i class="large material-icons">add</i>
            </a>
        </div>

        <div class="container">
            <div class="row">

                <!--muestra la lista de usuarios existentes-->
                <div class="col s12">
                        
                        <table class="bordered highlight responsive-table z-depth-2">
                            <thead class="cktes white-text">
                            <tr>
                                <th>Tipo de desarrollo</th>
                                <th>Descripci&oacute;n</th>
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
                                                <td>$row[tipo_desarrollo]</td>
                                                <td>$row[descripcion]</td>
                                                <td>
                                                    <a href='update.php?id=$row[id_tipo_desarrollo]' class='blue-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Editar tipo de desarrollo'><i class='material-icons'>edit</i></a>
                                                    <a href='delete.php?id=$row[id_tipo_desarrollo]' class='red-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar tipo de desarrollo'><i class='material-icons'>delete</i></a>
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