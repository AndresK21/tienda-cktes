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
    <!-- PARALAX DE DIVISION -->
  <div class="parallax-container">
    <div class="parallax"><img src="../web/img/paralax3colores.png"></div>
  </div>
  <!-- CONTENEDOR DE LA PRIMERA CATEGORIA -->
  <main class="caviar">
      <!--TITULO Categorias-->
      <div class="container">
        <h2 class="caviar titulo1 centro">Servicios</h2>
      </div>  
      <!-- PRIMERA CATEGORIA -->
      <div class="row">
        <!-- PRIMER PRODUCTO -->
        <div class="col s12 m10 offset-m1 l3 offset-l1">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../web/img/productos/embebida.jpg">
            </div>
            <div class="card-action">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Computadoras Embebidas<i class="material-icons right">more_vert</i></span>
                <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">assignment</i>Solicitar</a>
              </div>
            </div>
            <div class="card-reveal cktes2">
              <span class="card-title  black-text text-darken-4" centro>Descripción<i class="material-icons right">close</i></span>
              <p class="black-text text-darken-4">Computadoras diseñadas para sistemas especializados, para la realización de funciones muy especificas con soporte multiplataforma.</p>
            </div>
          </div>
        </div>
  
          <!-- SEGUNDO PRODUCTO -->
        <div class="col s12 m10 offset-m1 l3">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../web/img/productos/dev.png">
            </div>
            <div class="card-action">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Dev Kits<i class="material-icons right">more_vert</i></span>
                <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">assignment</i>Solicitar</a>
              </div>
            </div>
            <div class="card-reveal cktes2">
              <span class="card-title  black-text text-darken-4 centro">Descripción<i class="material-icons right">close</i></span>
              <p class="black-text text-darken-4">Kits orientados al aprendizaje e implementación de nuevos componentes. Tecnologias y plataformas para su completo aprendizaje y desarrollo, E-Textiles, IoT, kits biométricos, etc.</p>
            </div>
          </div>
        </div>
  
          <!-- TERCER PRODUCTO -->
        <div class="col s12 m10 offset-m1 l3">
          <div class="card sticky-action">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="../web/img/productos/sensor.jpg">
            </div>
            <div class="card-action">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Sensores<i class="material-icons right">more_vert</i></span>
                <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">assignment</i>Solicitar</a>
              </div>
            </div>
            <div class="card-reveal cktes2">
              <span class="card-title  black-text text-darken-4 centro">Descripción<i class="material-icons right">close</i></span>
              <p class="black-text text-darken-4">Asi mismo poseemos una amplia gama de sensores, para implementaciones de proyectos industriales, como educativos y desarrollos personales.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
          <h2 class="caviar titulo1 centro ">Pedido</h2>
        </div>  
        <div class="row">
            <div class="card col s12 m12 l8 offset-l2 ">
              <div class="card-image col s12 m6 l6">
                <img src="../web/img/producto3.jpg">
              </div>
              <div class="card-stacked col s12 m6 l6">
                <div class="black-text card-content col s12 m8 offset-m1 l10">
                    <div class="input-field ">
                  <p>Nombre del Producto</p>
                  <input placeholder="Producto" id="producto" type="text" class="validate">
                  </div>
                  <div class="input-field ">
                      <p>Cantidad</p>
                    <input placeholder="1" id="cantidad" type="number" class="validate">
                  </div>                  
                </div>
                <div class="col s12 m12 l10">
                  <a href="#!" class="cktes waves-effect waves-light btn"><i class="material-icons right">assignment</i>Solicitar Producto</a>
                </div>
              </div>
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