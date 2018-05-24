<img class="responsive-img indeximage" src="../web/img/2.jpg"> 
<h2 class="center"><b>DETALLE DE LA RESERVACIÓN</b></h2>
<div class="container">
<table class=" highlight" >
    <thead>
      <tr>
        <th>Producto</th>
        <th>Nombre</th> 
        <th>Descripción</th>
        <th>Precio</th>
        <th>Cantidad</th>         
      </tr>

<?php
    
    print("
   
    </thead>
    <tbody>
      <tr>
        <td><img class='responsive-img' src='../web/img/productos/dev.png'></td>
        <td>Producto de prueba</td>
        <td>descripción de prueba</td>
        <td>$20.10</td>
        <td><input id='cantidad' type='number' min='1'></td>
      </tr>
    ");

?>
</table>
                    
    <div class="row ">
        <div class="col s12 m6 l12">
            <form method='post'>
            <button type='submit' name='comprar' class='btn waves-effect waves-light indigo darken-4 tooltipped right' data-tooltip='Realizar reservación'><a href ='reservacion.php' class ='white-text'>Realizar reservación</button>          
        </div>
    </div>  
</div>                     
               
</div>