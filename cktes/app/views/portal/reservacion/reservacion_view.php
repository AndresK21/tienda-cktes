<img class="responsive-img indeximage" src="../web/img/2.jpg"> 
<h2 class="center"><b>RESERVACIONES</b></h2>
<div class="container">
<table class=" highlight" >
    <thead>
      <tr>
          <th>Producto</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Subtotal</th>
          <th>Acciones</th>
      </tr>
    </thead>
<?php
    
    foreach ($reservaciones as $importacion) {
    print("
    <tbody>
      <tr>
        <td><img class='responsive-img' src='../web/img/productos/$importacion[imagen]'></td>
        <td>$importacion[nombre]</td>
        <td>$$importacion[precio]</td>
        <td>$importacion[cantidad]</td> 
        <td>$".$importacion['precio']*$importacion['cantidad']."</td>
        <td>
        <a href='modificar_reservacion.php?id=$importacion[id_reservacion]' class='blue-text modal-trigger' ><i class='material-icons'>mode_edit</i></a>
        <a href='delete_reservacion.php?id=$importacion[id_reservacion]' class='red-text'><i class='material-icons'>delete</i></a>
      </td>
      </tr>
    ");
    }
?>
</table>
      <div class="row">
      <div class="col s12">
        <form method='post'>
        <button type='submit' name='reservar' class='btn waves-effect waves-light indigo darken-4 tooltipped right' data-tooltip='Realizar compra'>Verificar reservación</button>
        </form>
      </div>
    </div>
</div>
