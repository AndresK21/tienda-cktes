<div class="white-text">.</div>

<div class="center-align"><h4>Editar empleado</h4></div>

<div class="container">
    <form class="col s12" method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="nombre" name="nombres" type="text" class="validate" value='<?php print($usuario->getNombres()) ?>' required />
                <label for="nombre">Nombres</label>
            </div>
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">person</i>
                <input id="apellido" name="apellidos" type="text" class="validate" value='<?php print($usuario->getApellidos()) ?>' required />
                <label for="apellido">Apellidos</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col l6 m6 s12">
                <i class="material-icons prefix">email</i>    
                <input id="email" name="correo" type="email" class="validate" value='<?php print($usuario->getCorreo()) ?>' required />
                <label for="email">Correo electr&oacute;nico</label>
            </div>
            <div class='file-field input-field col s12 m6 l6'>
            <div class='waves-effect waves-light btn grey darken-3'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo'/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
        </div>
        </div>

        <div class="white-text">.</div>
        <div class="white-text">.</div>

        <div class="row">
            <div class="right-align">
                <button type='submit' name='editar' class='btn grey darken-3 waves-effect'><i class="material-icons left">save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>