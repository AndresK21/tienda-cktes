<div class="white-text">.</div>
<div class="center-align"><h4>Crear producto</h4></div>
<div class="container">
<form class="col s12" method="post" enctype='multipart/form-data'>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="nombr" name="nombre" type="text" class="validate" autocomplete="off" value='<?php print($producto->getNombre()) ?>' required >
            <label for="nombr" class="black-text">Nombre</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <textarea id="descripcio" name="descripcion" type="text" class="materialize-textarea" autocomplete="off" value='<?php print($producto->getDescripcion()) ?>' required ></textarea>
            <label for="descripcio" class="black-text">Descripci&oacute;n</label>
        </div>
    </div>
    <div class="row">
        <div class='file-field input-field col s12 m6 l6'>
            <div class='waves-effect waves-light btn colorNa'>
                <span><i class='material-icons'>content_paste</i></span>
                <input type='file' name='ficha' autocomplete="off" required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Ficha tecnica'/>
            </div>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="cantida" name="cantidad" type="number" class="validate" max="999" min="1" step="any" autocomplete="off" value='<?php print($producto->getCantidad()) ?>' required >
            <label for="Cantida" class="black-text">Cantidad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="taman" name="tamano" type="text" class="validate" autocomplete="off" value='<?php print($producto->getTamano()) ?>' required />
            <label for="taman" class="black-text">Tama&ntilde;o</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="preci" name="precio" type="number" class="validate" autocomplete="off" max="9999.99" min="0.01" step="any" value='<?php print($producto->getPrecio()) ?>' required />
            <label for="Preci" class="black-text">Precio</label>
        </div>
    </div>
    <div class="row">
        <div class='file-field input-field col s12 m6 l6'>
            <div class='waves-effect waves-light btn colorNa'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' autocomplete="off" required/>
            </div>
            <div class='file-path-wrapper'>
                <input type='text' class='file-path validate' placeholder='Seleccione una imagen'/>
            </div>
        </div>
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Presentacion", "presentacion", $producto->getId_presentacion(), $producto->getPresentacion());
            ?>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Proveedor", "proveedor", $producto->getId_proveedor(), $producto->getProveedor());
            ?>
        </div>
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Marca", "marca", $producto->getId_marca(), $producto->getMarcas());
            ?>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Estado", "estado", $producto->getId_estado(), $producto->getEstado());
            ?>
        </div>
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Tipo de producto", "tipo", $producto->getId_tipo_producto(), $producto->getTipos());
            ?>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Impuestos", "impuesto", $producto->getId_impuesto(), $producto->getImpuestos());
            ?>
        </div>
        <div class="input-field col s12 m6 l6">
            <?php
                Page::showSelect("Descuentos (%)", "descuento", $producto->getId_descuento(), $producto->getDescuentos());
            ?>
        </div>
    </div>
    <div class="row">
        <div class="col s12 right-align">
            <a class='btn waves-effect cktes' href="index.php"><i class='material-icons'></i>Cancelar</a>
            <button type='submit' name='crear' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar</button>
        </div>
    </div>
</form>
</div>