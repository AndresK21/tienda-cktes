<!DOCTYPE html>
<html lang="es">
    <head>
        <?php
            include('../app/views/referencias_dash.php');
        ?>
        <title>Base de datos</title>
    </head>
    <body>
        <header>
            <!--Archivo maestro que contiene la barra de navegacion-->
            <?php
                include('../app/views/nav_dash.php');
            ?>
        </header>

        <main>
            <div class="white-tetx">.</div>

            <h3 class="center align">Base de datos</h3>

            <div class="container">
                <div class="row">
                    <div class="col s6 offset-s2">
                        <form method="post">
                            <button type='submit' name="exportar" class='btn waves-effect grey darken-3'>Exportar</button>
                        </form>

                        <?php
                            require_once("../app/controllers/dashboard/base/index_controller.php");
                        ?>
                    </div>
                    <div class="col s4">
                        <form method="post">
                            <button type='submit' name="importar" class='btn waves-effect grey darken-3'>Importar</button>
                        </form>

                        <?php
                            require_once("../app/controllers/dashboard/base/index_controller.php");
                        ?>
                    </div>
                </div>
            </div>

        </main>

        <!--Archivo maestro que contiene el footer-->
        <?php
            include('../app/views/footer_dash.php');
        ?>
        
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../web/js/materialize.min.js"></script>
    </body>
</html>