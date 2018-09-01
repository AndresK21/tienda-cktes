<!--ESPACIO-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<!--TITULO Categorias-->
<h2 class="center-align truncate"><b>INFORMACIÓN</b></h2>
<!--Vista para cambiar datos del perfil-->
  
<div class="container">
   <form method='post'>
        <div class='row'>
            <!--Nombres-->
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>person</i>
                <input id='nombres' type='text' autocomplete='off' name='nombres' class='validate' value='<?php print($cliente->getNombres()) ?>' required/>
                <label for='nombres'>Nombres</label>
            </div>
            <!--Apellidos-->
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>person</i>
                <input id='apellidos' type='text' autocomplete='off' name='apellidos' class='validate' value='<?php print($cliente->getApellidos()) ?>' required/>
                <label for='apellidos'>Apellidos</label>
            </div>
            <!--Email-->
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='correo' type='email' name='correo' autocomplete='off' class='validate' value='<?php print($cliente->getCorreo()) ?>' required/>
                <label for='correo'>Correo</label>
            </div>
        <!--Botoón cancelar y guardar-->
        <div class='row center-align'>
            <a href='index.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
            <button type='submit' name='editar' class='btn waves-effect blue tooltipped' data-tooltip='Editar'><i class='material-icons'>save</i></button>
        </div>
   </form>
</div>