<div class="white-text">.</div>
<div class="center-align"><h4>Ver detalle del pedido</h4></div>

<div class="container">
    <form method="post">
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getNombres()." ".$pedido->getApellidos()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="cliente" class="black-text">Cliente</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getCorreo()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="correo" class="black-text">Correo electr&oacute;nico</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getTipo_placa()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="tipo_placa" class="black-text">Tipo de placa</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getSustrato()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="sustrato" class="black-text">Sustrato</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getMedida()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="tamano" class="black-text">Tama&ntilde;o</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getCapas()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="capas" class="black-text">N&uacute;mero de capas</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <input disabled value="<?php print($pedido->getCantidad()) ?>" id="disabled" type="text" class="validate" autocomplete="off" />
                <label for="capas" class="black-text">Cantidad</label>
            </div>
            <div class="input-field col s12 m6 l6">
                <?php
                    Page::showSelect("Estado", "estado", $pedido->getId_estado(), $pedido->getEstados());
                ?>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 m6 l6">
                <a class="waves-effect waves-light btn grey darken-3" href="../../web/archivo/<?php print($pedido->getArchivo()) ?>"><i class="material-icons left">cloud_download</i>Descargar archivo</a>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='editar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
        
    </form>
</div>