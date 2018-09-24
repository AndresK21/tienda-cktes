<div class="white-text">.</div>

<div class="center-align"><h4>Editar tipo de cliente</h4></div> 
<div class="container">
<!--Formulario para insertar marcas-->
<div class="row">
    <form method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="tipo1" name="tipo" type="text" class="validate" autocomplete="off" value='<?php print($tipo->getTipo_cliente())?>' required />
                <label for="tipo1" class="blue-grey-text text-darken-4">Tipo de cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='actualizar_tipo' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar</button>
            </div>
        </div>
    </form>
</div>
</div>