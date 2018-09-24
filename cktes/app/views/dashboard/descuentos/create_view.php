<div class="white-text">.</div>
<div class="center-align"><h4>Crear descuento</h4></div>

<div class="container">
    <div class="row">
        <form class="col s12" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="valor" type="number" min="0" max="100" step="any" name="descuento" class="validate" autocomplete="off" value='<?php print($descuento->getDescuento()) ?>' required />
                    <label for="valor" class="black-text">valor del descuento (%)</label>
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
</div>