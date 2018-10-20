<div class="white-text">.</div>

<div class="center-align"><h4>Editar tipo de usuario</h4></div> 

<!--Formulario para insertar marcas-->
<!--Formulario para insertar marcas-->
<div class="container">
    <div class="row">
        <form method="post">
            <div class="row">
                <div class="input-field col s12">
                    <input id="permiso1" name="permiso" type="text" class="validate" autocomplete="off" value='<?php print($permiso->getPermiso())?>' required />
                    <label for="permiso1" class="blue-grey-text text-darken-4">Tipo de usuario</label>
                </div>
            </div>

            <div class="row">
                <p class="col s2">
                    <input id="dash" name="check1" type="checkbox" class="filled-in" value="2" <?php if($permiso->getDashboard() == 2){print("checked");} ?> />
                    <label for="dash" class="blue-grey-text text-darken-4">Dashboard</label>
                </p>
                <p class="col s2">
                    <input id="user" name="check2" type="checkbox" class="filled-in" value="2" <?php if($permiso->getUsuarios() == 2){print("checked");} ?> />
                    <label for="user" class="blue-grey-text text-darken-4">Usuarios</label>
                </p>
                <p class="col s2">
                    <input id="client" name="check3" type="checkbox" class="filled-in" value="2" <?php if($permiso->getClientes() == 2){print("checked");} ?> />
                    <label for="client" class="blue-grey-text text-darken-4">Clientes</label>
                </p>
                <p class="col s2">
                    <input id="prod" name="check4" type="checkbox" class="filled-in" value="2" <?php if($permiso->getProductos() == 2){print("checked");} ?> />
                    <label for="prod" class="blue-grey-text text-darken-4">Productos</label>
                </p>
                <p class="col s2">
                    <input id="order" name="check5" type="checkbox" class="filled-in" value="2" <?php if($permiso->getOrdenes() == 2){print("checked");} ?> />
                    <label for="order" class="blue-grey-text text-darken-4">Ordenes</label>
                </p>
                <p class="col s2">
                    <input id="manu" name="check6" type="checkbox" class="filled-in" value="2" <?php if($permiso->getManufacturacion() == 2){print("checked");} ?> />
                    <label for="manu" class="blue-grey-text text-darken-4">Manufacturaci&oacute;n</label>
                </p>
                <p class="col s4">
                    <input id="desa" name="check7" type="checkbox" class="filled-in" value="2" <?php if($permiso->getDesarrollo() == 2){print("checked");} ?> />
                    <label for="desa" class="blue-grey-text text-darken-4">Desarrollo de proyectos</label>
                </p>
                <p class="col s4">
                    <input id="impor" name="check8" type="checkbox" class="filled-in" value="2" <?php if($permiso->getImportacion() == 2){print("checked");} ?> />
                    <label for="impor" class="blue-grey-text text-darken-4">Importaci&oacute;n de productos</label>
                </p>
            </div>

            <div class="row">
                <div class="col s12 right-align">
                    <a class='btn waves-effect red darken-3' href="index.php"><i class='material-icons'></i>Cancelar</a>
                    <button type='submit' name='actualizar' class='btn waves-effect blue-grey darken-4'><i class='material-icons'>save</i>Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>