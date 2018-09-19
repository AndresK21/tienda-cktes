<form method='post'>
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombres' type='text'  autocomplete="off" name='nombres' class='validate' value='<?php print($importacion->getProducto()) ?>' required/>
          	<label for='nombres'>Nombre de la importacion</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>person</i>
            <input id='cantidad' type='number'  autocomplete="off" min='1' max ='500' name='cantidad' class='validate' value='<?php print($importacion->getCantidad()) ?>' required/>
            <label for='cantidad'>Cantidad</label>
        </div>
    </div> 
    <div class='row center-align'>
    <button type='submit' name='enviar' class='btn waves-effect colorNa'><i class="material-icons">send</i>Enviar</button>
    </div>
</form>