<!--Tabs para separar cada categoria en la que se puede ingresar informacion-->
<div class="row">
    <div class="col s12">
        <ul class="tabs black-text">
            <li class="tab col s6"><a class="active black-text" href="#test1">Pedidos normales</a></li>
            <li class="tab col s6"><a class="black-text" href="#test2">Pedidos especiales</a></li>
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
        </div>
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
                                    if($data2){
                                        foreach($data2 as $row){
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
        </div>
    </div>

</div>