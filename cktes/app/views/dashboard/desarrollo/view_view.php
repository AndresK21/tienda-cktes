<div class='white-text'>.</div>
<div class='center-align'><h4>Ver mensaje</h4></div>

<div class='container'>
    <form method="post">
        <div class='row'>
            <div class='input-field col s12 m6 l6'>
                <input disabled value='<?php print($desarrollo->getNombres().' '.$desarrollo->getApellidos())?>' id='cliente' type='text' class='validate' autocomplete='off' >
                <label for='cliente' class='black-text'>Cliente</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                <input disabled value='<?php print($desarrollo->getCorreo())?>' id='correo' type='text' class='validate' autocomplete='off' >
                <label for='correo' class='black-text'>Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class='row'>
            <div class='input-field col s12 m6 l6'>
                <textarea disabled value='<?php print($desarrollo->getMensaje())?>' id='mensaje' autocomplete='off' type='text' class='materialize-textarea'><?php print($desarrollo->getMensaje())?></textarea>
                <label for='mensaje' class='black-text'>Mensaje</label>
            </div>
            <div class='input-field col s12 m6 l6'>
                <input disabled value='<?php print($desarrollo->getTipo())?>' id='tipo_desarrollo' type='text' class='validate' autocomplete='off' >
                <label for='tipo_desarrollo' class='black-text'>Tipo de desarrollo</label>
            </div>
        </div>
        <div class="row">
            <div class='input-field col s12 m6 l6'>
                <?php
                    Page::showSelect("Estado", "estado", $desarrollo->getId_estado(), $desarrollo->getEstados());
                ?>
            </div>
        </div>
        <div class='row'>
            <?php
                if($desarrollo->getArchivo() != null){
                    print("
                        <div class='input-field col s12 m6 l6'>
                            <a class='waves-effect waves-light btn cktes' href='../../web/archivo/desarrollo/".$desarrollo->getArchivo()."'><i class='material-icons left'>cloud_download</i>Descargar archivo</a>
                        </div>
                    "); 
                }else{
                    print("<h5>El cliente no subió un archivo gerber</h5>");
                }
            ?>
            
        </div>
        <div class='row'>
            <div class='col s12 right-align'>
                <a class='btn waves-effect cktes' href='index.php'><i class='material-icons'></i>Volver</a>
                <button type='submit' name='editar' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
    </form>
</div>