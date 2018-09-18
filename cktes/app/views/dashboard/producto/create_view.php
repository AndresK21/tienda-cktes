<div class="white-text">.</div>
<div class="center-align"><h4>Crear producto</h4></div>

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
        <div class="input-field col s12 m6 l6">
            <textarea id="fich" name="ficha" type="text" class="materialize-textarea" autocomplete="off" value='<?php print($producto->getFicha()) ?>' required ></textarea>
            <label for="fich" class="black-text">Ficha t&eacute;cnica</label>
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
            <div class='waves-effect waves-light btn grey darken-3'>
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
            <select name="descuento" autocomplete="off" required>
                <option value="" disabled selected>Descuento</option>
                <option value="0.05">5%</option>
                <option value="0.10">10%</option>
                <option value="0.15">15%</option>
                <option value="0.20">20%</option>
                <option value="0.25">25%</option>
                <option value="0.30">30%</option>
                <option value="0.35">35%</option>
                <option value="0.40">40%</option>
                <option value="0.45">45%</option>
                <option value="0.50">50%</option>
                <option value="0.55">55%</option>
                <option value="0.60">60%</option>
                <option value="0.65">65%</option>
                <option value="0.70">70%</option>
                <option value="0.75">75%</option>
                <option value="0.80">80%</option>
                <option value="0.85">85%</option>
                <option value="0.90">90%</option>
                <option value="0.95">95%</option>
                <option value="1">100%</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col s12 right-align">
            <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
            <button type='submit' name='crear' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar</button>
        </div>
    </div>
</form>