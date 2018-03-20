<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CKTes</title>
  <meta charset="utf-8" />

  <!-- Android bar-->
  <meta name="theme-color" content="#444">
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link href="../web/css/icon.css" rel="stylesheet">
 
  <link rel='stylesheet prefetch' href='../web/css/materialize.min.css'>
  <link rel='stylesheet prefetch' href='../web/css/animate.min.css'>
  <link rel="stylesheet" href="../web/css/style_portal.css">


</head>

<body>
  <!--Archivo maestro del navbar -->
    <?php
    require('../app/view/navbar_portal.php');
    ?>

  <header>
    <section class="topab">  
        <div class="letrainicio">
          <div class="row">
            <div class="col s12 center centrars">
              <h1 class="tamañotit">CKTES</h1>
                <h3>Microempresa salvadoreña fabricadora de producto y importacion de materiales electronicos</h3>
                </div>
              </div>
              <i class="fas fa-arrow-down fa-8x"></i>
            </div>
     </section>
   </header>

          <main>
            <!--Misión-->
            <section>
              <div class="container">
                <h2 class="caviar titulo1 center">Misión</h2>
                    <p class="caviar contenidom center">Impulsar el crecimiento Tecnologico con la creacion de PCB de Alta calidad la cual brindara un desarrollo
                      optimo del proyecto mejorando el rendimiento del circuito creado</p>
              </div>
              <!--Visiónn de la empresa -->
              <div class="container">
                <h2 class="caviar titulo1 center">Visión</h2>
                    <p class="caviar contenidom center">Consolidarnos como una empresa en la vanguardia en la creacion de circuitos impresos, acercando a nuestros
                      clientes con las soluciones tecnologicas a nivel nacional.</p>
              </div>
            </section>
           
            <!-- Sección de los trabajos de la empresa-->
            <section>
            <div class="container">
            <h2 class="caviar titulo1 center">Nuestros trabajo</h2>
            </div>
            <div class="container">
             <div class="slider">
              <ul class="slides">
              <li>      
             <img src="../web/img/portal/inicio/1.PNG"/><!-- cambiar IMG -->
             </li>
             <li>
             <img src="../web/img/portal/inicio/2.PNG"/> <!-- cambiar IMG -->
             </li>
             </ul>
             </div>
           </div>
            </section>

            </main>

            <?php 
            require('../app/view/footer_portal.php');
            ?>



          <!--Archivos a utilizar en la pagna -->
          <script src='../web/js/jquery.min.js'></script>
          <script src="../web/js/fontawesom.js"></script>
          <script src='../web/js/materialize.min.js'></script>
          <script src='../web/js/stats.min.js'></script>
          <script src="../web/js/index.js"></script>
          </body> 
          </html>