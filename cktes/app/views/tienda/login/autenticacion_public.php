<div id="fondoTotal">
<br>
<br>
<br>
    <div class="container" id="FondoLogin">
        <ul id="FondoTabLogin" class="tabs tabs-fixed-width tab-demo z-depth-1">
            <li class="tab">
                <a  href="#test1">Autenticacion</a>
            </li>
        </ul>
        <div id="test1" class="col s12 container">
            <h4 class="center white-text">Hemos enviado el c&oacute;digo de verificaci&oacute;n a tu correo </h4>
            <div class="row">
                <form method="post" enctype='multipart/form-data'>
                    <div class="center-align">
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="cod" type="number" name="cod" class="validate white-text" autocomplete="off" required>
                                <label for="cod" class="white-text">C&oacute;digo auteticaci&oacute;n</label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col s12 right-align">
                            <a class='btn waves-effect red' href="logout.php"><i class='material-icons'></i>Cancelar</a>
                            <button type='submit' name='siguiente' class='btn waves-effect colorNa'>Siguiente</button>
                        </div>
                    </div>
                </form>
                <div class="row">
                        <div class="col s12 right-align">
                <form method="post">
                <button type='submit' id='botonLog' name='volver' class='btn transparent'>Mandar de nuevo codigo de autenticacion</button>
                </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>