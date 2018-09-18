<div>.</div>
<div class="center-align"><h4>Responder a idea</h4></div>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="disabled" type="email" class="validate" autocomplete="off" disabled value="<?php print($desarrollo->getCorreo())?>">
                <label for="disabled" class="black-text">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="asunt" name="asunto" type="text" class="validate" autocomplete="off" required>
                <label for="asunt" class="black-text">Asunto</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="mensaj" name="mensaje" type="text" class="materialize-textarea" autocomplete="off" required></textarea>
                <label for="mensaj" class="black-text">Mensaje</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='enviar' class='btn waves-effect blue-grey darken-4'>Enviar mensaje</button>
            </div>
        </div>
        <div class="input-field col s12">
            <input name="correo" type="email" class="validate" autocomplete="off" hidden value="<?php print($desarrollo->getCorreo())?>">
        </div>
    </form>
</div>