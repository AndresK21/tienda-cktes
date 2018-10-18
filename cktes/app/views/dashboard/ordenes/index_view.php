<div class="white-text">.</div> <!--Espacio de margen-->

<div class="center-align"><h4>Ordenes solicitadas</h4></div> <!--Titulo de la pagina-->

<div class="container">
    <!--Parte de clasificacion de la tabla-->
    <table class="bordered highlight responsive-table espacio_inf"> <!--Tabla donde se mostraran las ventas realizadas-->
        <thead class="cktes white-text"> <!--Indices de la tablas-->
            <tr>
                <th>Id de la orden</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th></th>
                <th></th>
            </tr>
        </thead>

        <tbody> <!--Contenido de la tabla-->
            <?php
                foreach($detalles as $row){
                    print("
                    <tr>
                        <td>$row[id_carrito]</td>
                        <td>$row[fecha]</td>
                        <td>$row[nombres].' '.$row[apellidos]</td>
                        <td>
                            <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Ver detalle de compra' href='detalle.php?id=$row[id_carrito]'><i class='material-icons blue-grey-text text-darken-4 prefix'>assignment</i></a>
                            <a class='waves-effect waves-light modal-trigger espacio tooltipped' data-position='right' data-delay='50' data-tooltip='Editar el estado de la orden' href='detalle.php?id=$row[id_carrito]'><i class='material-icons blue-grey-text text-darken-4 prefix'>edit</i></a>
                        </td>
                    </tr>
                    ");
                }
            ?>

        </tbody>
    </table>

    <div class="row right-align">
        <a class='btn waves-effect colorNa' href="index.php"><i class='material-icons'></i>Entendido</a> <!--Boton que regresa al inicio-->
    </div>

</div>