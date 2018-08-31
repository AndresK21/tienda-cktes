<!--Formulario de inicio de sesion-->
<div class="container">
    <div class="row">
        <div class="col s12 m6 l6 offset-l3 offset-m3">
            <div class="card grey lighten-4">
                <div class="card-content">
                    <span class="card-title"><h4>Iniciar sesi&oacute;n</h4></span>
                    <div class="center-align">

                        <form method="post">
                            <div class="row">
                                <img class="responsive-img imagen_sesion circle" src="../../web/img/paralaxinicio2.jpg">
                                <div class="input-field col s12">
                                    <input id="correoo" name="correo" type="text" class="validate" autocomplete="off" value='<?php print($object->getCorreo()) ?>' required/>
                                    <label class="black-text" for="correoo">Correo electr&oacute;nico</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="contrasen" name="contrasena" type="password" class="validate" autocomplete="off" value='<?php print($object->getContrasena()) ?>' required/>
                                    <label class="black-text" for="contrasen">Contrase&ntilde;a</label>
                                </div>
                            </div>

                        </div>
                        <div class="left-align">
                            <a href="correo.php">&iquest;Olvido su contrase&ntilde;a&#63;</a>
                        </div>
                        <div class="white-text">.</div>

                        <div class="right-align">
                            <button type='submit' name='iniciar' class='btn grey darken-3 waves-effect'>Iniciar sesi&oacute;n</button>
                        </div>
                    </form>
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