<?php
require_once("../../app/models/database.class.php");
require_once("../../app/helpers/validator.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/empleado.class.php");
require_once("../../app/controllers/dashboard/empleados/correo_controller2.php");

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
                <link href='../../web/css/dashboard.css' rel='stylesheet'>
                <!--Import materialize.css-->
                <link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'  media='screen,projection'/>
                <!--Let browser know website is optimized for mobile-->
                <script type='text/javascript' src='../../web/js/Chart.bundle.min.js'></script>
                <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
			</head>
            <body>
		");
		if(isset($_SESSION['id_empleado_d'])){
            $empleado = new Empleado;

            $id = session_id();

			if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
				if($empleado->readEmpleado()){					
					if($id == $empleado->getIp()){ //Si el id de la sesion es igual al de la base continua con lo demas

						$fechaGuardada = $_SESSION["ultimoAcceso_d"]; 
						$ahora = time();  
						$tiempo_transcurrido = $ahora-$fechaGuardada;   

						//comparamos el tiempo transcurrido  
						if($tiempo_transcurrido >= 600) {  
							//si pasaron 5 minutos o más  
							$empleado->unsetIp($_SESSION['correo_electronico2_d']);
							session_destroy(); // destruyo la sesión
							print("
								<header>
									<div class='navbar-fixed'>  
										<nav>
										<!--Navbar Color gris azulado-->
											<div class='nav-wrapper  cktes'>
											<img class='brand-logo' src='../../web/img/logo_1.png'>
											</div>
										</nav>
									</div>
								</header>
									<main class=''>
								");
							Page::showMessage(3, "Se ha cerrado la sesión por tiempo de inactividad", "index.php"); //envío al usuario a la pag. de autenticación  
							//sino, actualizo la fecha de la sesión  
						}else{  
							$_SESSION["ultimoAcceso_d"] = $ahora;
							
							$hoy = date('Y-m-d h:i:s');
							$hoy2 = new DateTime($hoy);
							if($empleado->setId_empleado($_SESSION['id_empleado_d'])){//Establece el id empleado para obtener los registros del empleado
								if($empleado->readEmpleado()){
									$fecha1 = new DateTime($empleado->getFecha());
									$tiempo = $fecha1->diff($hoy2);
									if($tiempo->m >= 3){
										print("
											<header>
												<div class='navbar-fixed'>  
													<nav>
													<!--Navbar Color gris azulado-->
														<div class='nav-wrapper   cktes'>
														<img class='brand-logo' src='../../web/img/logo_1.png'>
														</div>
													</nav>
												</div>
											</header>
												<main class=''>
											");
											self::showMessage(3, "¡Debe cambiar su contraseña!", "../cuenta/password2.php");
											self::templateFooter();
											exit;						
									}else{
										print("
                                            <header>
                                                <div class='navbar-fixed'>  
                                                <nav>
                                                <!--Navbar Color gris-->
                                                    <div class='nav-wrapper  cktes'>
                                                        <img class='brand-logo' src='../../web/img/logo_1.png' />
                                                        <a href='#' data-activates='slide-out2' class='button-collapse'><i class='material-icons'>menu</i></a>
                                                    </div>
                                                </nav>
                                            </div>
                                            
                                            
                                            <!--Vista movil-->
                                            <ul id='slide-out' class='side-nav fixed hide-on-med-and-down'>
                                                <li><div class='user-view'>
                                                <div class='background'>
                                                    <img src='../../web/img/fondo2.png'>
                                                </div>
                                                <a href='../cuenta/profile.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen_d]'></a>
                                                <a href='../cuenta/profile.php'><span class='white-text name'>$_SESSION[nombres2_d] $_SESSION[apellidos2_d]</span></a>
                                                <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico2_d]</span></a>
                                                </div></li>"
                                        );

                                                switch($_SESSION['dashboard']){
                                                    case 1:
                                                        print("");
                                                        break;
                                                    case 2:
                                                        print("<li><a href='../cuenta/index.php'>Dashboard</a></li>");
                                                        break;
                                                }
                                                switch($_SESSION['usuarios']){
                                                    case 1:
                                                        print("");
                                                        break;
                                                    case 2:
                                                        print("<li><a href='../usuarios/index.php'>Usuarios</a></li>");
                                                        break;
                                                }
                                                switch($_SESSION['clientes']){
                                                    case 1:
                                                        print("");
                                                        break;
                                                    case 2:
                                                        print("<li><a href='../clientes/index.php'>Clientes</a></li>");
                                                        break;
                                                }
                                                switch($_SESSION['productos']){
                                                    case 1:
                                                        print("");
                                                        break;
                                                    case 2:
                                                        print("<li><a href='../productos/index.php'>Productos</a></li>");
                                                        break;
                                                }
                                                switch($_SESSION['ordenes']){
                                                    case 1:
                                                        print("");
                                                        break;
                                                    case 2:
                                                        print("<li><a href='../ordenes/index.php'>Ordenes</a></li>");
                                                        break;
                                                }

                                    if($_SESSION['manufacturacion'] == 1 && $_SESSION['desarrollo'] == 1 && $_SESSION['importacion'] == 1){
                                        print("");
                                    }else{

                                        print("
                                                        
                                                        <li class='no-padding'>
                                                            <ul class='collapsible collapsible-accordion'>
                                                                <li>
                                                                    <a class='collapsible-header'>Servicios<i class='material-icons'>arrow_drop_down</i></a>
                                                                    <div class='collapsible-body'>
                                                                        <ul>
                                        ");

                                                                            switch($_SESSION['manufacturacion']){
                                                                                case 1:
                                                                                    print("");
                                                                                    break;
                                                                                case 2:
                                                                                    print("<li><a href='../manufacturacion/index.php'>Manufacturaci&oacute;n</a></li>
                                                                                        <li class='divider'></li>");
                                                                                    break;
                                                                            }
                                                                            switch($_SESSION['desarrollo']){
                                                                                case 1:
                                                                                    print("");
                                                                                    break;
                                                                                case 2:
                                                                                    print("<li><a href='../desarrollo/index.php'>Desarrollo de proyectos</a></li>
                                                                                        <li class='divider'></li>");
                                                                                    break;
                                                                            }
                                                                            switch($_SESSION['importacion']){
                                                                                case 1:
                                                                                    print("");
                                                                                    break;
                                                                                case 2:
                                                                                    print("<li><a href='../importacion/index.php'>Importaci&oacute;n de productos</a></li>");
                                                                                    break;
                                                                            }


                                        print("                      
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                        ");

                                    }


                                        print("                                        
                                                <!--<li><a href='../base/base.php'>Base de datos</a></li>-->
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
                                                        <a href='../cuenta/profile.php'><img class='circle' src='../../web/img/empleados/$_SESSION[imagen_d]'></a>
                                                        <a href='../cuenta/profile.php'><span class='white-text name'>$_SESSION[nombres2_d] $_SESSION[apellidos2_d]</span></a>
                                                        <a href='#!email'><span class='white-text email'>$_SESSION[correo_electronico2_d]</span></a>
                                                        </div></li>
                                        ");

                                                        switch($_SESSION['dashboard']){
                                                            case 1:
                                                                print("");
                                                                break;
                                                            case 2:
                                                                print("<li><a href='../cuenta/index.php'>Dashboard</a></li>");
                                                                break;
                                                        }
                                                        switch($_SESSION['usuarios']){
                                                            case 1:
                                                                print("");
                                                                break;
                                                            case 2:
                                                                print("<li><a href='../usuarios/index.php'>Usuarios</a></li>");
                                                                break;
                                                        }
                                                        switch($_SESSION['clientes']){
                                                            case 1:
                                                                print("");
                                                                break;
                                                            case 2:
                                                                print("<li><a href='../clientes/index.php'>Clientes</a></li>");
                                                                break;
                                                        }
                                                        switch($_SESSION['productos']){
                                                            case 1:
                                                                print("");
                                                                break;
                                                            case 2:
                                                                print("<li><a href='../productos/index.php'>Productos</a></li>");
                                                                break;
                                                        }
                                                        switch($_SESSION['ordenes']){
                                                            case 1:
                                                                print("");
                                                                break;
                                                            case 2:
                                                                print("<li><a href='../ordenes/index.php'>Ordenes</a></li>");
                                                                break;
                                                        }

                                    if($_SESSION['manufacturacion'] == 1 && $_SESSION['desarrollo'] == 1 && $_SESSION['importacion'] == 1){
                                        print("");
                                    }else{

                                        print("
                                                        
                                                        <li class='no-padding'>
                                                            <ul class='collapsible collapsible-accordion'>
                                                                <li>
                                                                    <a class='collapsible-header'>Servicios<i class='material-icons'>arrow_drop_down</i></a>
                                                                    <div class='collapsible-body'>
                                                                        <ul>
                                        ");

                                                                            switch($_SESSION['manufacturacion']){
                                                                                case 1:
                                                                                    print("");
                                                                                    break;
                                                                                case 2:
                                                                                    print("<li><a href='../manufacturacion/index.php'>Manufacturaci&oacute;n</a></li>
                                                                                        <li class='divider'></li>");
                                                                                    break;
                                                                            }
                                                                            switch($_SESSION['desarrollo']){
                                                                                case 1:
                                                                                    print("");
                                                                                    break;
                                                                                case 2:
                                                                                    print("<li><a href='../desarrollo/index.php'>Desarrollo de proyectos</a></li>
                                                                                        <li class='divider'></li>");
                                                                                    break;
                                                                            }
                                                                            switch($_SESSION['importacion']){
                                                                                case 1:
                                                                                    print("");
                                                                                    break;
                                                                                case 2:
                                                                                    print("<li><a href='../importacion/index.php'>Importaci&oacute;n de productos</a></li>");
                                                                                    break;
                                                                            }


                                        print("                      
                                                                        </ul>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </li>
                                        ");

                                    }

                                        print("
                                                        <!--<li><a href='../base/base.php'>Base de datos</a></li>-->
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
                                        
                                        
									}
								}
							}
						}
					}else{ //Si el id de la sesion no coincide con el de la base no deja iniciar sesion
						print("
							<header>
								<div class='navbar-fixed'>  
									<nav>
									<!--Navbar Color gris azulado-->
										<div class='nav-wrapper  cktes'>
										<img class='brand-logo' src='../../web/img/mipintura.png'>
										</div>
									</nav>
								</div>
							</header>
                                <main class=''>
                            ");
                        $correo = new Correo;
                        $empleado->unsetIp($_SESSION['correo_electronico2_d']);  //Vuelve nulo el campo del id de la base
                        session_destroy();
                        self::showMessage(3, "¡Esta cuenta esta iniciada en otro terminal!", "../cuenta/login.php");
                        self::templateFooter();
                        exit;
                        
					}
                }
			}


		}else{
			print("
			<header>
				<div class='navbar-fixed'>  
					<nav>
					<!--Navbar Color gris-->
						<div class='nav-wrapper grey darken-3'>
						<img class='brand-logo' src='../../web/img/logo_1.png' />
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
				<footer class='page-footer cktes hide-on-large-only'>
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