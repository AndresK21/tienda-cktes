<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CKTes-Nosotros</title>

   <!-- Android bar-->
  <meta name="theme-color" content="#444">
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link href="../web/css/icon.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../web/css/normalize.min.css">
  <link rel='stylesheet prefetch' href='../web/css/materialize.min.css'>
  <link rel='stylesheet prefetch' href='../web/css/animate.min.css'>
  <link rel="stylesheet" href="../web/css/style_portal.css">

</head>
<body>
<header>
  <!-- Archivo maestro de navbar -->
        <?php
        require('../app/view/navbar_portal.php');
        ?>
 <!--Sección del tema de la pagina -->
 <section>
     <h1 class="bajar caviar titulo1 centro container" data-shadow='Nosotros'>Nosotros</h1>
 </div>
 <!--Seccion de quienes somos -->
</section>
    <div class="card-column column-0">
      <div class="card card-color-0">
        <div class="border"></div>
        <img src="../web/img/portal/nosotros/1.jpg" />
        <h1>Quienes somos</h1>
      </div>
      <!--Seccion de misión -->
      <div class="card card-color-2">
        <div class="border"></div>
        <img src="../web/img/portal/nosotros/1.jpg" />
        <h1>Mision</h1>
      </div>
    </div>
    <!-- seccion de slogan-->
    <div class="card-column column-1">
      <div class="card card-color-1">
        <div class="border"></div>
        <img src="../web/img/portal/nosotros/1.jpg" />
        <h1>Slogan</h1>
      </div>
      <!--seccion de vision -->
      <div class="card card-color-3">
        <div class="border"></div>
        <img src="../web/img/portal/nosotros/1.jpg" />
        <h1>Vision</h1>
      </div>
    </div>
    </div>
    <div id="cover" class="cover"></div>
    <div id="open-content" class="open-content">
      <a href="#" id="close-content" class="close-content">
        <span class="x-1"></span>
        <span class="x-2"></span>
      </a>
      <img id="open-content-image" src="" />
      <div class="text" id="open-content-text">
      </div>
</header>
<!--archivo maestro de footer -->
<?php
                require('../app/view/footer_portal.php');
                ?> 
  <!--Archivos a utilizaar --> 
 <!--Archivos a utilizar en la pagna -->
          <script src='../web/js/jquery.min.js'></script>
          <script src="../web/js/fontawesom.js"></script>
          <script src='../web/js/materialize.min.js'></script>
          <script src='../web/js/stats.min.js'></script>
          <script src="../web/js/index.js"></script>


</body>

</html>