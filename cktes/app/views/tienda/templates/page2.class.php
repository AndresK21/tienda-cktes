<?php
require_once("../app/models/database.class.php");
require_once("../app/helpers/validator.class.php");
require_once("../app/helpers/component.class.php");
class Page extends Component{
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
	public static function templateFooter(){
    print("	
    </main>
    <footer id='colorfooter' class='page-footer indigo darken-4'>
    <div class='container'>
      <div class='row'>
      <p class='text-muted'><b>CKT-ES, SA. de CV.</b></p><br>
      <p class='text-muted'><b><i>“Circuitos Profesionales con la garantia que nadie ofrece”</i></b></p><br>
      <p class='text-muted'><b>“SAN SALVADOR, EL SALVADOR, TEL. 2245-6378 ; WHATSAPP. 7565-7321”</b></p><br>
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

}
?>