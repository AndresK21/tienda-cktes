<?php
require_once("../app/models/database.class.php");
require_once("../app/helpers/validator.class.php");
require_once("../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
    session_name("cktes_tienda");
		session_start();
		ini_set("date.timezone","America/El_Salvador"); 
		print("

<!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset='UTF-8'>
      <title>$title</title>
      <!-- Android bar--> 
      <meta name='theme-color' content='#444'>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'>
      <link rel='stylesheet' href='../web/css/materialize.min.css'>
      <link href='../web/css/icon.css' rel='stylesheet'>
      <link rel='stylesheet' href='../web/css/normalize.min.css'>
      <link rel='stylesheet' href='../web/css/style_tienda.css'>
      <script src='../web/js/sweetalert.min.js'></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
    </head> 
    <body>
      ");
      if(isset($_SESSION['id_cliente'])){
        
        print("
            <header>
              <div class='navbar-fixed'>
                <nav>
                <div class='nav-wrapper'>
                  <a href='index.php'><span>CKT</span> <span>ES</span></a>
                  <ul class='right'>
                  <li><a class='dropdown-button' data-activates='dropdown'><span><i class='fas fa-user'></i><span/><span class='corre'>$_SESSION[correo_electronico]</span></a></li>
                  <ul id='dropdown' class='dropdown-content'>
                          <li><a href='perfil.php'><i class='material-icons'>face</i>Editar perfil</a></li>
                          <li><a href='contrasena.php'><i class='material-icons'>lock</i>Cambiar clave</a></li>
                          <li><a href='historial.php'><i class='material-icons'>shopping_cart</i>Historial</a></li>
                          <li><a href='logout.php'><i class='material-icons'>clear</i>Salir</a></li>
                  </ul>
                  <li><div class='sandwich' id='btn'>
                    <span class='top'></span>
                    <span class='middle'></span>
                    <span class='bottom'></span>
                     </div>
                  </li>
                </ul>
                </div>
                  <div class='menu' id='menu'>
                      <div class='menu-list'>
                        <ul class='row'>
                          <li class='col s12'><a class='container' href='#'>Portal</a></li>
                          <li class='col s12'><a class='container' href='categorias.php'>Categorias</a></li>
                          <li class='col s12'><a class='container' href='pcb.php'>Servicios</a></li>
                          <li class='col s12'><a class='container' href='carrito.php'>Carrito</a></li>
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
              <a href='index.php'><span>CKT</span> <span>ES</span></a>
              <ul class='right'>
              <li><a href='acceder.php' class='icono_ini'><span><i class='fas fa-user'></i></span></a></li>

            <li><div class='sandwich' id='btn'>
              <span class='top'></span>
              <span class='middle'></span>
              <span class='bottom'></span>
            </div></li>
             </ul>

            </div>           
            <div class='menu' id='menu'> 
              <div class='menu-list'>    
                <ul class='row'>
                <li class='col s12'><a class='container' href='#'>Portal</a></li>
                <li class='col s12'><a class='container' href='categorias.php'>Categorias</a></li>
                <li class='col s12'><a class='container' href='pcb.php'>Servicios</a></li>
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
    <footer id='colorfooter' class='page-footer cktes'>
    <div class='container'>
        <div class='row'>
            <p class=' center text-muted'>CKT-ES, S.A. DE C.V es un proyecto impulsado por INSERT y apoyado por el MINEC a través de la DICA y FONDEPRO</p>
            <div class='col s9 offset-s2 m6 l3'>
                <img class='responsive-img' src='../web/img/footer/insert.png'>
            </div>
            <div class='col s9 offset-s2 m6 l3'>
                <img class='responsive-img' src='../web/img/footer/gobierno.png'>
            </div>
            <div class='col s9 offset-s2 m6 l3'>
                <img class='responsive-img' src='../web/img/footer/fondepro.png'>
            </div>
            <div class='col s9 offset-s2 m6 l3'>
                <img class='responsive-img' src='../web/img/footer/dca.png'>
            </div>
        </div>
        <p class='text-muted'><b>Ganadores de Edici&oacute;n Innova emprende 2016</b></p><br>
        <div class='row'>
            <div class='col s9 offset-s2 m6 l3'>
                <img class='responsive-img' src='../web/img/footer/innova.png'>
            </div>
        </div>
    </div>
    <div class='footer-copyright'>
      <div class='container'>
        <p>© 2018 Derechos reservados a CKTES S.A. de C.V.</p>   
      </div>
    </div>
  </footer>
              <!--Import jQuery before materialize.js-->
              <script type='text/javascript' src='../web/js/jquery-3.3.1.min.js'></script>
              <script type='text/javascript' src='../web/js/main.js'></script>
              <script type='text/javascript' src='../web/js/tienda.js'></script>
              <script type='text/javascript' src='../web/js/materialize.min.js'></script>
              <script src='../web/js/fontawesom.js'></script>
          </body>
        </html>
		");
  }
  public static function templateAu($title){
    session_name("cktes_tienda");
		session_start();
		ini_set("date.timezone","America/El_Salvador"); 
    print("
    <!DOCTYPE html>
<html lang='en'>
    <head>
    <meta charset='UTF-8'>
      <title>$title</title>
      <!-- Android bar--> 
      <meta name='theme-color' content='#444'>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
      <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0'>
      <link rel='stylesheet' href='../web/css/materialize.min.css'>
      <link href='../web/css/icon.css' rel='stylesheet'>
      <link rel='stylesheet' href='../web/css/normalize.min.css'>
      <link rel='stylesheet' href='../web/css/style_tienda.css'>
      <script src='../web/js/sweetalert.min.js'></script>
      <script src='https://www.google.com/recaptcha/api.js'></script>
    </head> 
    <body>
    <header>
       <div class='navbar-fixed'>
                <nav>
                <div class='nav-wrapper'>
              <a href='index.php'><span>CKT</span> <span>ES</span></a>
              <ul class='right'>
              <li><a href='#' class='icono_ini'><span><i class='fas fa-user'></i></span></a></li>

             </ul>

            </div>           
           
        </nav>
      </div>
    </header>
  <main>
    ");
  
}


}
?>