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
          <th>Fecha Estimada</th>
          <th>Acciones</th>
      </tr>
    </thead>
      <?php
          
          foreach ($reservaciones as $importacion) {
          print("
          <tbody>
            <tr>
              <td><img class='materialboxed' width='95' height='95' src='../web/img/productos/$importacion[url_imagen]'></td>
              <td>$importacion[nombre]</td>
              <td>$$importacion[precio]</td>
              <td>$importacion[cantidad]</td> 
              <td>");
              if ($importacion['fecha_estimada'] == null) {
                print("Pendiente");
              } else{
                print("$importacion[fecha_estimada]");
                } print("</td>");
              if ($importacion['fecha_estimada'] == null) {
                print("
              <td>
              <a href='modificar_reservacion.php?id=$importacion[id_reservacion]' class='blue-text modal-trigger' ><i class='material-icons'>mode_edit</i></a>
              <a href='delete_reservacion.php?id=$importacion[id_reservacion]' class='red-text'><i class='material-icons'>delete</i></a>
            </td>");
                }else{
                print("
                  <td>
              <a class='green-text modal-trigger'><i class='material-icons'>access_time</i></a>
            </td>
            </tr>
          ");}
          }
      ?>
  </table>
  <div class="white-text">.</div>
  <div class="white-text">.</div>
</div>
