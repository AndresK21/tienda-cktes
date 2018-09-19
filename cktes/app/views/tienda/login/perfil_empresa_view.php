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
                  <h4><b>$_SESSION[nombres2]</b></h4>
            </div>
            <div class='center'>
                  <h4><b>$_SESSION[actividad]</b></h4>
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
                <label for='nombres'>Nombre empresa</label>
            </div>
            <!--Email-->
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='correo' type='email' name='correo' autocomplete='off' class='validate' value='<?php print($cliente->getCorreo()) ?>' required/>
                <label for='correo'>Correo</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>person</i>
                <input id='nombreEn' type='text' autocomplete='off' name='nombreEn' class='validate' value='<?php print($cliente->getEncargado()) ?>' required/>
                <label for='nombreEn'>Nombre encargado de compra</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='cargo' type='text' name='cargo' autocomplete='off' class='validate' value='<?php print($cliente->getCargo()) ?>' required/>
                <label for='cargo'>Cargo de empresa</label>
            </div>
        <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='ncr' type='text' name='nrc' autocomplete='off' class='validate' value='<?php print($cliente->getNRC()) ?>' required/>
                <label for='ncr'>NRC</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='nit' type='text' name='nit' autocomplete='off' class='validate' value='<?php print($cliente->getNIT()) ?>' required/>
                <label for='nit'> NIT</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='direccion' type='text' name='direccion' autocomplete='off' class='validate' value='<?php print($cliente->getDireccion()) ?>' required/>
                <label for='direccion'>Direcci&oacute;n</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='actividad' type='text' name='actividad' autocomplete='off' class='validate' value='<?php print($cliente->getActividad()) ?>' required/>
                <label for='actividad'>Actividad económica</label>
            </div>
           
            <div class="row">
            <div class='col s12 center'>
          
                    <div class='switch'>
                        <span>Autenticaci&oacute;n en dos pasos</span>
                        <label>
                            <i>Desactivado</i>
                            <input type='checkbox' name="auten" autocomplete="off" <?php print($cliente->getEst()?"":"checked") ?>/>
                            <span class='lever'></span>
                            <i>Activado</i>
                        </label>
                    </div>
            </div>
        </div>
        <!--Botoón cancelar y guardar-->
        <div class='row center-align'>
            <a href='categorias.php' class='btn waves-effect grey tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
            <button type='submit' name='editarE' class='btn waves-effect blue tooltipped' data-tooltip='Editar'><i class='material-icons'>save</i></button>
        </div>
       
   </form>
</div>
</div>