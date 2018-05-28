<!--Viista del carrito-->
<img class="responsive-img animated swing" src="../web/images/productos/banner9.png">
<div class="container">
<table class=" highlight" >
<!--Elementos que poseerá la tabla-->
    <thead>
      <tr>
          <th>Producto</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
      </tr>
<?php
    $total=null;
    $subtotal= null;
    foreach($detalles as $detalle){
        $subtotal= $detalle['precio']* $detalle['cantidad'];
        $total= $subtotal + $total;
        //Información de las tablas
        print("       
        </thead>
        <tbody>
          <tr>
            <td><img class='responsive-img' src='../web/images/productos/$detalle[url_imagen]'></td>
            <td>$detalle[nombre]</td>
            <td>$detalle[precio]</td>
            <td>$detalle[cantidad]</td>
            <td>$subtotal</td>
            <td>
            <a  href='update.php?id=$detalle[id_detalle]'class='blue-text' ><i class='material-icons'>mode_edit</i></a>
            <a href='delete.php?id=$detalle[id_detalle]' class='red-text'><i class='material-icons'>delete</i></a>
            </td>
          </tr>
        ");
    }
?>
<!--Seccion donde se muestra el total-->
</table>                   
<div class="row ">
    <div class="col s12 m6 l12 ">
      <div class="card  grey lighten-3 ">
        <div class="card-content black-text ">                                                                 
           <?php print("<p class='right'> <b>TOTAL  </b>  $total ");?>
         </div>                                   
      </div>
      <form method='post'>
      <!--Botón para realizar compra-->
        <button type='submit' name='comprar' class='btn waves-effect waves-light cyan tooltipped right' data-tooltip='Realizar compra'>Realizar compra</button>
      </form>
    </div>
</div>  
</div>                     
</div>