<div class="white-text">.</div>
<div class="center-align"><h4>Crear sustrato</h4></div>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="sustrato" name="sustrato" type="text" class="validate" autocomplete="off" value='<?php print($sustrato->getSustrato())?>' required />
                <label for="sustrato" class="black-text">Nombre de sustrato</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect cktes' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='crear' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar</button>
            </div>
        </div>
    </form>
</div>