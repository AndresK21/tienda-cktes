    <div id="fondoTotal">
<br>
<br>

    <div class="container" id="FondoLogin">
        <ul id="FondoTabLogin" class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab">
                <a  href="#test1">REGISTRARSE</a>
            </li>
            <li class="tab">
                <a class="active" href="#test2">INICIAR SESI&Oacute;N</a>
            </li>
        </ul>
        
        <div id="test1" class="col s12 container">
            <h4 class="center white-text">Registrate Gratis</h4>
            <div class="row">
                <form  method='post' class="col s12 ">
                    <div class="input-field col s12 m12 l6">
                        <input id="Nombres" name="nombres" type="text" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getNombres()) ?>'/required>
                        <label for="last_name">Nombres</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input id="Apellidos" name="apellidos" type="text" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getApellidos()) ?>'/required>
                        <label for="last_name">Apellidos</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input id="email" name="correo" type="email" autocomplete="off" class="validate transparent white-text " value='<?php print($usuario->getCorreo()) ?>'/required>
                        <label for="email">Correo Electr&oacute;nico</label>
                        
                    </div>
                    <div class="input-field col s12 m12 l6">   
                    <?php
                    Page::showSelect("Tipo de cliente", "tipo_cliente", $usuario->getTipoCliente(), $usuario->getTipos());
                    ?>
                </div>
                    <div class="input-field col s12 m12 l6">
                        <input id="password" name="clave1" type="password" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getContrasena()) ?>'/required>
                        <label for="password">Contrase&ntilde;a</label>
                    </div>
                    <div class="input-field col s12 m12 l6">
                        <input id="password2" name="clave2" type="password" autocomplete="off" class="validate transparent white-text"/required>
                        <label for="password2">Verificar Contrase&ntilde;a</label>
                    </div>
                    <div class="col s12 m12 l4 offset-l3">
                        <div class="g-recaptcha"  data-sitekey="6LeLpG0UAAAAAMG0LJesD4vL7FGONpyITihyWBVq"></div>
                    <p>
                    </div>
                    <div class="col s12 m12 l12 center">
                        <button  type='submit' name="registrar" class="waves-effect waves-light btn-large red lighten-1 TamañodelBotonLogin">Registrarse</button>
                        <div class="transparent-text">.</div>
                        <div class="transparent-text">.</div>
                    </div>
                </form>
            </div>
        </div>
        <div id="test2" class="col s12 container">
            <h4 class="center white-text">&#161;Bienvenido Otra Vez&#33;</h4>
            <div class="row">
            <form method="post" class="col s12">
                <div class="input-field col l12 s12">
                    <input id="email2" name="correo_existente" type="email" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getCorreo()) ?>' required/>
                    <label for="email2">Correo Electr&oacute;nico</label>
                </div>
                <div class="input-field col l12 s12">
                    <input id="password3" name="contrasena_existente" type="password" autocomplete="off" class="validate transparent white-text"  value='<?php print($usuario->getContrasena()) ?>' required/>
                    <label for="password3">Contrase&ntilde;a</label>
                </div>
                <div class="right-align">
                    <a href="correo.php">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                    <div class="transparent-text">.</div>
                    <div class="transparent-text">.</div>
                </div>
                <div class="col s12 m12 l12 center">
                <button type= "submit" name ="iniciar" class="waves-effect waves-light btn-large red lighten-1 TamañodelBotonLogin">Iniciar Sesi&oacute;n</button>
                <div class="transparent-text">.</div>
                <div class="transparent-text">.</div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>