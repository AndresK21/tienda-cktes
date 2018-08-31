<div class="white-text">.</div>
<div class="center-align"><h4>Editar impuesto</h4></div>

<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input id="impuesto" name="nombre" type="text" class="validate" autocomplete="off" value='<?php print($impuesto->getNombre()) ?>' required />
                <label for="impuesto" class="black-text">Nombre del impuesto</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input id="valor" type="number" min="0.01" max="100" step="any" name="porcentaje" class="validate" autocomplete="off" value='<?php print($impuesto->getPorcentaje()) ?>' required />
                <label for="valor" class="black-text">valor del impuesto</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>