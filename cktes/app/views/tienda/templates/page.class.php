<?php
require_once("../app/helpers/validator.class.php"); require_once("../app/helpers/component.class.php");
class Page extends Component{ 
public static function templateHeader($title){ 
session_start();
ini_set("date.timezone","America/El_Salvador");
print("
<!DOCTYPE html>
<html lang='es'>

<head>
  <meta charset='UTF-8'>
  <title>Tienda</title>
  <!-- Android bar-->
  <meta name='theme-color' content='#444'>
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
  <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'>
  <link rel='stylesheet' href='../web/css/materialize.min.css'>
  <link href='../web/css/icon.css' rel='stylesheet'>
  <link rel='stylesheet' href='../web/css/normalize.min.css'>
  <link rel='stylesheet' href='../web/css/style_tienda.css'>
</head>
<body>
");
      if(isset($_SESSION['Id_cliente'])){
        print("
<header>
  <div class='navbar-fixed'>
    <nav>
      <div class='nav-wrapper'>
        <a href='../portal/index.php'>
          <span>CKT</span>
          <span>ES</span>
        </a>
      </div>
      <div class='sandwich' id='btn'>
        <span class='top'></span>
        <span class='middle'></span>
        <span class='bottom'></span>
      </div>
      <a href='../tienda/carrito.php'>
        <span id='iconomenuuser'>
          <i class='fas fa-user'></i>
        </span>
      </a>
      <a href='../tienda/carrito.php'>
        <span id='iconomenucart'>
          <i class='fas fa-shopping-cart tma'></i>
        </span>
      </a>
      <div class='menu' id='menu'>
        <div class='menu-list'>
          <ul class='row'>
            <li class='col s12'>
              <a href='../portal/index.php'>CKTES</a>
            </li>
            <li class='col s12'>
              <a href='../tienda/index.php'>Tienda</a>
            </li>
            <li class='col s12'>
              <a href='../tienda/categoria.php'>Categoria</a>
            </li>
            <li class='col s12'>
              <a href='../tienda/servicios.php'>Servicios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  </header>
  <main>
  ");
}
else {
print("
<header>
  <div class='navbar-fixed'>
    <nav>
      <div class='nav-wrapper'>
        <a href='../portal/index.php'>
          <span>CKT</span>
          <span>ES</span>
        </a>
      </div>
      <div class='sandwich' id='btn'>
        <span class='top'></span>
        <span class='middle'></span>
        <span class='bottom'></span>
      </div>
      <a href='../tienda/carrito.php'>
        <span id='iconomenucart'>
          <i class='fas fa-user'></i>
        </span>
      </a>
      <div class='menu' id='menu'>
        <div class='menu-list'>
          <ul class='row'>
            <li class='col s12'>
              <a href='../portal/index.php'>CKTES</a>
            </li>
            <li class='col s12'>
              <a href='../tienda/index.php'>Tienda</a>
            </li>
            <li class='col s12'>
              <a href='../tienda/categoria.php'>Categoria</a>
            </li>
            <li class='col s12'>
              <a href='../tienda/servicios.php'>Servicios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  </header>
  <main>
    "); 
  }
 }
public static function templateFooter(){
       print("
  </main>
  <footer class='page-footer cyan darken-2'>
    <div class='container'>
      <div class='row'>
        <div class='col l6 s12'>
          <h5 class='white-text'>Contáctanos</h5>
          <p class='grey-text text-lighten-4'>
            <b>Técnicos de mantenimiento</b>
          </p>
          <p class='grey-text text-lighten-4'>Luis Hernández Teléfono (+503 7528-0267)</p>
          <p class='grey-text text-lighten-4'>Fátima Aguilar Teléfono (+503 7861-1457)</p>
        </div>
  </footer>
  <!--Import jQuery before materialize.js-->
  <script type='text/javascript' src='../web/js/main.js'></script>
  <script type='text/javascript' src='../web/js/jquery-3.3.1.min.js'></script>
  <script type='text/javascript' src='../web/js/tienda.js'></script>
  <script type='text/javascript' src='../web/js/materialize.min.js'></script>
  <script src='../web/js/fontawesom.js'></script>
</body>

</html>
"); 
} 
}
?>