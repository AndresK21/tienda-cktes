<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Desarrollo</title>
  
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
    <link rel="stylesheet" href="../web/css/stylenav.css">
</head>

<body>
        <!-- Archivo maestro del menú-->
        <?php
                require('../app/view/navbar_portal.php');
                ?>
        <!-- Seccion para colocoar nombre de la seccion-->

      <header>
  <!--Nada interesante-->  
   </header>
    <main>
        <section>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                <h1 class="bajar caviar titulo1 centro desarrollo"  data-shadow='Nosotros'>Desarrollo</h1>
                </div>
            </div>
        </section>
        <!-- Nombre de tipos de proyectos que se pueden desarrollar-->
        <ul class="tab-group">
          <li class="tab active">
            <a href="#pcba">PCB-Arte</a>
          </li>
          <li class="tab">
            <a href="#proarte">Proyectos-Arte</a>
          </li>
        </ul>
        <div class="tab-content">
            <div id="pcba">
                <!-- multistep form -->
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active ">Paso 1 </li>
                        <li>Paso 2</li>
                    </ul>
                    <!-- fieldsets para describir lo que se desea hacer-->
                    <fieldset>
                        <h2 class="fs-title">Describa lo que desea hacer </h2>
                        <div class="form-group">
                            <label class="archivos" for="exampleFormControlFile1">Descripcion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <input type="button" name="nextp" class="next action-button" value="Siguiente" />
                    </fieldset>
                    <!-- Fildset para importar el archivo que se desea-->
                    <fieldset>
                        <h2 class="fs-title">Importar archivo </h2>
                        <h3 class="fs-subtitle">Aquí debes seleccionar el archivo que deseas subir</h3>
                        <div class="form-group">
                            <label class="archivos" for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        
                        <input type="button" name="previousp" class="previous action-button" value="Anterior" />
                        <input type="submit" name="submitp" class="submit action-button" value="enviar" />
                    </fieldset>
                </form>    
            </div>
            <div id = "proarte">
                <!-- multistep form -->
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                        <li class="active ">Paso 1 </li>
                        <li>Paso 2</li>
                        <li>Paso 3</li>
                    </ul>
                    <!-- fieldsets para describir lo que se desea hacer -->
                    <fieldset>
                        <h2 class="fs-title">Describa lo que desea hacer </h2>
                        <div class="form-group">
                            <label class="archivos" for="exampleFormControlFile1">Descripcion</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <input type="button" name="next" class="next action-button" value="Siguiente" />
                    </fieldset>
                    <!--Fildset para seleccionar a que categoria pertenece la persona(cliente) -->
                    <fieldset>
                        <h2 class="fs-title">A que categoria pertenece </h2>
                        <div class="form-group">
                            <label class="archivos" for="exampleFormControlFile1">Categorias</label>
                                <input type="radio" name="rb" id="rb1" />
                                <label class ="desarrollo" for="rb1">Industria / Agroservicios</label>
                                <input type="radio" name="rb" id="rb2" />
                                <label class ="desarrollo" for="rb2">Comercios / Servicios</label>
                                <input type="radio" name="rb" id="rb3" />
                                <label class ="desarrollo" for="rb3">Gobierno</label>
                                <input type="radio" name="rb" id="rb4" />
                                <label class ="desarrollo" for="rb4">Emprendedores</label>
                                <input type="radio" name="rb" id="rb5" />
                                <label class ="desarrollo" for="rb5">Independientes</label>
                                <input type="radio" name="rb" id="rb6" />
                                <label class ="desarrollo" for="rb6">Estudiantes</label>
                        </div> 
                            <input type="button" name="previous" class="previous action-button" value="Anterior"/>
                            <input type="button" name="next" class="next action-button" value="Siguiente" />  
                             </fieldset>
                    <!-- Fildset para importar archivo -->
                    <fieldset>
                        <h2 class="fs-title">Importar archivo </h2>
                        <h3 class="fs-subtitle">Aquí debes seleccionar el archivo que deseas subir</h3>
                        <div class="form-group">
                            <label class="archivos" for="exampleFormControlFile1">Archivo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <input type="button" name="previous" class="previous action-button" value="Anterior" />
                        <input type="submit" name="submit" class="submit action-button" value="enviar" />
                    </fieldset>
                </form>     
            </div>
        </div>    

</main>
<!--archivo maestro de footer -->
<?php
                require('../app/view/footer_portal.php');
                ?> 
    <!--Archivos a utilizar en la pagina -->
    <script src="../web/js/jquery.min.js"></script>
    <script src='../web/js/jquery.easing.min.js'></script>
    <script src="../web/js/stepform.js"></script>
    <script src="../web/js/loginjs.js"></script>
          <script src="../web/js/fontawesom.js"></script>
          <script src='../web/js/materialize.min.js'></script>
          <script src='../web/js/stats.min.js'></script>
          <script src="../web/js/index.js"></script>

</body>


</html>