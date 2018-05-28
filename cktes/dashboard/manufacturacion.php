<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Archivo maestro que contiene las referencias-->
        <?php
            include('../app/views/referencias_dash.php');
        ?>
        <title>Dashboard-Manufacturaci&oacute;n</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../app/views/nav_dash.php');
            ?>
        </header>

        <main>

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
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Buscar por estado</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <!--muestra la lista de pedidos-->
                            <div class="col s12">
                                    
                                    <table class="bordered highlight responsive-table z-depth-2">
                                        <thead class="grey darken-3 white-text">
                                        <tr>
                                            <th>Pedidos</th>
                                            <th>Estado del pedido</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Nuevo pedido</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Nuevo pedido</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Nuevo pedido</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Nuevo pedido</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Nuevo pedido</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>En desarrollo</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>En desarrollo</p></td>
                                        </tr>
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
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Buscar por nombre de cliente</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">

                            <!--muestra la lista de pedidos-->
                            <div class="col s12">
                                    
                                    <table class="bordered highlight responsive-table z-depth-2">
                                        <thead class="grey darken-3 white-text">
                                        <tr>
                                            <th>Pedidos</th>
                                            <th>Estado del pedido</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><p>Completado</p></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--Contenido del tab de sustratos-->
                <div id="test3" class="col s12">
                
                    <!-- Barra de busqueda -->
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Buscar sustrato</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Boton fijo en la pantalla para agregar nuevos sutratos-->
                    <div class="fixed-action-btn">
                        <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo sustrato" href="#modal1">
                            <i class="large material-icons">add</i>
                        </a>
                    </div>

                    <div class="container">
                        <div class="row">

                            <!--muestra la lista de sustratos existentes-->
                            <div class="col s12">
                                    
                                    <table class="bordered highlight responsive-table z-depth-2">
                                        <thead class="grey darken-3 white-text">
                                        <tr>
                                            <th>Sustrato</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Baquelita</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Fibra de vidrio</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
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
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Buscar tipo de placa</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Boton fijo en la pantalla para agregar nuevos sutratos-->
                    <div class="fixed-action-btn">
                        <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de placa" href="#modal2">
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
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">PCB básico 1 layer</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal4"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">PCB básico 2 layer</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal4"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">PCB intermedio 1 Layer</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal4"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">PCB intermedio 2 Layer</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal4"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">PCB Pro Layer 1</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal4"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">PCB Pro Layer 2</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal4"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <!-- Modal de sustrato nuevo -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Agregar nuevo sustrato</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para ingresar nuevo sustrato-->
                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="sustrato" type="text" class="validate">
                                                <label for="sustrato" class="black-text">Nombre de sustrato</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Descartar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Guardar</a>
                </div>
            </div>


            <!-- Modal de tipo de placa nuevo -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Agregar nuevo tipo de placa</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para ingresar nuevo tipo de placa-->
                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="placa" type="text" class="validate">
                                                <label for="placa" class="black-text">Tipo de placa</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Descartar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Guardar</a>
                </div>
            </div>
            

            <!-- Modal informacion de pedidos -->
            <div id="modal5" class="modal modal-fixed-footer">
                <div class="modal-content">
                    <h4>Informaci&oacute;n del pedido</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario ineditable donde se muestra la informacion del pedido-->
                                <div class="">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="cliente" class="black-text">Cliente</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="tipo_placa" class="black-text">Tipo de placa</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="sustrato" class="black-text">Sustrato</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="tamano" class="black-text">Tama&ntilde;o</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="capas" class="black-text">N&uacute;mero de capas</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="capas" class="black-text">Cantidad</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select>
                                                    <option value="" disabled selected>Elija un estado</option>
                                                    <option value="1">Nuevo pedido</option>
                                                    <option value="2">Operando</option>
                                                    <option value="3">En desarrollo</option>
                                                    <option value="3">Completado</option>
                                                </select>
                                                <label class="black-text">Estado</label>
                                            </div>
                                        </div>
                                        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">cloud_download</i>Descargar archivo</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Aceptar</a>
                </div>
            </div>


            <!-- Modal de editar sustrato -->
            <div id="modal3" class="modal">
                    <div class="modal-content">
                        <h4>Editar sustrato</h4>
                        <div class="card horizontal">
                            <div class="card-stacked">
                                <div class="card-content">
    
                                    <!--Formulario para editar sustrato-->
                                    <div class="row">
                                        <form class="">
                                            <div class="row">
                                                <div class="input-field ">
                                                    <input id="sustrato" placeholder="Fibra de vidrio" type="text" class="validate">
                                                    <label for="sustrato" class="black-text">Nombre de sustrato</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Descartar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Guardar</a>
                    </div>
                </div>


            <!-- Modal de editar tipo de placa -->
            <div id="modal4" class="modal">
                    <div class="modal-content">
                        <h4>Editar tipo de placa</h4>
                        <div class="card horizontal">
                            <div class="card-stacked">
                                <div class="card-content">
    
                                    <!--Formulario para editar tipo de placa-->
                                    <div class="row">
                                        <form class="">
                                            <div class="row">
                                                <div class="input-field ">
                                                    <input id="placa" placeholder="PCB básico 1 layer" type="text" class="validate">
                                                    <label for="placa" class="black-text">Tipo de placa</label>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Descartar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Guardar</a>
                    </div>
                </div>

        <!--Archivo maestro que contiene el footer-->
        <?php
            include('../app/views/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../web/js/materialize.min.js"></script>
    </body>
</html>