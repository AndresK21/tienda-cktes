<div class="white-text">.</div>

<div class="center-align"><h4>Detalle de la compra</h4></div>

<div class="container">
    <!--Parte de clasificacion de la tabla-->
    <table class="bordered highlight responsive-table espacio_inf z-depth-2">
        <thead class="cktes white-text">
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        <!--Producto de ejemplo 1-->
            <?php
                $total=null;
                $subtotal= null;

                foreach($detalles as $row){
                    $subtotal= $row['precio_total']* $row['cant'];
                    $total= $subtotal + $total;
                    print("
                    <tr>
                        <td>$row[nombre]</td>
                        <td>$row[precio_total]</td>
                        <td>$row[cant]</td>
                        <td>$$subtotal</td>
                    </tr>
                    ");
                }
            ?>
        </tbody>
    </table>

    <div class="row ">
        <div class="col s12">
            <div class=" black-text ">
                <?php print("<p class='right'> <b>TOTAL  </b>  $$total ");?>
            </div>
        </div>
    </div>

    <div class="row right-align">
        <a class='btn waves-effect  cktes' href="../ordenes/index.php"><i class='material-icons'></i>Volver</a>
        <a class='btn waves-effect colorNa' href="../ordenes/index.php"><i class='material-icons'></i>Entendido</a>
    </div>

</div>