<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Tienda</title>
    <!-- Android bar-->
  <meta name="theme-color" content="#444">
    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link rel="stylesheet" href="../web/css/materialize.min.css">
  <link href="../web/css/icon.css" rel="stylesheet">
  <link rel="stylesheet" href="../web/css/normalize.min.css">
  <link rel="stylesheet" href="../web/css/valoraciones.css">
  <link rel="stylesheet" href="../web/css/style_tienda.css">
</head>

<body>
<!--Archivo maestro del navbar -->
    <?php
    require('../app/view/nav_tienda.php');
    ?>
  <main>
  <p>.</p>
  <p>.</p>
  <p>.</p>
    <div class="container">
        <!--Parte de clasificacion de la tabla-->
        <table class="bordered highlight responsive-table espacio_sup espacio_inf">
            <thead class="cktes white-text">
            <tr>
                <th>Imagen</th>
                <th>Descripci&oacute;n</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Subtotal</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            <!--Producto de ejemplo 1-->
            <tr>
                <td><img class="imagen circle" src="../web/img/producto1.jpg"></td>
                <td>Pintura l&aacute;tex blanco ostra high standard.</td>
                <td><input placeholder="2" id="cantidad" type="number" class="validate"></td>
                <td>$25.00</td>
                <td>$50.00</td>
                <td><a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a></td>

                </td>
            </tr>
            <!--Producto de ejemplo 2-->
            <tr>
                <td><img class="imagen circle" src="../web/img/producto2.jpg"></td>
                <td>Pintura pro l&aacute;tex blanco hueso.</td>
                <td><input placeholder="1" id="cantidad" type="number" class="validate"></td>
                <td>$25.00</td>
                <td>$25.00</td>
                <td><a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                
                </td>
            </tr>
            <!--Producto de ejemplo 3-->
            <tr>
                <td><img class="imagen circle" src="../web/img/producto3.jpg"></td>
                <td>Pintura pro l&aacute;tex marfil.</td>
                <td><input placeholder="2" id="cantidad" type="number" class="validate"></td>
                <td>$25.00</td>
                <td>$50.00</td>
                <td><a class="waves-effect waves-light modal-trigger" href="#modal_eliminar"><i class="material-icons red-text text-darken-3 prefix">delete</i></a>
                
                </td>
            </tr>

            </tbody>
        </table>

        <!--Espacio donde se muestra el costo total de la compra y proceder a pagar-->
        <div class="right-align">
            <h5 style="text-decoration: underline;">Total a pagar:  $150.00</h5>
            <a class=" cktes waves-effect waves-light btn espacio_inf"><i class="material-icons right">shopping_cart</i>Hacer compra</a>
        </div>
    </div>
        
    <!-- Modal de eliminacion de productos -->
    <div id="modal_eliminar" class="modal">
        <div class="modal-content">
            <h4>Eliminar producto</h4>
            <p>&iquest;Esta seguro que desea eliminar este producto&#63;</p>
        </div>
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancelar</a>
            <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Eliminar</a>
        </div>
    </div>
</main>
    <script type="text/javascript" src="../web/js/main.js"></script>
    <script src='../web/js/jquery.min.js'></script>
    <script type="text/javascript" src="../web/js/tienda.js"></script>
    <script type="text/javascript" src="../web/js/materialize.min.js"></script>
    <script src="../web/js/fontawesom.js"></script>

    <script src='../web/js/stats.min.js'></script>
</body>
</html>