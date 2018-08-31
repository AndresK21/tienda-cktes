<div class="white-text">.</div>

<div class="center-align"><h4>Crear tipo de desarrollo</h4></div> 

<!--Formulario para insertar marcas-->
<div class="row">
    <form class="col s12" method="post">
        <div class="row">
            <div class="input-field col s12">
                <input id="tip" name="tipo" type="text" class="validate" autocomplete="off" value='<?php print($tipo->getTipo_desarrollo())?>' required />
                <label for="tip" class="black-text">Tipo de desarrollo</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="descrip" name="descripcion" type="text" class="validate" autocomplete="off" value='<?php print($tipo->getDescripcion())?>' required />
                <label for="descrip" class="black-text">Descripci&oacute;n</label>
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