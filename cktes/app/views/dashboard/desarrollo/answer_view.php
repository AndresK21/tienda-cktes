<div>.</div>
<div class="center-align"><h4>Responder a idea</h4></div>

<div class="container">
    <form>
        <div class="row">
            <div class="input-field col s12">
                <input id="corre" name="correo" type="email" class="validate" value="<?php print($desarrollo->getCorreo())?>">
                <label for="corre" class="black-text">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="asunto" type="text" class="validate">
                <label for="asunto" class="black-text">Asunto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="mensaje" type="text" class="materialize-textarea"></textarea>
                <label for="mensaje" class="black-text">Mensaje</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'>Enviar mensaje</button>
            </div>
        </div>
    </form>
</div>