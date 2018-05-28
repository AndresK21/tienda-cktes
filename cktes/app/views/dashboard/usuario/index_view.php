<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large grey darken-4 tooltipped" data-position="top" data-delay="50" data-tooltip="Agregar nuevo usuario" href="create.php">
        <i class="large material-icons">add</i>
    </a>
</div>

<div class="container">
    <div class="row">
        <form class="col s12" method="post" enctype='multipart/form-data'>
            <!--muestra la lista de usuarios existentes-->
            <div class="col s10">
                <div class="input-field">
                    <i class="material-icons grey-text text-darken-3 prefix">search</i>
                    <input type="text" id="input" name='busqueda'>
                    <label for="input" class="black-text">Buscar usuario por nombre o apellido</label>
                </div>
            </div>
            <div class="input-field col s2">
                <button type='submit' name='buscar' class='btn waves-effect grey darken-3 tooltipped' data-tooltip='Buscar por nombre o apellido'><i class='material-icons'>search</i></button>
            </div>
        </form>
    </div>

    <div class="row">
        <table class="bordered highlight responsive-table z-depth-2">
            <thead class="grey darken-3 white-text">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo electr&oacute;nico</th>
                    <th>Tipo</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data as $row){
                    print("
                    <tr>
                        <td>$row[nombres]</td>
                        <td>$row[apellidos]</td>
                        <td>$row[correo_electronico]</td>
                        <td>$row[permiso]</td>
                        <td>
                            <a href='update.php?id=$row[id_empleado]' class='blue-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Editar usuario'><i class='material-icons'>edit</i></a>
                            <a href='delete.php?id=$row[id_empleado]' class='red-text text-darken-3 tooltipped' data-position='top' data-delay='50' data-tooltip='Eliminar usuario'><i class='material-icons'>delete</i></a>
                        </td>
                    </tr>
                        ");
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>