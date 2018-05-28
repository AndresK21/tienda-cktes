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
                <input disabled value="I am not editable" id="disabled" type="text" class="validate">
                <label for="cantidad" class="black-text">Cantidad</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <select>
                    <option value="" disabled selected>Elija un estado</option>
                    <option value="1">Nuevo pedido</option>
                    <option value="2">Operando</option>
                    <option value="3">En desarrollo</option>
                    <option value="3">Completado</option>
                </select>
                <label class="black-text">Estado</label>
            </div>
        </div>
        <a class="waves-effect waves-light btn grey darken-3"><i class="material-icons left">cloud_download</i>Descargar archivo</a>
    </form>