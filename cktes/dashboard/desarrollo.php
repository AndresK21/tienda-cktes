<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Archivo maestro que contiene las referencias-->
        <?php
            include('../app/views/referencias_dash.php');
        ?>
        <title>Dashboard-Desarrollo</title>
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
                        <li class="tab col s5"><a class="active black-text" href="#test1">Ideas nuevas</a></li>
                        <li class="tab col s6"><a class="black-text" href="#test2">Tipos de desarrollo</a></li>
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
                                    <label for="autocomplete-input">Buscar por cliente</label>
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
                                            <th>Responder</th>
                                            <th></th>
                                        </tr>
                                        </thead>

                                        <tbody>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="#modal5">Nombre de cliente</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal3"><i class="material-icons blue-text text-darken3">mail</i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Contenido del tab de tipos de desarrollo-->
                <div id="test2" class="col s12">
                
                    <!-- Barra de busqueda -->
                    <div class="container">
                        <div class="row">
                            <div class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                    <i class="material-icons prefix">search</i>
                                    <input type="text" id="autocomplete-input" class="autocomplete">
                                    <label for="autocomplete-input">Buscar tipo de desarrollo</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Boton fijo en la pantalla para agregar nuevos sutratos-->
                    <div class="fixed-action-btn">
                        <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de placa" href="#modal1">
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
                                            <td class="modal-trigger espacio" href="">PCB-arte</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Industria/agro</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Comercio/servicios</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Gobierno</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Emprendedores</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Independientes</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        <tr>
                                            <td class="modal-trigger espacio" href="">Estudiantes</td>
                                            <td><a class="waves-effect waves-light modal-trigger" href="#modal2"><i class="material-icons blue-text text-darken3">edit</i></a></td>
                                        </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


            <!-- Modal de tipo de desarrollo -->
            <div id="modal1" class="modal">
                <div class="modal-content">
                    <h4>Agregar nuevo tipo de desarrollo</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para ingresar nuevo tipo de placa-->
                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="tipo_desarrollo" type="text" class="validate">
                                                <label for="tipo_desarrollo" class="black-text">Tipo de desarrollo</label>
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
                    <h4>Informaci&oacute;n de la idea</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario ineditable donde se muestra la informacion de la idea-->
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
                                                <label for="correo" class="black-text">Correo electr&oacute;nico</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <textarea disabled value="I am not editable" id="disabled" class="materialize-textarea"></textarea>
                                                <label for="mensaje" class="black-text">Mensaje</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input disabled value="I am not editable" id="disabled" type="number" class="validate">
                                                <label for="tipo_desarrollo" class="black-text">Tipo de desarrollo</label>
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


            <!-- Modal de editar tipo de placa -->
            <div id="modal2" class="modal">
                <div class="modal-content">
                    <h4>Editar tipo de desarrollo</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para editar tipo de placa-->
                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="tipo_desarrollo" placeholder="PCB-arte" type="text" class="validate">
                                                <label for="tipo_desarrollo" class="black-text">Tipo de desarrollo</label>
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


            <!-- Modal de enviar mensaje -->
            <div id="modal3" class="modal">
                <div class="modal-content">
                    <h4>Enviar mensaje</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para enviar mensaje-->
                                <div class="row">
                                    <form class="">
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="correo" type="text" class="validate">
                                                <label for="correo" class="black-text">Correo electr&oacute;nico</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <input id="asunto" type="text" class="validate">
                                                <label for="asunto" class="black-text">Asunto</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field ">
                                                <textarea id="mensaje" type="text" class="materialize-textarea"></textarea>
                                                <label for="mensaje" class="black-text">Mensaje</label>
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
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Enviar</a>
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