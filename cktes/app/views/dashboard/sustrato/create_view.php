<div class="white-text">.</div>

<div class="center-align"><h4>Crear sustrato</h4></div> 

<!--Formulario para insertar marcas-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="sustra" name="sustrato" type="text" class="validate"  value='<?php print($sustrato->getSustrato())?>' required />
                <label for="sutra" class="blue-grey-text text-darken-4">Sustrato</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='crear' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar</button>
            </div>
        </div>
    </form>
</div>