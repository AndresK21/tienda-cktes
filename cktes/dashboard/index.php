<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
            include('../app/views/referencias.php');
        ?>
        <title>Dashboard-Iniciar sesi&oacute;n</title>
    </head>
    <body class="imagen_fondo">

        <header>
            <div class="navbar-fixed">  
                <nav>
                <!--Navbar Color gris azulado-->
                    <div class="nav-wrapper grey darken-3">
                    <a class="brand-logo">Logo</a>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            
        <?php
echo $_SERVER['HTTP_USER_AGENT'];
?> 

            <!--Formulario de inicio de sesion-->
            <div class="container">
                <div class="row">
                    <div class="col s12 m6 l6 offset-l3 offset-m3">
                        <div class="card grey lighten-4">
                            <div class="card-content">
                                <span class="card-title"><h4>Iniciar sesi&oacute;n</h4></span>
                                <div class="center-align">
                                    <div class="row">
                                        <img class="responsive-img imagen_sesion circle" src="../web/img/paralaxinicio2.jpg">
                                        <div class="input-field col s12">
                                            <input id="usuario" type="text" class="validate">
                                            <label class="black-text" for="usuario">Correo electr&oacute;nico</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="contrasena" type="text" class="validate">
                                            <label class="black-text" for="contrasena">Contrase&ntilde;a</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="left-align">
                                    <a class="modal-trigger" href="#modal_contra">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                                </div>
                                <div class="white-text">.</div>

                                <div class="right-align">
                                    <a href="dashboard.php" class="btn grey darken-3">Iniciar sesi&oacute;n</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal de editar tipo de producto -->
            <div id="modal_contra" class="modal">
                <div class="modal-content">
                    <h4>Recuperar contrase&ntilde;a</h4>
                    <div class="card horizontal">
                        <div class="card-stacked">
                            <div class="card-content">

                                <!--Formulario para editar el tipo de producto-->
                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="tipo" type="text" class="validate">
                                                <label for="tipo" class="black-text">Correo electr&oacute;nico</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close waves-effect waves-red btn-flat ">Cancelar</a>
                    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Enviar</a>
                </div>
            </div>

        </main>

        <footer class="page-footer grey darken-3">
            <div class="container">
                <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text center-align">Comun&iacute;cate con nosotros</h5>
                        <p class="grey-text text-lighten-4 center-align">Ll&aacute;manos</p>
                        <p class="grey-text text-lighten-4 center-align">(503) 2245-6378</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Correo electr&oacute;nico</h5>
                    <ul>
                        <li><i class="small  material-icons">email</i><a class="grey-text text-lighten-3 valign-wrapper"  href="https://mail.google.com/mail/u/0/#inbox?compose=new" target="_blanck"> desarrolladores@gmail.com</a></li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2018 Copyright DDS
                </div>
            </div>
        </footer>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../web/js/materialize.min.js"></script>
    </body>
</html>