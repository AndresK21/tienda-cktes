<div class="white-text">.</div>
<div class="center-align"><h4>Detalles del pedido</h4></div>

<div class="container">
    <form method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($reservacion->getNombres()." ".$reservacion->getApellidos()) ?>" id="disabled" type="text" class="validate">
                <label for="cliente" class="black-text">Cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($reservacion->getNombre())?>" id="disabled" type="text" class="validate"></input>
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
            <div class="input-field ">
                <input value="<?php print($reservacion->getFecha_estimada())?>" name="fecha" id="fech" type="text" class="datepicker"/>
                <label for="fech" class="black-text">Fecha estimada de entrega <?php print($reservacion->getFecha_estimada())?></label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php
                    Page::showSelect("Estado", "estado", $reservacion->getId_estado(), $reservacion->getEstados());
                ?>
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
