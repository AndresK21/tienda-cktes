<div class="white-text">.</div>
<div class="center-align"><h4>Editar producto</h4></div>

<form class="col s12" method="post" enctype='multipart/form-data'>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="nombr" name="nombre" type="text" class="validate" value='<?php print($producto->getNombre()) ?>' required >
            <label for="nombr" class="black-text">Nombre</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <textarea id="descripcio" name="descripcion" type="text" class="materialize-textarea" value='<?php print($producto->getDescripcion()) ?>' required ></textarea>
            <label for="descripcio" class="black-text">Descripci&oacute;n</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <textarea id="fich" name="ficha" type="text" class="materialize-textarea" value='<?php print($producto->getFicha()) ?>' required ></textarea>
            <label for="fich" class="black-text">Ficha t&eacute;cnica</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="cantida" name="cantidad" type="number" class="validate" max="999" min="1" step="any" value='<?php print($producto->getCantidad()) ?>' required >
            <label for="Cantida" class="black-text">Cantidad</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 m6 l6">
            <input id="taman" name="tamano" type="text" class="validate" value='<?php print($producto->getTamano()) ?>' required />
            <label for="taman" class="black-text">Tama&ntilde;o</label>
        </div>
        <div class="input-field col s12 m6 l6">
            <input id="preci" name="precio" type="number" class="validate" max="9999.99" min="0.01" step="any" value='<?php print($producto->getPrecio()) ?>' required />
            <label for="Preci" class="black-text">Precio</label>
        </div>
    </div>
    <div class="row">
        <div class='file-field input-field col s12 m6 l6'>
            <div class='waves-effect waves-light btn grey darken-3'>
                <span><i class='material-icons'>image</i></span>
                <input type='file' name='archivo' required/>
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
    </div>
    <div class="row">
        <div class="col s12 right-align">
            <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
            <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar</button>
        </div>
    </div>
</form>