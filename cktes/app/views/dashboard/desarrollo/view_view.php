<div class="white-text">.</div>
<div class="center-align"><h4>Ver mensaje</h4></div>

<div class="container">
    <form>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($desarrollo->getNombres()).print(' ').print($desarrollo->getApellidos())?>" id="disabled" type="text" class="validate">
                <label for="cliente" class="black-text">Cliente</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($desarrollo->getCorreo())?>" id="disabled" type="text" class="validate">
                <label for="correo" class="black-text">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <textarea disabled value="<?php print($desarrollo->getMensaje())?>" id="disabled" type="text" class="materialize-textarea"></textarea>
                <label for="mensaje" class="black-text">Mensaje</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($desarrollo->getTipo())?>" id="disabled" type="text" class="validate">
                <label for="tipo_desarrollo" class="black-text">Tipo de desarrollo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">cloud_download</i>Descargar archivo</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect grey darken-3' href="index.php"><i class='material-icons'></i>Volver</a>
            </div>
        </div>
    </form>
</div>