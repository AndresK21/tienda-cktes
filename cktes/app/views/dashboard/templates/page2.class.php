<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
class Page extends Component{
	public static function templateHeader($title){
        session_name("cktes_dashboard");
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
		if(isset($_SESSION['id_empleado_d']) && ($_SESSION['id_permiso_d']) == 1){
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
                    <a href='../cuenta/profile.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen_d]'></a>
                    <a href='../cuenta/profile.php'><span class='white-text name'>$_SESSION[nombres2_d] $_SESSION[apellidos2_d]</span></a>
                    <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico2_d]</span></a>
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
                            <a href='editar_perfil.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen_d]'></a>
                            <a href='editar_perfil.php'><span class='white-text name'>$_SESSION[nombres2_d] $_SESSION[apellidos2_d]</span></a>
                            <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico2_d]</span></a>
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
		}else if(isset($_SESSION['id_empleado_d']) && ($_SESSION['id_permiso_d']) == 2){
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
                <a href='../cuenta/profile.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen_d]'></a>
                <a href='../cuenta/profile.php'><span class='white-text name'>$_SESSION[nombres_d] $_SESSION[apellidos_d]</span></a>
                <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico_d]</span></a>
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
                        <a href='editar_perfil.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen_d]'></a>
                        <a href='editar_perfil.php'><span class='white-text name'>$_SESSION[nombres_d] $_SESSION[apellidos_d]</span></a>
                        <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico_d]</span></a>
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
						<img class='brand-logo' src='../../web/img/logo_1.png' >
						</div>
					</nav>
				</div>
			</header>
				<main class=''>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php" && $filename != "correo.php" && $filename != "autenticacion.php"){
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
				<footer class='page-footer cktes grey darken-3'>
					<div class='container'>
						<div class='row'>
							<p class=' center text-muted'>CKT-ES, S.A. DE C.V es un proyecto impulsado por INSERT y apoyado por el MINEC a través de la DICA y FONDEPRO</p>
							<div class='col s9 offset-s2 m6 l3'>
								<img class='responsive-img' src='../../web/img/footer/insert.png'>
							</div>
							<div class='col s9 offset-s2 m6 l3'>
								<img class='responsive-img' src='../../web/img/footer/gobierno.png'>
							</div>
							<div class='col s9 offset-s2 m6 l3'>
								<img class='responsive-img' src='../../web/img/footer/fondepro.png'>
							</div>
							<div class='col s9 offset-s2 m6 l3'>
								<img class='responsive-img' src='../../web/img/footer/dca.png'>
							</div>
						</div>
						<p class='text-muted'><b>Ganadores de Edici&oacute;n Innova emprende 2016</b></p><br>
						<div class='row'>
							<div class='col s9 offset-s2 m6 l3'>
								<img class='responsive-img' src='../../web/img/footer/innova.png'>
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