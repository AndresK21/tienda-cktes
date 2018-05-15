<!DOCTYPE html>
<html lang="es">
    <head>
        <!--Archivo maestro que contiene las referencias-->
        <?php
            include('../app/views/referencias_dash.php');
        ?>
        <title>Dashboard-Productos</title>
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
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar producto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevos productos-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo producto" href="#modalProduc">
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
                        <!--Producto de ejemplo 1-->
                            <tr>
                                <td><img class="imagen circle" src="../web//img/productos/producto1.jpg"></td>
                                <td>Luces led</td>
                                <td>25</td>
                                <td>$00.30</td>
                                <td>50 unidades</td>
                                <td>
                                    <p>
                                        <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                                        <label class="white-text" for="test7">.</label>
                                    </p>
                                </td>
                                <td><i class="material-icons prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Visible/Invisible">visibility</i>
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar producto" href="#modal1"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td><img class="imagen circle" src="../web/img/productos/producto2.jpg"></td>
                                <td>Circuitos integrados</td>
                                <td>50</td>
                                <td>$00.25</td>
                                <td>100 unidades</td>
                                <td></td>
                                <td><i class="material-icons prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Visible/Invisible">visibility</i>
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar producto" href="#modal2"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->                             
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td><img class="imagen circle" src="../web/img/productos/producto3.jpg"></td>
                                <td>Resistencias</td>
                                <td>125</td>
                                <td>$00.20</td>
                                <td>10 unidades</td>
                                <td>
                                    <p>
                                        <input type="checkbox" id="test7" checked="checked" disabled="disabled" />
                                        <label class="white-text" for="test7">.</label>
                                    </p>
                                </td>
                                <td><i class="material-icons prefix tooltipped" data-position="right" data-delay="50" data-tooltip="Visible/Invisible">visibility</i>
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar producto" href="#modal3"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>

            </div>
            
            
            <!--Contenido del tab de marcas-->
            <div id="test2" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar marca</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevos marcas-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva marca" href="#modal_marca">
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
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Philips</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar marca" href="#modal_marca_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar marca" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Raspberry</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar marca" href="#modal_marca_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar marca" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td>Kintel.</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar marca" href="#modal_marca_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar marca" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>


            <!--Contenido del tab de presentacioness-->
            <div id="test3" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar presentaci&oacute;n</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevas presentaciones-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nueva presentación" href="#modal_presen">
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
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>100 unidades</td>
                                <td>Producto</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar presentación" href="#modal_presen_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar presentación" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>50 unidades</td>
                                <td>Producto</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar presentación" href="#modal_presen_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar presentación" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                            <!--Producto de ejemplo 3-->
                            <tr>
                                <td>10 unidades</td>
                                <td>Producto</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar presentación" href="#modal_presen_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar presentación" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div>


            <!--Contenido del tab de tipo de producto-->
            <div id="test4" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar tipo de producto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevos tipos de productos-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de producto" href="#modal_tipo_produc">
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
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Producto</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar tipo de producto" href="#modal_tipo_produc_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Importaci&oacute;n</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar tipo de producto" href="#modal_tipo_produc_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


            <!--Contenido del tab de tipo de producto-->
            <div id="test5" class="col s12">
            
                <!-- Barra de busqueda -->
                <div class="container">
                    <div class="row">
                        <div class="col s12">
                            <div class="row">
                                <div class="input-field col s12">
                                <i class="material-icons prefix">search</i>
                                <input type="text" id="autocomplete-input" class="autocomplete">
                                <label for="autocomplete-input">Buscar impuesto</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!--Boton fijo en la pantalla para agregar nuevos tipos de productos-->
                <div class="fixed-action-btn">
                    <a class="btn-floating btn-large modal-trigger grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo tipo de producto" href="#modal_impuesto">
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
                            <!--Producto de ejemplo 1-->
                            <tr>
                                <td>Iva</td>
                                <td>13%</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar impuesto" href="#modal_impuesto_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                                </td>
                            </tr>
                            <!--Producto de ejemplo 2-->
                            <tr>
                                <td>Isa</td>
                                <td>7%</td>
                                <td><a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Editar impuesto" href="#modal_impuesto_edit"><i class="material-icons blue-text text-darken-3 prefix">edit</i></a>  <!-- Modal Trigger -->
                                    <a class="waves-effect waves-light modal-trigger espacio tooltipped" data-position="right" data-delay="50" data-tooltip="Eliminar tipo de producto" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                                
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Modal de agregar nuevo -->
        <div id="modalProduc" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Agregar producto</h4>
                <div class="card horizontal">
                    <!--Lugar donde se insertara la imagen del producto-->
                    <div class="card-image">
                        <img src="">
                        <div class="white-text">.</div>
                        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar los productos-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Luces led" id="descripcion" type="text" class="validate">
                                            <label for="nombre" class="black-text">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea placeholder="descripcion" id="descripcion" type="number" class="materialize-textarea"></textarea>
                                            <label for="descripcion" class="black-text">Descripci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="25" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="black-text">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="black-text">Precio</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="## mm x ## mm" id="tamano" type="text" class="validate">
                                            <label for="tamano" class="black-text">Tama&ntilde;o</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una marca</option>
                                                <option value="1">Marca 1</option>
                                                <option value="2">Marca 2</option>
                                                <option value="3">Marca 3</option>
                                            </select>
                                            <label class="black-text">Marca</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="black-text">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="opc1"  />
                                        <label for="opc1">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group1" type="radio" id="opc2"  />
                                        <label for="opc2">Sin existencias</label>    
                                    </p>
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


        <!-- Modal de marca nueva -->
        <div id="modal_marca" class="modal">
            <div class="modal-content">
                <h4>Agregar marca</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar marcas-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Raspberry" id="marca" type="text" class="validate">
                                            <label for="marca" class="black-text">Marca</label>
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


        <!-- Modal de presentacion nueva -->
        <div id="modal_presen" class="modal">
            <div class="modal-content">
                <h4>Agregar presentaci&oacute;n</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">
                            
                            <!--Formulario para insertar las presentaciones-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="# unidades" id="presen" type="text" class="validate">
                                            <label for="presen" class="black-text">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija un tipo de producto</option>
                                            <option value="1">Tipo de producto 1</option>
                                            <option value="2">Tipo de producto 2</option>
                                        </select>
                                        <label class="black-text">Tipo de producto</label>
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


        <!-- Modal de tipo de producto nueva -->
        <div id="modal_tipo_produc" class="modal">
            <div class="modal-content">
                <h4>Agregar tipo de producto</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar los tipos de productos-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="tipo" type="text" class="validate">
                                            <label for="tipo" class="black-text">Tipo de producto</label>
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


        <!-- Modal de impuesto nueva -->
        <div id="modal_impuesto" class="modal">
            <div class="modal-content">
                <h4>Agregar impuesto</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para insertar impuestos-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="impuesto" type="text" class="validate">
                                            <label for="impuesto" class="black-text">Nombre del impuesto</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="valor" type="number" class="validate">
                                            <label for="valor" class="black-text">valor del impuesto</label>
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


        <!-- Modal de eliminacion de elementos -->
        <div id="modal_eliminar" class="modal">
            <div class="modal-content">
                <h4>Eliminar elemento</h4>
                <p>&iquest;Esta seguro que desea eliminar este elemento&#63;</p>
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
                <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Eliminar</a>
            </div>
        </div>


        <!-- Modal para editar prodcuto 1 -->
        <div id="modal1" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Editar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/productos/producto1.jpg">
                        <div class="white-text">.</div>
                        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar el producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Luces led" id="nombre" type="text" class="validate">
                                            <label for="nombre" class="black-text">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea placeholder="Descripcion" id="descripcion" type="number" class="materialize-textarea"></textarea>
                                            <label for="descripcion" class="black-text">Descripci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="25" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="black-text">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="black-text">Precio</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="## mm x ## mm" id="tamano" type="text" class="validate">
                                            <label for="tamano" class="black-text">Tama&ntilde;o</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="black-text">Marca</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="black-text">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group2" type="radio" id="opc3"  />
                                        <label for="opc3">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group2" type="radio" id="opc4"  />
                                        <label for="opc4">Sin existencias</label>    
                                    </p>
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


        <!-- Modal para producto 2 -->
        <div id="modal2" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Editar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/productos/producto2.jpg">
                        <div class="white-text">.</div>
                        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar el producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Circuitos integrados" id="nombre" type="text" class="validate">
                                            <label for="nombre" class="black-text">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea placeholder="Descripcion" id="descripcion" type="number" class="materialize-textarea"></textarea>
                                            <label for="descripcion" class="black-text">Descripci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="50" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="black-text">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="black-text">Precio</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="## mm x ## mm" id="tamano" type="text" class="validate">
                                            <label for="tamano" class="black-text">Tama&ntilde;o</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="black-text">Marca</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="black-text">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group3" type="radio" id="opc5"  />
                                        <label for="opc5">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group3" type="radio" id="opc6"  />
                                        <label for="opc6">Sin existencias</label>    
                                    </p>
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


        <!-- Modal para producto 3 -->
        <div id="modal3" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Editar producto</h4>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="../web/img/productos/producto3.jpg">
                        <div class="white-text">.</div>
                        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">archive</i>Cambiar foto</a>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar el producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Resistenacias" id="nombre" type="text" class="validate">
                                            <label for="nombre" class="black-text">Nombre</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea placeholder="Descripcion" id="descripcion" type="number" class="materialize-textarea"></textarea>
                                            <label for="descripcion" class="black-text">Descripci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="125" id="cantidad" type="number" class="validate">
                                            <label for="Cantidad" class="black-text">Cantidad</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="$25.00" id="precio" type="number" class="validate">
                                            <label for="Precio" class="black-text">Precio</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="## mm x ## mm" id="tamano" type="text" class="validate">
                                            <label for="tamano" class="black-text">Tama&ntilde;o</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija una marca</option>
                                            <option value="1">Marca 1</option>
                                            <option value="2">Marca 2</option>
                                            <option value="3">Marca 3</option>
                                        </select>
                                        <label class="black-text">Marca</label>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select>
                                                <option value="" disabled selected>Elija una presenta&oacute;n</option>
                                                <option value="1">Presentaci&oacute;n 1</option>
                                                <option value="2">Presentaci&oacute;n 2</option>
                                                <option value="3">Presentaci&oacute;n 3</option>
                                            </select>
                                            <label class="black-text">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <p>
                                        <input class="with-gap" name="group4" type="radio" id="opc7"  />
                                        <label for="opc7">En existencia</label>    
                                    </p>
                                    <p>
                                        <input class="with-gap" name="group4" type="radio" id="opc8"  />
                                        <label for="opc8">Sin existencias</label>    
                                    </p>
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


        <!-- Modal de editar marca -->
        <div id="modal_marca_edit" class="modal">
            <div class="modal-content">
                <h4>Editar marca</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar la marca-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Raspberry" id="marca" type="text" class="validate">
                                            <label for="marca" class="black-text">Marca</label>
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


        <!-- Modal de editar presentacion -->
        <div id="modal_presen_edit" class="modal">
            <div class="modal-content">
                <h4>Editar presentaci&oacute;n</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar la presentacion-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="# unidades" id="presen" type="text" class="validate">
                                            <label for="presen" class="black-text">Presentaci&oacute;n</label>
                                        </div>
                                    </div>
                                    <div class="input-field col s12">
                                        <select>
                                            <option value="" disabled selected>Elija un tipo de producto</option>
                                            <option value="1">Tipo de producto 1</option>
                                            <option value="2">Tipo de producto 2</option>
                                        </select>
                                        <label class="black-text">Tipo de producto</label>
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


        <!-- Modal de editar tipo de producto -->
        <div id="modal_tipo_produc_edit" class="modal">
            <div class="modal-content">
                <h4>Editar tipo de producto</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar el tipo de producto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="tipo" type="text" class="validate">
                                            <label for="tipo" class="black-text">Tipo de producto</label>
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


        <!-- Modal de editar impuesto -->
        <div id="modal_impuesto_edit" class="modal">
            <div class="modal-content">
                <h4>Editar impuesto</h4>
                <div class="card horizontal">
                    <div class="card-stacked">
                        <div class="card-content">

                            <!--Formulario para editar impuesto-->
                            <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="impuesto_edit" type="text" class="validate">
                                            <label for="impuesto_edit" class="black-text">Impuesto</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="valor_edit" type="number" class="validate">
                                            <label for="valor_edit" class="black-text">Valor del impuesto</label>
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

    </main>

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