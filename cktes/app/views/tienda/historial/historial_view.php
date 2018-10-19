
<h2 class="center-align truncate"><b>HISTORIAL DE COMPRAS</b></h2>
<!--Vista del historial de compras-->
<div class="container">
<table class=" highlight" >
    <thead>
    <!--Columnas de la información-->
      <tr>
          <th>Estado de la compra</th>
          <th>Fecha</th>
          <th></th>
      </tr>

<?php

foreach($detalles as $detalle){
    
    print("
   
    </thead>
    <tbody>
      <tr>
      <td>$detalle[estado]</td>
        <td>$detalle[fecha]</td>
        <td><a class='modal-trigger black-text' href='historialdetalle.php?id=$detalle[id_carrito]' >Ver más</a></td>
        <td><a class='modal-trigger colorNaLe' href='reportes/comprobante.php?id=$detalle[id_carrito]' >Comprobante de compra</a></td>
      </tr>
    ");
}
?>
</table>

<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
</div>