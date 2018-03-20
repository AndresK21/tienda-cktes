<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>CKTes-Login</title>

  <!-- Android bar-->
  <meta name="theme-color" content="#444">
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link rel="stylesheet" href="../web/css/normalize.min.css">
  <link rel='stylesheet prefetch' href='../web/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='../web/css/animate.min.css'>
  <link rel="stylesheet" href="../web/css/style_portal.css">
  <link rel="stylesheet" href="../web/css/stylenav.css">
</head>

<body class="fondologin">

  <div class="formlogin">
    <header>
      <!--Archivo maestro paraa el navbar -->
      <?php
                  require('../app/view/navbar_portal.php');
                  ?>
       
        <!-- tab para elegir registrarse o iniciar sesión -->
        <ul class="tab-group">
          <li class="tab active">
            <a href="#signup">Registrarse</a>
          </li>
          <li class="tab">
            <a href="#login">Iniciar sesión</a>
          </li>
        </ul>

        <div class="tab-content">
          <div id="signup">
            <h1>Registrate gratis</h1>
            <!--Form para registrar nuevo usuario -->
            <form action="/" method="post">

              <div class="top-row">
                <div class="field-wrap">
                  <label class"stylenav"> Primer nombre
                    <span class="req">*</span>
                  </label>
                  <input type="text" required autocomplete="off" />
                </div>

                <div class="field-wrap">
                  <label class"stylenav">
                    Apellido
                    <span class="req">*</span>
                  </label>
                  <input type="text" required autocomplete="off" />
                </div>
              </div>

              <div class="field-wrap">
                <label class"stylenav">
                  Correo electrónico
                  <span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" />
              </div>

              <div class="field-wrap">
                <label class"stylenav">
                  Contraseña
                  <span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" />
              </div>

              <button type="submit" class="button button-block" />Registrarse</button>

            </form>

          </div>

          <div id="login">
            <h1>Bienvenido otra vez!</h1>
            <!-- Form para que pueda inciar sesión el cliente -->
            <form action="/" method="post">

              <div class="field-wrap">
                <label class"stylenav">
                  Correo electrónico
                  <span class="req">*</span>
                </label>
                <input type="email" required autocomplete="off" />
              </div>

              <div class="field-wrap">
                <label class"stylenav">
                  Contraseña
                  <span class="req">*</span>
                </label>
                <input type="password" required autocomplete="off" />
              </div>

              <p class="forgot">
                <a href="#">Olvidó la contraseña?</a>
              </p>

              <button class="button button-block" />Iniciar sesión</button>

            </form>

          </div>

        </div>
        <!-- tab-content -->
  <!-- Archivos a utilizar en la pagina -->
  </div>
  <!-- /form -->
  <script src='../web/js/jquery.min.js'></script>
  <script defer src="../web/js/fontawesom.js"></script>
  <script src='../web/js/materialize.min.js'></script>
  <script src="../web/js/index.js"></script>
  <script src="../web/js/loginjs.js"></script>



</body>

</html>