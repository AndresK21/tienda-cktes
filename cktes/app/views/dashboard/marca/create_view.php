<div class="white-text">.</div>

<div class="center-align"><h4>Crear marca</h4></div> 

<!--Formulario para insertar marcas-->
<div class="row">
    <form method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="marca1" name="marca" type="text" class="validate" autocomplete="off" value='<?php print($marca->getMarca())?>' required />
                <label for="marca1" class="blue-grey-text text-darken-4">Marca</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect cktes' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='crear_marca' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar</button>
            </div>
        </div>
    </form>
</div>