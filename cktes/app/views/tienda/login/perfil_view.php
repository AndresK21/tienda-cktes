<!--TITULO Categorias-->
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
<?php
print("
<h2 class='center-align truncate'><b>INFORMACIÓN</b></h2>
<div class='container'>

           <form method='post' enctype='multipart/form-data'>
            <div class='center'>
                 <img id='imagen_perfil' src='../web/img/clientes/$_SESSION[imagen]' alt='' class='circle maxW'> 
            </div>
            
            <div class='file-field input-field col s12 m6 l6'>
            <div class='center'>
                <span>Cambiar foto de perfil</span>
                <input type='file' name='archivo' onchange='readURL(this);'/>
            </div>
            <div class=' file-path-wrapper'>
                <input type='hidden' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
            </div>
            
            <div class='center'>
                  <h4><b>$_SESSION[nombres2] $_SESSION[apellidos2]</b></h4>
            </div>
            <div class='center'>
                 <h5>$_SESSION[correo_electronico]</h5>
            </div>
            
</div>
     
");
?>

<div class='fondoEdit'>
<div class='container'>
   
        <div class='row'>
            <!--Nombres-->
            <br>
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
  
        <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='dui' type='text' name='dui' autocomplete='off' class='validate' value='<?php print($cliente->getDUI()) ?>' required/>
                <label for='dui'>DUI</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='nit' type='text' name='nit' autocomplete='off' class='validate' value='<?php print($cliente->getNIT()) ?>' required/>
                <label for='nit'>NIT</label>
            </div>
         <!--   <div class="input-field col s12 m6">
          Esto es un comentario  <select id='actividad' name='actividad' class='validate transparent' required>
                <option value='' disabled selected>¿A qué se dedica?</option>
                <option value='Trabaja'>Trabaja</option>
                <option value='Estudi'>Estudia</option>
                <option value='Independiente'>Independiente</option>
            </select>
            </div>
            -->  
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='direccion' type='text' name='direccion' autocomplete='off' class='validate' value='<?php print($cliente->getDireccion()) ?>' required/>
                <label for='direccion'>Direcci&oacute;n</label>
            </div>
            <div class="row center">
            <div class='col s12 '>
           
                    <div class='switch'>
                        <span>Autenticaci&oacute;n en dos pasos</span>
                        <label>
                            <i>Desactivado</i>
                            <input type='checkbox' name="auten" autocomplete="off" <?php print($cliente->getEst()?"checked":"") ?>/>
                            <span class='lever'></span>
                            <i>Activado</i>
                        </label>
                    </div>
            </div>
        </div>
        <!--Botoón cancelar y guardar-->
        <div class='row center-align'>
            <a href='categorias.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
            <button type='submit' name='editar' class='btn waves-effect blue tooltipped' data-tooltip='Editar'><i class='material-icons'>save</i></button>
        </div>
       
   </form>
</div>
</div>