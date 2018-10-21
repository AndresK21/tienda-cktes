<div class="white-text">.</div>
<div class="center-align"><h4>Crear empleado</h4></div>
<div class="container">
<div class="row">
    <form class="col s12" method="post" enctype='multipart/form-data'>
    <!--Formulario para ingresar nuevo usuario-->
        <div class="row">
            <div class="row">
                <div class="input-field col l6 m6 s12">
                    <i class="material-icons prefix">person</i>
                    <input name="nombres" id="nombre" type="text" class="validate" autocomplete="off" value='<?php print($usuario->getNombres())?>' required>
                    <label for="nombre" class="black-text">Nombres</label>
                </div>
                <div class="input-field col l6 m6 s12">
                    <i class="material-icons prefix">person</i>
                    <input name="apellidos" id="apellido" type="text" class="validate" autocomplete="off" value='<?php print($usuario->getApellidos())?>' required>
                    <label for="apellido" class="black-text">Apellidos</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 m6 s12">
                    <i class="material-icons prefix">email</i> 
                    <input name="correo" id="email" type="email" class="validate" autocomplete="off" value='<?php print($usuario->getCorreo()) ?>' required />
                    <label for="email" class="black-text">Correo electr&oacute;nico</label>
                </div>
                <div class='file-field input-field col s12 m6 l6'>
                    <div class='waves-effect waves-light btn blue-grey darken-4'>
                        <span><i class='material-icons blue-gray-text text-darken-4'>image</i></span>
                        <input type='file' name='archivo' autocomplete="off" required/>
                    </div>
                    <div class='file-path-wrapper'>
                        <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col l6 m6 s12">
                    <i class="material-icons prefix">lock</i>
                    <input name="clave1" id="contrasen" type="password" class="validate" autocomplete="off" value='<?php print($usuario->getContrasena()) ?>' required />
                    <label for="contrasen" class="black-text">Contrase&ntilde;a</label>
                </div>
                <div class="input-field col l6 m6 s12">
                    <i class="material-icons prefix">security</i>
                    <input name="clave2" id="contrase" type="password" class="validate" autocomplete="off" value='<?php print($usuario->getContrasena()) ?>' required />
                    <label for="contrase" class="black-text">Confirmar contrase&ntilde;a</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">account_circle</i>
                    <?php
                        Page::showSelect("Tipo de usuario", "permiso", $usuario->getId_permiso(), $usuario->getPermisos());
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col s12 right-align">
                    <a class='btn waves-effect cktes' href="index.php"><i class='material-icons'></i>Cancelar</a>
                    <button type='submit' name='crear' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar cambios</button>
                </div>
            </div>
        </div>
    </form>
</div>
</div>