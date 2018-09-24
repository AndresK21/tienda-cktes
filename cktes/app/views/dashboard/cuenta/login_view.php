<!--Formulario de inicio de sesion-->
<div id="fondoTotalDash">
<div class="container ">
    <div class="row">
        <div class="col s12 m6 l6 offset-l3 offset-m3">
            <div class="card fondoInicioC">
                <div class="card-content">
                    <span class="card-title center white-text"><h4>Iniciar sesi&oacute;n</h4></span>
                    <div class="center-align">

                        <form method="post">
                            <div class="row">
                                <img class="responsive-img imagen_sesion circle" src="../../web/img/paralaxinicio2.jpg">
                                <div class="input-field col s12">
                                    <input id="correoo" name="correo" type="text" class="validate white-text " autocomplete="off" value='<?php print($object->getCorreo()) ?>' required/>
                                    <label class="white-text" for="correoo">Correo electr&oacute;nico</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="contrasen" name="contrasena" type="password" class="validate white-text" autocomplete="off" required/>
                                    <label class="white-text" for="contrasen">Contrase&ntilde;a</label>
                                </div>
                            </div>

                        </div>
                        <div class="left-align">
                            <a class="colorNaLe" href="correo.php">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                        </div>
                    
                        <div class="right-align">
                            <button type='submit' name='iniciar' class='btn colorNa waves-effect'>Iniciar sesi&oacute;n</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>