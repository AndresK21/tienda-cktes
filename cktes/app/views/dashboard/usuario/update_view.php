<div class="white-text">.</div>
<div class="center-align "><h4>Editar empleado</h4></div>

<div class="row">
    <form class="col s12" method="post" enctype='multipart/form-data'>
    <!--Formulario para ingresar nuevo usuario-->
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">person</i>
                    <input name="nombres" id="nombre" type="text" class="validate boldLe" autocomplete="off" value='<?php print($usuario->getNombres())?>' required>
                    <label for="nombre" class="black-text">Nombres</label>
                </div>
                <div class="input-field col  s12">
                    <i class="material-icons prefix">person</i>
                    <input name="apellidos" id="apellido" type="text" class="validate" autocomplete="off" value='<?php print($usuario->getApellidos())?>' required>
                    <label for="apellido" class="black-text">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">email</i> 
                    <input name="correo" id="email" type="email" class="validate" autocomplete="off" value='<?php print($usuario->getCorreo()) ?>' required />
                    <label for="email" class="black-text">Correo electr&oacute;nico</label>
                </div>
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <?php
                        Page::showSelect("Tipo de usuario", "permiso", $usuario->getId_permiso(), $usuario->getPermisos());
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col s12 right-align">
                    <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                    <button type='submit' name='actualizar' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar cambios</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>