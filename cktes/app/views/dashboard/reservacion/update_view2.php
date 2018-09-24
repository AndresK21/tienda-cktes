<div class="white-text">.</div>
<div class="center-align"><h4>Detalles del pedido</h4></div>

<div class="container">
    <form method="post" enctype='multipart/form-data'>
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($importacion->getNombres()." ".$importacion->getApellidos()) ?>" id="disabled" type="text" class="validate">
                <label for="cliente" class="black-text">Cliente</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($importacion->getProducto())?>" id="disabled" type="text" class="validate"></input>
                <label for="producto" class="black-text">Producto solicitado</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field ">
                <input disabled value="<?php print($importacion->getCantidad())?>" id="disabled" type="text" class="validate">
                <label for="cantidad" class="black-text">Cantidad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field ">
                <input value="<?php print($importacion->getFecha_estimada())?>" name="fecha" autocomplete="off" id="fech" type="text" class="datepicker"/>
                <label for="fech" class="black-text">Fecha estimada de entrega</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <?php
                    Page::showSelect("Estado", "estado", $importacion->getId_estado(), $importacion->getEstados());
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a class='btn waves-effect cktes' href="index.php"><i class='material-icons'></i>Cancelar</a>
                <button type='submit' name='editar' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar cambios</button>
            </div>
        </div>
        
    </form>
</div>