<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
		session_start();
		ini_set("date.timezone","America/El_Salvador");
		print("
			<!DOCTYPE html>
			<html lang='es'>
			<head>
				<meta charset='utf-8'>
                <title>Dashboard - $title</title>
                <meta charset='utf-8'>
                <!--Import Google Icon Font-->
                <link href='../../web/css/icon.css' rel='stylesheet'>
                <!--Import materialize.css-->
                <link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'  media='screen,projection'/>
                <!--Let browser know website is optimized for mobile-->
                <script type='text/javascript' src='../../web/js/Chart.bundle.min.js'></script>
                <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
			<body>
		");
		if(isset($_SESSION['id_empleado']) && ($_SESSION['id_permiso']) == 1){
			print("
				<header>
                    <div class='navbar-fixed'>  
                    <nav>
                    <!--Navbar Color gris-->
                        <div class='nav-wrapper grey darken-3'>
                            <img class='brand-logo' src='../../web/img/logo_1.png' />
                            <a href='#' data-activates='slide-out2' class='button-collapse'><i class='material-icons'>menu</i></a>
                        </div>
                    </nav>
                </div>
                
                
                <!--Vista movil-->
                <ul id='slide-out' class='side-nav fixed hide-on-med-and-down'>
                    <li><div class='user-view'>
                    <div class='background'>
                        <img src='../../web/img/1.jpg'>
                    </div>
                    <a href='../cuenta/profile.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen]'></a>
                    <a href='../cuenta/profile.php'><span class='white-text name'>$_SESSION[nombres] $_SESSION[apellidos]</span></a>
                    <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico]</span></a>
                    </div></li>
                    <li><a href='../cuenta/index.php'>Dashboard</a></li>
                    <li><a href='../usuarios/index.php'>Usuarios</a></li>
                    <li><a href='../productos/index.php'>Productos</a></li>
                    <li class='no-padding'>
                        <ul class='collapsible collapsible-accordion'>
                            <li>
                                <a class='collapsible-header'>Servicios<i class='material-icons'>arrow_drop_down</i></a>
                                <div class='collapsible-body'>
                                    <ul>
                                        <li><a href='../manufacturacion/index.php'>Manufacturaci&oacute;n</a></li>
                                        <li class='divider'></li>
                                        <li><a href='../desarrollo/index.php'>Desarrollo de proyectos</a></li>
                                        <li class='divider'></li>
                                        <li><a href='../importacion/index.php'>Importaci&oacute;n de productos</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href='../base.php'>Base de datos</a></li>
                    <li class='no-padding'>
                        <ul class='collapsible collapsible-accordion'>
                            <li>
                                <a class='collapsible-header'>Cuenta<i class='material-icons'>arrow_drop_down</i></a>
                                <div class='collapsible-body'>
                                    <ul>
                                        <li><a href='../cuenta/password.php'>Cambiar contraseña</a></li>
                                        <li class='divider'></li>
                                        <li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                
                        <ul id='slide-out2' class='side-nav'>
                            <li><div class='user-view'>
                            <div class='background'>
                                <img src='../../web/img/1.jpg'>
                            </div>
                            <a href='editar_perfil.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen]'></a>
                            <a href='editar_perfil.php'><span class='white-text name'>$_SESSION[nombres] $_SESSION[apellidos]</span></a>
                            <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico]</span></a>
                            </div></li>
                            <li><a href='../cuenta/index.php'>Dashboard</a></li>
                            <li><a href='../usuarios/index.php'>Usuarios</a></li>
                            <li><a href='../productos/index.php'>Productos</a></li>
                            <li class='no-padding'>
                                <ul class='collapsible collapsible-accordion'>
                                    <li>
                                        <a class='collapsible-header'>Servicios<i class='material-icons'>arrow_drop_down</i></a>
                                        <div class='collapsible-body'>
                                            <ul>
                                                <li><a href='../manufacturacion/index.php'>Manufacturaci&oacute;n</a></li>
                                                <li class='divider'></li>
                                                <li><a href='../desarrollo/index.php'>Desarrollo de proyectos</a></li>
                                                <li class='divider'></li>
                                                <li><a href='../importacion/index.php'>Importaci&oacute;n de productos</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li><a href='../base.php'>Base de datos</a></li>
                            <li class='no-padding'>
                                <ul class='collapsible collapsible-accordion'>
                                    <li>
                                        <a class='collapsible-header'>Cuenta<i class='material-icons'>arrow_drop_down</i></a>
                                        <div class='collapsible-body'>
                                            <ul>
                                                <li><a href='../cuenta/password.php'>Cambiar contraseña</a></li>
                                                <li class='divider'></li>
                                                <li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                </header>
                
				<main class=''>
					
			");
		}else if(isset($_SESSION['id_empleado']) && ($_SESSION['id_permiso']) == 2){
			print("
                <header>
                <div class='navbar-fixed'>  
                <nav>
                <!--Navbar Color gris-->
                    <div class='nav-wrapper grey darken-3'>
                        <img class='brand-logo' src='../../web/img/logo_1.png' />
                        <a href='#' data-activates='slide-out2' class='button-collapse'><i class='material-icons'>menu</i></a>
                    </div>
                </nav>
            </div>
            
            
            <!--Vista movil-->
            <ul id='slide-out' class='side-nav fixed hide-on-med-and-down'>
                <li><div class='user-view'>
                <div class='background'>
                    <img src='../../web/img/1.jpg'>
                </div>
                <a href='../cuenta/profile.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen]'></a>
                <a href='../cuenta/profile.php'><span class='white-text name'>$_SESSION[nombres] $_SESSION[apellidos]</span></a>
                <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico]</span></a>
                </div></li>
                <li><a href='../cuenta/index.php'>Dashboard</a></li>
                <li><a href='../productos/index.php'>Productos</a></li>
                <li class='no-padding'>
                    <ul class='collapsible collapsible-accordion'>
                        <li>
                            <a class='collapsible-header'>Servicios<i class='material-icons'>arrow_drop_down</i></a>
                            <div class='collapsible-body'>
                                <ul>
                                    <li><a href='../manufacturacion/index.php'>Manufacturaci&oacute;n</a></li>
                                    <li class='divider'></li>
                                    <li><a href='../desarrollo/index.php'>Desarrollo de proyectos</a></li>
                                    <li class='divider'></li>
                                    <li><a href='../importacion/index.php'>Importaci&oacute;n de productos</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                <li><a href='../base.php'>Base de datos</a></li>
                <li class='no-padding'>
                    <ul class='collapsible collapsible-accordion'>
                        <li>
                            <a class='collapsible-header'>Cuenta<i class='material-icons'>arrow_drop_down</i></a>
                            <div class='collapsible-body'>
                                <ul>
                                    <li><a href='../cuenta/password.php'>Cambiar contraseña</a></li>
                                    <li class='divider'></li>
                                    <li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            
            
                    <ul id='slide-out2' class='side-nav'>
                        <li><div class='user-view'>
                        <div class='background'>
                            <img src='../../web/img/1.jpg'>
                        </div>
                        <a href='editar_perfil.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen]'></a>
                        <a href='editar_perfil.php'><span class='white-text name'>$_SESSION[nombres] $_SESSION[apellidos]</span></a>
                        <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico]</span></a>
                        </div></li>
                        <li><a href='../cuenta/index.php'>Dashboard</a></li>
                        <li><a href='../productos/index.php'>Productos</a></li>
                        <li class='no-padding'>
                            <ul class='collapsible collapsible-accordion'>
                                <li>
                                    <a class='collapsible-header'>Servicios<i class='material-icons'>arrow_drop_down</i></a>
                                    <div class='collapsible-body'>
                                        <ul>
                                            <li><a href='../manufacturacion/index.php'>Manufacturaci&oacute;n</a></li>
                                            <li class='divider'></li>
                                            <li><a href='../desarrollo/index.php'>Desarrollo de proyectos</a></li>
                                            <li class='divider'></li>
                                            <li><a href='../importacion/index.php'>Importaci&oacute;n de productos</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><a href='../base.php'>Base de datos</a></li>
                        <li class='no-padding'>
                            <ul class='collapsible collapsible-accordion'>
                                <li>
                                    <a class='collapsible-header'>Cuenta<i class='material-icons'>arrow_drop_down</i></a>
                                    <div class='collapsible-body'>
                                        <ul>
                                            <li><a href='../cuenta/password.php'>Cambiar contraseña</a></li>
                                            <li class='divider'></li>
                                            <li><a href='../cuenta/logout.php'>Cerrar sesi&oacute;n</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
            </header>

				<main class=''>
					
			");
		}else{
			print("
			<header>
				<div class='navbar-fixed'>  
					<nav>
					<!--Navbar Color gris-->
						<div class='nav-wrapper grey darken-3'>
						<img class='brand-logo' src='../../web/img/logo_2.png' >
						</div>
					</nav>
				</div>
			</header>
				<main class=''>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../cuenta/login.php");
				self::templateFooter();
				exit;
			}else{
				print("");
			}
		}
	}

	public static function templateFooter(){
		print("
				</main>
				<footer class='page-footer grey darken-3'>
                    <div class='container'>
                        <div class='row'>
                        <div class='col l6 s12'>
                            <h5 class='white-text center-align'>Comun&iacute;cate con nosotros</h5>
                                <p class='grey-text text-lighten-4 center-align'>Ll&aacute;manos</p>
                                <p class='grey-text text-lighten-4 center-align'>(503) 2245-6378</p>
                        </div>
                        <div class='col l4 offset-l2 s12'>
                            <h5 class='white-text'>Correo electr&oacute;nico</h5>
                            <ul>
                                <li><i class='small  material-icons'>email</i><a class='grey-text text-lighten-3 valign-wrapper'  href='https://mail.google.com/mail/u/0/#inbox?compose=new' target='_blanck'> desarrolladores@gmail.com</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class='footer-copyright'>
                        <div class='container'>
                            © 2018 Copyright DDS
                        </div>
                    </div>
                </footer>
				<!--Import jQuery before materialize.js-->
				<script type='text/javascript' src='../../web/js/jquery-3.3.1.min.js'></script>
        		<script type='text/javascript' src='../../web/js/main.js'></script>
        		<script type='text/javascript' src='../../web/js/ini.js'></script>
				<script type='text/javascript' src='../../web/js/materialize.min.js'></script>
			</body>
			</html>
		");
	}
}
?>