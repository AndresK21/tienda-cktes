<?php
require_once("../app/models/database.class.php");
require_once("../app/helpers/validator.class.php");
require_once("../app/helpers/component.class.php");
require_once("../app/models/cliente.class.php");
require_once("../app/models/pedido.class.php");
class Page extends Component{ 
	public static function templateHeader($title){
    session_name("cktes_tienda");
		session_start();
		ini_set("date.timezone","America/El_Salvador"); 
		print("
			
    <!DOCTYPE html>
    <html lang='es'>
    <head>
      <meta charset='utf-8'>
      <title>$title</title>
      <!--Import Google Icon Font-->
      <link href='../web/css/icon.css' rel='stylesheet'> 
      <link rel='stylesheet' href='../web/css/normalize.min.css'>
      <link rel='stylesheet' href='../web/css/style_tienda.css'>
      <script src='../web/js/sweetalert.min.js'></script>
      <!--Import materialize.css-->
      <link type='text/css' rel='stylesheet' href='../web/css/materialize.min.css'  media='screen,projection'/>
      <!--Let browser know website is optimized for mobile-->
      <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    </head>
    <body>
      ");
      if(isset($_SESSION['id_cliente'])){
        if (isset($_SESSION['tiempo'])) {
                
          //Tiempo en segundos para dar vida a la sesión.
          $inactivo = 4000; //5min en este caso.
          
          //Calculamos tiempo de vida inactivo.
          $vida_sesion = time() - $_SESSION['tiempo'];
          
          //Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
          if ($vida_sesion > $inactivo) {
              //Destruimos sesión.
              session_destroy();
              Page::showMessage(3, "Sesión inactiva, vuelva a iniciar sesión", "../tienda/acceder.php");
              exit();
          } else {
              //Activamos sesion tiempo.
              $_SESSION['tiempo'] = time();
          }
      }

      $cliente = new Cliente;
      $cliente->setId($_SESSION['id_cliente']);
      $cliente->setId($_SESSION['id_cliente']);
      $pedido = new Pedido;
      $pedido->setId_cliente($_SESSION['id_cliente']);
      $nuevope = $pedido->getPedidosNuevo();
      if ($cliente->ReadUsuario()) {
          $ingreso   = new DateTime($cliente->getFechaRegistro());
          $val       = date("Y-m-d");
          $valor     = new DateTime($val);
          $intervalo = $valor->diff($ingreso);
          if ($intervalo->format('%a') >= 2) {
              Page::showMessage(3, "Debe cambiar contraseña", "../tienda/cambio_contrasena.php");
          } else {
        print("
        <header>
        <div class='navbar-fixed'>
                <nav>
                <!--Navbar Color Azul-->
                <div class='nav-wrapper  cktes'>
                    <img class='brand-logo posLogo' src='../web/img/logo_1.png'>
                    <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
                    <ul class='center hide-on-med-and-down'>
                        <li><a href='#' data-activates='slide-out' class='sidenav-trigger show-on-large leftside'><i class='material-icons'>apps</i></a></li>
                        <ul class='right hide-on-med-and-down'>
                        <li><a href='pedido.php'><i class='material-icons left'>shopping_cart</i><span class='new badge colorNa'>".$nuevope[0]['Pedidos']."</span></a></li>    
                        <li> <a href='#' data-activates='slide-out2' class='sidenav-trigger show-on-large rightside'><i class='material-icons'>verified_user</i></a></li>
                        </ul>
                </div>
            </nav>
        </div>
        <ul id='mobile-demo' class='side-nav colorside' >
        <li>
        <div class='user-view'>

            <img class='movLogo' src='../web/img/logo_2.png'>
        </div>
    </li>
        <li><a href='index.php'>Portal</a></li>
        <li><a href='nosotros.php'>Nosotros</a></li>
        <li><a href='pcb.php'>PCB</a></li>
        <li><a href='pedido.php'>Mis pedidos<span class='new badge colorNa'>". $nuevope[0]['Pedidos']."</span></a></li> 
        <li><a href='categoria.php'>Importaciones</a></li>
        <li><a href='reservacion.php'>Mis reservaciones</a></li>
        <li><a href='desarrollo.php'>Desarrollo</a></li>
        <li><a href='../tienda/categorias.php'>Tienda</a></li>
         <li class='no-padding'>
    <ul class='collapsible collapsible-accordion'>
      <li>
        <a class='collapsible-header'>Cuenta<i class='material-icons'>arrow_drop_down</i></a>
        <div class='collapsible-body colorside'>
          <ul>
            <li><a href='../tienda/perfil.php'>Editar perfil</a></li>
            <li><a href='../tienda/contrasena.php'>Cambiar contraseña</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </li>
  <li><a href='../tienda/logout.php'><i class='material-icons'>close</i>Cerrar sesión</a></li>
 
      </ul>


        <ul id='slide-out2' class='side-nav  colorside'>
            <li>
                <div class='user-view'>
                    <div class='background'>
                        <img src='../web/img/fondo.png'>
                    </div>
                    <a href='#user'><img class='circle' src='../web/img/clientes/$_SESSION[imagen]'></a>
                    <a href='#name'><span class='white-text name'> $_SESSION[nombres2] $_SESSION[apellidos2]</span></a>
                    <a href='#email'><span class='white-text email'>$_SESSION[correo_electronico]</span></a>
                </div>
            </li>
            <li><a href='../tienda/perfil.php'><i class='material-icons'>edit</i><b>Editar perfil</b></a></li>
            <li><a href='../tienda/contrasena.php'><i class='material-icons'>enhanced_encryption</i><b> Cambiar contraseña</b></a></li>
            <li> <div class='divider'></div></li>
            <li><a href='../tienda/logout.php'><i class='material-icons'>close</i><b> Cerrar sesión</b></a></li>
            
        </ul>
    
        <ul id='slide-out' class='side-nav colorside'>
            <li>
                <div class='user-view'>
        
                    <img class='movLogo' src='../web/img/logo_2.png'>
                </div>
            </li>
        
            <li><a class='center' href='index.php'><b>I N I C I O</b></a></li>
            <li>
                <div class='divider'></div>
            </li>
            <li><a class='center' href='nosotros.php'><b>N O S O T R O S </b></a></li>
            <li>
                <div class='divider'></div>
            </li>
            <li><a class='center' href='pcb.php'><b>P C B </b></a></li>
            <li>
                <div class='divider'></div>
            </li>
            <li><a class='center' href='categoria.php'><b>I M P O R T A C I O N E S </b></a></li>
            <li>
            <div class='divider'></div>
            </li>
            <li><a class='center' href='reservacion.php'><b>R E S E R V A C I O N </b></a></li>
            <li>
                <div class='divider'></div>
            </li>
            <li><a class='center' href='desarrollo.php'><b>D E S A R R O L L O </b></a></li>
            <li>
                <div class='divider'></div>
            </li>
            <li><a class='center' href='../tienda/categorias.php'><b>T I E N D A</b></a></li>
            
        </ul>
        

    </header>
    
    <main>




    ");
  }
}else{ //Si el id de la sesion no coincide con el de la base no deja iniciar sesion
  print("
  <header>
  <div class='navbar-fixed'>
  <nav>
      <!--Navbar Color Azul-->
      <div class='nav-wrapper  cktes'>
          <img class='brand-logo left' src='../web/img/logo_1.png'>
              </ul>
      </div>
  </nav>
</div>
  </header>
  <main class=''>
    ");
    $correo = new Correo;
    $cliente->unsetIp($_SESSION['correo_electronico']);  //Vuelve nulo el campo del id de la base
    session_destroy();
    self::showMessage(3, "¡Esta cuenta esta iniciada en otro terminal!", "index.php");
    self::templateFooter();
    exit;
}
}else {
    print("
    <header>
    <div class='navbar-fixed'>
    <nav>
        <!--Navbar Color Azul-->
        <div class='nav-wrapper  cktes'>
            <img class='brand-logo posLogo' src='../web/img/logo_1.png'>
            <a href='#' data-activates='mobile-demo' class='button-collapse'><i class='material-icons'>menu</i></a>
            <ul class='center hide-on-med-and-down'>                    
            <li><a href='#' data-activates='slide-out' class='sidenav-trigger show-on-large leftside'><i class='material-icons'>apps</i></a></li> 
            </ul>
        </div>                      
    </nav>
    </div>
    <ul id='mobile-demo' class='side-nav colorside' >
    <li>
    <div class='user-view'>

    <img class='movLogo' src='../web/img/logo_2.png'>
    </div>
</li>
    <li><a href='index.php'>Inicio</a></li>
    <li><a href='nosotros.php'>Nosotros</a></li>
    <li><a href='../tienda/acceder.php'>Tienda</a></li>   
</li>
  </ul>
<ul id='slide-out' class='side-nav colorside' >
<li><div class='user-view'>

<img class='movLogo' src='../web/img/logo_2.png'>
</div></li>

<li><a class='center' href='index.php'><b> I N I C I O </b></a></li>
<li><div class='divider'></div></li>
<li><a class='center' href='nosotros.php'><b>N O S O T R O S</b></a></li>
<li><div class='divider'></div></li>
<li><a class='center' href='../tienda/acceder.php'><b>T I E N D A </b></a></li>

</ul>
</header>                                        
<main >
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
              
              <script src='../web/js/portal.js'></script>
              <!--Import jQuery before materialize.js-->
              <script type='text/javascript' src='../web/js/jquery-3.2.1.min.js'></script>
              <script type='text/javascript' src='../web/js/main.js'></script>
              <script type='text/javascript' src='../web/js/ini.js'></script>
              <script type='text/javascript' src='../web/js/materialize.min.js'></script>
              <script src='../web/js/index.js'></script>
        </body>
        </html>
		");
	}

}

?>