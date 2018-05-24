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
        <td><img class='responsive-img' src='../web/img/productos/".$importacion->getImagen()."'></td>
        <td>".$importacion->getNombre()."</td>
        <td>".$importacion->getDescripcion()."</td>
        <td>$".$importacion->getPrecio()."</td>
        <td><input id='cantidad' type='number' min='1' max='".$importacion->getPrecio()."'></td>
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