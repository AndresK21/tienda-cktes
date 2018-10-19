    <div id="fondoTotal">
<br>
<br>

    <div class="container" id="FondoLogin">
        <ul id="FondoTabLogin" class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab">
                <a  href="#test1"><b>REGISTRARSE</b></a>
            </li>
            <li class="tab">
                <a class="active" href="#test2"><b>INICIAR SESI&Oacute;N</b></a>
            </li>
        </ul>
        
        <div id="test1" class="col s12 container">
            <ul id="FondoTabLogin" class="tabs tabs-fixed-width tab-demo z-depth-1">
                <li class="tab">
                    <a class="active" href="#test3"><b>NATURAL</b></a>
                </li>
                <li class="tab">
                    <a href="#test4"><b>EMPRESARIAL</b></a>
                </li>
            </ul>
            <div id="test3" class="col s12">
            <h4 class="center white-text">Registrate Gratis</h4>
                <div class="row">
                    <form  method='post' class="col s12 ">
                        <div class="input-field col s12 m12 l6">
                            <input id="Nombres" name="nombres" type="text" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getNombres()) ?>'required/>
                            <label for="last_name">Nombres</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="Apellidos" name="apellidos" type="text" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getApellidos()) ?>'>
                            <label for="last_name">Apellidos</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="DUI" name="DUI" type="text" autocomplete="off" data-mask="00000000-0" class="validate transparent white-text" value='<?php print($usuario->getDUI()) ?>'>
                            <label for="last_name">DUI</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="NIT" name="NIT" type="text" autocomplete="off" data-mask="0000-000000-000-0"  class="validate transparent white-text" value='<?php print($usuario->getNIT()) ?>' required/>
                            <label for="last_name">NIT</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                        <select id="actividad" name="actividad" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getActividad()) ?>' required/>
                            <option value="" disabled selected>¿A qué se dedica?</option>
                            <option value="Trabaja">Trabaja</option>
                            <option value="Estudia">Estudia</option>
                            <option value="Independiente">Independiente</option>
                        </select>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="direccion" name="direccion" type="text" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getDireccion()) ?>' required/>
                            <label for="last_name">Ubicación del lugar</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="email" name="correo" type="email" autocomplete="off" class="validate transparent white-text " value='<?php print($usuario->getCorreo()) ?>' required/>
                            <label for="email">Correo Electr&oacute;nico</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="password" name="clave1" type="password" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getContrasena()) ?>' required/>
                            <label for="password">Contrase&ntilde;a</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="password2" name="clave2" type="password" autocomplete="off" class="validate transparent white-text" required/>
                            <label for="password2">Verificar Contrase&ntilde;a</label>
                        </div>
                        <div class="col s12 m12 l4 offset-l3">
                            <div class="g-recaptcha"  data-sitekey="6LeLpG0UAAAAAMG0LJesD4vL7FGONpyITihyWBVq"></div>
                        <p>
                        </div>
                        <div class="col s12 m12 l12 center">
                            <button  type='submit' name="registrar_cliente" class="waves-effect waves-light btn-large  colorNa TamañodelBotonLogin">Registrarse</button>
                            <div class="transparent-text">.</div>
                            <div class="transparent-text">.</div>
                        </div>
                    </form>
                </div>
            </div>

            
            <div id="test4" class="col s12">
            <h4 class="center white-text">Registrate Gratis</h4>
                <div class="row">
                    <form  method='post' class="col s12 ">
                        <div class="input-field col s12 m12 l12">
                            <input id="Nombres_empresa" name="nombre_empresa" type="text" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getNombres()) ?>' required/>
                            <label for="last_name">Nombre del Contribuyente</label>
                        </div>
                        <div class="input-field col s12 m12 l12 white-text">
                            <textarea id="actividad_empresa" name="actividad_empresa" type="text" autocomplete="off" class="materialize-textarea validate transparent white-text" data-length="120" value='<?php print($usuario->getActividad()) ?>' required/></textarea>
                            <label for="last_name">Actividad Economica</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="NIT_empresa" name="NIT_empresa" type="text" autocomplete="off" data-mask="0000-000000-000-0" class="validate transparent white-text" value='<?php print($usuario->getNIT()) ?>' required/>
                            <label for="last_name">NIT</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="NRC_empresa" name="NRC_empresa" type="text" autocomplete="off" data-mask="0000-000000-000-0" class="validate transparent white-text" value='<?php print($usuario->getNRC()) ?>'>
                            <label for="last_name">NRC</label>
                        </div>
                        <div class="input-field col s12 m12 l12 white-text">
                            <textarea id="direccion_empresa" name="direccion_empresa" type="text" autocomplete="off" class="materialize-textarea validate transparent" data-length="120" value='<?php print($usuario->getDireccion()) ?>' required/></textarea>
                            <label for="last_name">Ubicación de la Empresa</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="encargado" name="encargado" type="text" autocomplete="off"  class="validate transparent white-text" value='<?php print($usuario->getEncargado()) ?>'>
                            <label for="last_name">Nombre del encargado de compra</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="cargo" name="cargo" type="text" autocomplete="off"  class="validate transparent white-text" value='<?php print($usuario->getCargo()) ?>'>
                            <label for="last_name">Cargo de ocupa en la empresa</label>
                        </div>
                        <div class="input-field col s12 m12 l12">
                            <input id="email_empresa" name="correo_empresa" type="email" autocomplete="off" class="validate transparent white-text " value='<?php print($usuario->getCorreo()) ?>' required/>
                            <label for="email">Correo Electr&oacute;nico</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="password_empresa" name="clave1_empresa" type="password" autocomplete="off" class="validate transparent white-text" value='<?php print($usuario->getContrasena()) ?>' required/>
                            <label for="password">Contrase&ntilde;a</label>
                        </div>
                        <div class="input-field col s12 m12 l6">
                            <input id="password2" name="clave2_empresa" type="password" autocomplete="off" class="validate transparent white-text" required/>
                            <label for="password2">Verificar Contrase&ntilde;a</label>
                        </div>
                        <div class="col s12 m12 l4 offset-l3">
                            <div class="g-recaptcha"  data-sitekey="6LeLpG0UAAAAAMG0LJesD4vL7FGONpyITihyWBVq"></div>
                        <p>
                        </div>
                        <div class="col s12 m12 l12 center">
                            <button  type='submit' name="registrar_empresa" class="waves-effect waves-light btn-large  colorNa TamañodelBotonLogin">Registrarse</button>
                            <div class="transparent-text">.</div>
                            <div class="transparent-text">.</div>
                        </div>
                    </form>
                </div>
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
                        <input id="password3" name="contrasena_existente" type="password" autocomplete="off" class="validate transparent white-text"required/>
                        <label for="password3">Contrase&ntilde;a</label>
                    </div>
                    <div class="right-align">
                        <a href="correo.php" class="colorNaLe">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                        <div class="transparent-text">.</div>
                        <div class="transparent-text">.</div>
                    </div>
                    <div class="col s12 m12 l12 center">
                    <button type= "submit" name ="iniciar" class="waves-effect waves-light btn-large colorNa TamañodelBotonLogin">Iniciar Sesi&oacute;n</button>
                    <div class="transparent-text">.</div>
                    <div class="transparent-text">.</div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>