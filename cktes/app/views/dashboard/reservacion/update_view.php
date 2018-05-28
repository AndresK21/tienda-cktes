<div class="white-text">.</div>
<div class="center-align"><h4>Detalles del pedido</h4></div>

<div class="container">
    <form class="">
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($reservacion->getNombres()).print(' ').print($reservacion->getApellidos())?>" id="disabled" type="text" class="validate">
                <label for="cliente" class="black-text">Cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field ">
                <textarea disabled value="<?php print($reservacion->getNombre())?>" id="disabled" type="text" class="materialize-textarea"></textarea>
                <label for="producto" class="black-text">Producto solicitado</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($reservacion->getCantidad())?>" id="disabled" type="text" class="validate">
                <label for="cantidad" class="black-text">Cantidad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php
                    Page::showSelect("Estado", "estado", $reservacion->getId_estado(), $reservacion->getEstados());
                ?>
            </div>
        </div>
        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">cloud_download</i>Descargar archivo</a>
    </form>
</div>
<div class="col s12 right-align">
    <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
    <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar</button>
</div>