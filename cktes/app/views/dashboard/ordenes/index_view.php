<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s6"><a class="active black-text" href="#test1">Nuevas ordenes</a></li>
            <li class="tab col s6"><a class="black-text" href="#test2">Compras completadas</a></li>
        </ul>
    </div>

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
                                <label for="buscar_label" class="black-text">Buscar por nombre del cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre del producto'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>

        <div class="container">

            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf z-depth-2"> <!--Tabla donde se mostraran las ventas realizadas-->
                <thead class="cktes white-text"> <!--Indices de la tablas-->
                    <tr>
                        <th>Id de la orden</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody> <!--Contenido de la tabla-->
                    <?php
                        foreach($data as $row){
                            print("
                            <tr>
                                <td>$row[id_carrito]</td>
                                <td>$row[fecha]</td>
                                <td>$row[nombres] $row[apellidos]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Ver detalle de compra' href='detalle.php?id=$row[id_carrito]'><i class='material-icons blue-grey-text text-darken-4 prefix'>assignment</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar el estado de la orden' href='update.php?id=$row[id_carrito]'><i class='material-icons blue-text prefix'>edit</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    ?>

                </tbody>
            </table>

        </div>
    </div>



    <div id="test2" class="col s12">

        <!-- Barra de busqueda -->
        <div class="container">
            <div class="row">
                <form method="post">
                    <div class="col s12">
                        <div class="row">
                            <div class="input-field col s10">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="buscar_label" name='busqueda2' autocomplete="off">
                                <label for="buscar_label" class="black-text">Buscar por nombre del cliente</label>
                            </div>
                            <div class="input-field col s2">
                                <button type='submit' name='buscar2' class='btn waves-effect colorNa tooltipped' data-tooltip='Buscar por nombre del producto'><i class='material-icons'>search</i></button>
                            </div>
                        </div>
                    </div>
                <form>
            </div>
        </div>


        <div class="container">
            <!--Parte de clasificacion de la tabla-->
            <table class="bordered highlight responsive-table espacio_inf z-depth-2"> <!--Tabla donde se mostraran las ventas realizadas-->
                <thead class="cktes white-text"> <!--Indices de la tablas-->
                    <tr>
                        <th>Id de la orden</th>
                        <th>Fecha</th>
                        <th>Cliente</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <tbody> <!--Contenido de la tabla-->
                    <?php
                        foreach($data2 as $row){
                            print("
                            <tr>
                                <td>$row[id_carrito]</td>
                                <td>$row[fecha]</td>
                                <td>$row[nombres] $row[apellidos]</td>
                                <td>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Ver detalle de compra' href='detalle.php?id=$row[id_carrito]'><i class='material-icons blue-grey-text text-darken-4 prefix'>assignment</i></a>
                                    <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='top' data-delay='50' data-tooltip='Editar el estado de la orden' href='update.php?id=$row[id_carrito]'><i class='material-icons blue-text prefix'>edit</i></a>
                                </td>
                            </tr>
                            ");
                        }
                    ?>

                </tbody>
            </table>

        </div>
    </div>
</div>