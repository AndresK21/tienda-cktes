
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
<!--TITULO Categorias-->
<h2 class="center-align truncate"><b>INFORMACIÓN</b></h2>
<!--Vista para cambiar de contraseña-->
  
<div class="container">
<form method='post'>
    <div class='row center-align'>
        <label>CLAVE ACTUAL</label>
    </div>
    <!--Clave actual-->
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave_actual_1' type='password' autocomplete='off' name='clave_actual_1' class='validate'/>
            <label for='clave_actual_1'>Clave</label>
        </div>
        <!--Confirmación actual-->
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave_actual_2' type='password' autocomplete='off' name='clave_actual_2' class='validate'/>
            <label for='clave_actual_2'>Confirmar clave</label>
        </div>
    </div>
    <div class='row center-align'>
        <label>CLAVE NUEVA</label>
    </div>
    <!--Nueva clave-->
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave_nueva_1' type='password' autocomplete='off' name='clave_nueva_1' class='validate'/>
            <label for='clave_nueva_1'>Clave</label>
        </div>
        <!--Confirmación nueva clave-->
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>security</i>
            <input id='clave_nueva_2' type='password' autocomplete='off' name='clave_nueva_2' class='validate'/>
            <label for='clave_nueva_2'>Confirmar clave</label>
        </div>
    </div>
    <!--Botón para cambiar clave -->
    <div class='row center-align'>
        <a href='categorias.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='cambiar' class='btn waves-effect blue tooltipped' data-tooltip='Cambiar'><i class='material-icons'>save</i></button>
    </div>
</form>
</div>