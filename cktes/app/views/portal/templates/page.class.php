<?php
require_once("../app/models/database.class.php");
require_once("../app/helpers/validator.class.php");
require_once("../app/helpers/component.class.php");
require_once("../app/models/cliente.class.php");
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
    </head> 
    <body>
      ");
      if(isset($_SESSION['id_cliente'])){
        if (isset($_SESSION['tiempo'])) {
                
          //Tiempo en segundos para dar vida a la sesión.
          $inactivo = 300; //5min en este caso.
          
          //Calculamos tiempo de vida inactivo.
          $vida_sesion = time() - $_SESSION['tiempo'];
          
          //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
          if ($vida_sesion > $inactivo) {
              //Destruimos sesión.
              session_destroy();
              Page::showMessage(3, "Sesión inactiva, vuelva a iniciar sesión", "acceder.php");
              exit();
          } else {
              //Activamos sesion tiempo.
              $_SESSION['tiempo'] = time();
          }
      }

      $cliente = new Cliente;
      $cliente->setId($_SESSION['id_cliente']);
      $cliente->setId($_SESSION['id_cliente']);
      if ($cliente->ReadUsuario()) {
          $ingreso   = new DateTime($cliente->getFechaRegistro());
          $val       = date("Y-m-d");
          $valor     = new DateTime($val);
          $intervalo = $valor->diff($ingreso);
          if ($intervalo->format('%a') >= 2) {
              Page::showMessage(3, "Debe cambiar contraseña", "cambio_contrasena.php");
          } else {
        print("
            <header>
              <div class='navbar-fixed'>
                <nav>
                <div class='nav-wrapper'>
              <a href='index.php'><span>CKT</span> <span>ES</span></a>
              <ul class='right'>
              <li><a href='reservacion.php'><span><i class='fas fa-book'></i></span></a></li>
              <li><a class='dropdown-button' data-activates='dropdown'><span><i class='fas fa-user'></i><span/><span class='corre'>$_SESSION[correo_electronico]</span></a></li>
               <ul id='dropdown' class='dropdown-content'>
                      <li><a href='../tienda/perfil.php'><i class='material-icons'>face</i>Editar perfil</a></li>
                      <li><a href='../tienda/contrasena.php'><i class='material-icons'>lock</i>Cambiar clave</a></li>
                      <li><a href='../tienda/logout.php'><i class='material-icons'>clear</i>Salir</a></li>
                    </ul>
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
                    <li class='col s12'><a class='container' href='../tienda/categorias.php'>Tienda</a></li>
                    <li class='col s12'><a class='container' href='nosotros.php'>Nosotros</a></li>
                    <li class='col s12'><a class='container' href='pcb.php'>PCB</a></li>
                    <li class='col s12'><a class='container' href='categoria.php'>Importacion</a></li>
                    <li class='col s12'><a class='container' href='desarrollo.php'>Desarrollo</a></li>
                  </ul>
                </div>
              </div>
                    
                </nav>
              </div>
            </header>
            <main>
    ");
  }
}else{ //Si el id de la sesion no coincide con el de la base no deja iniciar sesion
  print("
    <header>
      <div class='navbar-fixed'>  
        <nav>
        <!--Navbar Color gris azulado-->
          <div class='nav-wrapper  blue-grey darken-4'>
          <img class='brand-logo' src='../../web/img/mipintura.png'>
          </div>
        </nav>
      </div>
    </header>
    <main class=''>
    ");
    $correo = new Correo;
    $cliente->unsetIp($_SESSION['correo_electronico']);  //Vuelve nulo el campo del id de la base
    session_destroy();
    self::showMessage(3, "¡Esta cuenta esta iniciada en otro terminal!", "acceder.php");
    self::templateFooter();
    exit;
}
}else {
    print("
    <header>
       <div class='navbar-fixed'>
                <nav>
                <div class='nav-wrapper'>
              <a href='index.php'><span>CKT</span> <span>ES</span></a>
              <ul class='right'>
              <li><a href='../tienda/acceder.php' class='icono_ini'><span><i class='fas fa-user'></i></span></a></li>
               
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
                  <li class='col s12'><a href='../tienda/categorias.php'>Tienda</a></li>
                  <li class='col s12'><a href='nosotros.php'>Nosotros</a></li>
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
      <footer id='colorfooter' class='page-footer indigo darken-4'>
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
          <div class='row'>
          <p class='text-muted'><b>Ganadores de Edici&oacute;n Innova emprende 2016</b></p><br>
              <div class='col s9 offset-s2 m6 l12'>
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
              <script src='../web/js/jquery-3.3.1.min.js'></script>
              <script src='../web/js/portal.js'></script>
              <script src='../web/js/materialize.min.js'></script>
              <script src='../web/js/fontawesom.js'></script>
              <script src='../web/js/stats.min.js'></script>
              <script src='../web/js/index.js'></script>
        </body>
        </html>
		");
	}

}

?>