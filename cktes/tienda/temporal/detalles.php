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
  <link href="../web/css/material_icons.css" rel="stylesheet">
  <link rel='stylesheet prefetch' href='../../web/css/animate.min.css'>
  <link rel="stylesheet" href="../../web/css/normalize.min.css">
  <link rel="stylesheet" href="../../web/css/style.css">
  <link rel="stylesheet" href="../web/css/style_tienda.css">
  <link rel="stylesheet" href="../../web/css/valoraciones.css">
  <?php
    include('../../app/view/referencias.php');
  ?>
</head>
<body>
  <!--Archivo maestro del navbar -->
  <?php
    require('../../app/view/nav_tienda.php');
  ?>
  <!-- CONTENEDOR DE LA PRIMERA CATEGORIA -->
  <main class="caviar">
      <!--TITULO Categorias-->
      <div class="container">
        <h2 class="caviar titulo1 ">Detalles</h2>
      </div>
        <h4>A&ntilde;adir al Carrito</h4>
        <div class="row">
          <div class="card col s12 m12 l8 offset-l2">
            <div class="card-image col s12 m6 l6">
              <img src="../web/img/producto3.jpg">
            </div>
            <div class="card-stacked col s12 m6 l6">
                <div class="black-text card-content col s12 m8 offset-m1 l10">
                <p>Nombre del Producto</p>
                <div class="input-field ">
                    <p>Cantidad</p>
                  <input placeholder="1" id="cantidad" type="number" class="validate">
                </div>
                <p class="section">Precio Unitario&#58; &#36;25.00</p>
                <p class="section">Sub-total&#58; &#36;25.00</p>
                
              </div>
              <div class="col s6 m6 l6">
                <a href="#!" class="modal-action modal-close waves-effect waves white-text btn-flat red">Descartar</a>
              </div>
              <div class="col s6 m6 l6">
                <a href="#!" class="modal-action modal-close waves-effect waves white-text btn-flat green">Agregar</a>
              </div>
              <p class="">Valoracion</p>
              <div class="ec-stars-wrapper">  
                      <!-- 5 ESTRELLAS PARA VALORAR -->
                      <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                      <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                      <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                      <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                      <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                  </div>
            </div>
          </div>
      </div>
  </main>
<script type="text/javascript" src="../web/js/main.js"></script>
<script src='../web/js/jquery.min.js'></script>
<script  src="../web/js/index.js"></script>
<script type="text/javascript" src="../web/js/ini.js"></script>
<script type="text/javascript" src="../web/js/materialize.min.js"></script>
</body>
</html>