<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PCB</title>
  
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
        <?php
                require('../app/view/navbar_portal.php');
                ?>
      <header>
  <!--Nada interesante-->  
   </header>
    <main>

    <section>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3">
          <h1 class="bajar caviar titulo1 centro container" data-shadow='Nosotros'>PCB</h1>
        </div>
      </div>
    </section>
        
        <!-- multistep form -->
        <form id="msform">
            <!-- progressbar -->
            <ul id="progressbar">
                <li class="active">Subir archivo</li>
                <li>Vizualizar archivo</li>
                <li>Especificaciones</li>
            </ul>
            <!-- fieldsets para importar archivos gerber -->
            <fieldset>
                <h2 class="fs-title">Importar archivo gerber</h2>
                <h3 class="fs-subtitle">Aquí debes seleccionar el archivo gerber que deseas en tu placa</h3>
                <div class="form-group">
                    <label class="archivos" for="exampleFormControlFile1">Archivo gerber</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>

                <input type="button" name="next" class="next action-button" value="Siguiente" />
            </fieldset>

            <fieldset>
                <!-- Fildset para visualizar el archivose -->
                <h2 class="fs-title">Visualizar archivo</h2>
                <h3 class="fs-subtitle">Aquí podrás ver las capas de tu archivo y comprobar que todo esta correcto</h3>
                <img class="pcb" src="../web/img/pcb/3.png" height="500px">

                
                <input type="button" name="next" class="next action-button" value="Siguiente" />
            </fieldset>

            <!-- Fildset para seleccionar especificaciones-->
            <fieldset>
                <h2 class="fs-title">Especificaciones</h2>
                <h3 class="fs-subtitle">Aquí podrás terminar con los detalles de tu placa </h3>
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Cantidad</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Sustrato</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Baquelita</option>
                            <option>Fibra de vidrio</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Medidas (mm) </label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                </form>
                
                <input type="submit" name="submit" class="submit action-button" value="Añadir Carrito" />
            </fieldset>

        </form>
        <!-- Form para mandar mensajes para aclarar dudas -->
        <div id="dudas">
            <div class="container">
                <form>
                    <div class="form-group">
                        <label class="tamañoletra" for="exampleFormControlInput1">Asunto</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1">
                    </div>
                    <div class="form-group">
                        <label class="tamañoletra" for="exampleFormControlTextarea1">Mensaje</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <input class="btnform" type="submit" name="submit" class="submit action-button" value="Enviar" />
                </form>
            </div>
        </div>
</main>
<!-- Archivo maestro de footer-->
<footer class="relativo">

        <?php
                require('../app/view/footer_portal.php');
                ?>  
</footer>
          <!-- Scripts a utilizar-->  
          <script src="../web/js/jquery.min.js"></script>
          <script src='../web/js/jquery.easing.min.js'></script>
           <script src="../web/js/stepform.js"></script>  
          <script src="../web/js/fontawesom.js"></script>
          <script src='../web/js/materialize.min.js'></script>
          <script src='../web/js/stats.min.js'></script>
          <script src="../web/js/index.js"></script>
</body>


</html>