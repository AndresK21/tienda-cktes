<!-- Dropdown Structure 
<ul id="dropdown1" class="dropdown-content">
    <li><a href="editar_perfil.php">Editar perfil</a></li>
    <li class="divider"></li>
    <li><a href="inicio.php">Cerrar sesi&oacute;n</a></li>
</ul>
<ul id="dropdown3" class="dropdown-content">
    <li><a href="editar_perfil.php">Desarrollo de proyectos</a></li>
    <li class="divider"></li>
    <li><a href="inicio.php">Importaci&oacute;n de productos</a></li>
</ul>-->


<div class="navbar-fixed">  
    <nav>
    <!--Navbar Color gris-->
        <div class="nav-wrapper grey darken-3">
            <a class="brand-logo"></a>
            <a href="#" data-activates="slide-out2" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
</div>


<!--Vista movil-->
<ul id="slide-out" class="side-nav fixed hide-on-med-and-down">
    <li><div class="user-view">
    <div class="background">
        <img src="../web/img/1.jpg">
    </div>
    <a href="editar_perfil.php"><img class="circle" src="../web/img/usuario.png"></a>
    <a href="editar_perfil.php"><span class="white-text name">John Doe</span></a>
    <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="dashboard.php">Dashboard</a></li>
    <li><a href="usuarios.php">Usuarios</a></li>
    <li><a href="productos.php">Productos</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li>
                <a class="collapsible-header">Servicios<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <li><a href="manufacturacion.php">Manufacturaci&oacute;n</a></li>
                        <li class="divider"></li>
                        <li><a href="desarrollo.php">Desarrollo de proyectos</a></li>
                        <li class="divider"></li>
                        <li><a href="importacion.php">Importaci&oacute;n de productos</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a href="index.php">Cerrar sesi&oacute;n</a></li>
</ul>


        <ul id="slide-out2" class="side-nav">
            <li><div class="user-view">
            <div class="background">
                <img src="../web/img/1.jpg">
            </div>
            <a href="#!user"><img class="circle" src="../web/img/usuario.png"></a>
            <a href="#!name"><span class="white-text name">John Doe</span></a>
            <a href="#!email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="productos.php">Productos</a></li>
            <li class="no-padding">
                <ul class="collapsible collapsible-accordion">
                    <li>
                        <a class="collapsible-header">Servicios<i class="material-icons">arrow_drop_down</i></a>
                        <div class="collapsible-body">
                            <ul>
                                <li><a href="manufacturacion.php">Manufacturaci&oacute;n</a></li>
                                <li class="divider"></li>
                                <li><a href="desarrollo.php">Desarrollo de proyectos</a></li>
                                <li class="divider"></li>
                                <li><a href="importacion.php">Importaci&oacute;n de productos</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </li>
            <li><a href="index.php">Cerrar sesi&oacute;n</a></li>
        </ul>