<!--Vista del historial de compra-->
<div class="container">
    <table class=" highlight">
        <thead>
            <!--columnas de la información a mostrar-->
            <tr>
                <th>Producto</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>

            </tr>

            <?php
//Se inicializan variables
$total=null;
$subtotal= null;
// se pone que el precio y el detalle y se declara que el total será total mas subtotal 
foreach($detalles as $detalle){
    $subtotal= $detalle['precio']* $detalle['cantidad'];
    $total= $subtotal + $total;

    print("

    </thead>
    <tbody>
      <tr>
        <td><img class='responsive-img' src='../web/images/productos/$detalle[url_imagen]'></td>
        <td class='green-text'>$detalle[nombre]</td>
        <td class='green-text'>$detalle[precio]</td>
        <td class='green-text'>$detalle[cantidad]</td>
        <tdclass='green-text'>$$subtotal</td>

      </tr>
    ");
}
?>
    </table>

    <div class="row ">

        <div class="col s12 m6 l12 ">
            <div class="card  grey lighten-3 ">
                <div class="card-content black-text ">
                    <?php print("<p class='right green-text'> <b>TOTAL  </b>  $total ");?>
                </div>
            </div>
         </div>
    </div>

