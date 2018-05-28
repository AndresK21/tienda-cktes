<!--ESPACIO-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<h2 class="center cktes-text">
    <b>Detalles</b>
</h2>
<div class='container'>
    <div class='row'>
        <div class='col s12'>
        <form class="col s12" method="post" enctype='multipart/form-data'>
            <?php
            print("
            <h3 class='header'>".$producto->getNombre()."</h3>
                <div class='card horizontal'>
                    <div class='card-image'>
                    <img src='../web/img/productos/".$producto->getImagen()."'>
                    </div>
                    <div class='card-stacked'>
                    <div class='card-content'>
                    <p><b>Precio (US$) ".$producto->getPrecio()."</b></p>
            ");
            ?>
            
            <button type='submit' name='agregar' class='btn waves-effect waves-light cktes tooltipped' data-tooltip='Realizar Compra'>
            <i class='material-icons'>add_shopping_cart</i>A&ntilde;adir al Carrito</button>
        </div>
    </div>
</div>
</form>

<!-- ESTRELLAS -->
<?php
    foreach($valoracion3 as $valoracionesE){
    print("  
    <div class='card-reveal'>
    <h5><p class='center'>Valoración Actual: $valoracionesE[Estrellas] estrellas</p></h5>
    </div>
    ");
    }
?>

<!-- COMENTARIOS -->
<h5>
    <p class="center">Comentarios</p>
</h5>
<?php
    foreach($valoracion2 as $valoracionesR){
    print("  
    <ul class='collection'>
        <li class='collection-header'><h5></h5></li>
        <li class='collection-item avatar'>
        <i class='material-icons circle'>comment</i>
        <span class='card-title'>$valoracionesR[correo_electronico]</span>
        <p>$valoracionesR[comentario]</p>
        </li>
    </ul>
    ");
    }
?>
</div>
</div>
</div>