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

<?php
    
    print("
   
    </thead>
    <tbody>
      <tr>
        <td><img class='responsive-img' src='../web/img/productos/dev.png'></td>
        <td>Producto de prueba</td>
        <td>$20.10</td>
        <td>2</td>
        <td>$40.20</td>
        <td>
				<a  href='update.php?'class='blue-text' ><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
      </tr>
    ");

?>
</table>
                    
    <div class="row ">
      <div class="col s12 m6 l12 ">
        <div class="card  grey lighten-3 ">
          <div class="card-content black-text ">                                                                 
          <?php print("<p class='right'> <b>TOTAL  </b> $40.20 ");?>
          </div>                                   
        </div>
        <form method='post'>
        <button type='submit' name='comprar' class='btn waves-effect waves-light indigo darken-4 tooltipped right' data-tooltip='Realizar compra'>Verificar reservación</button>
      </div>
    </div>  
</div>                     
               
</div>