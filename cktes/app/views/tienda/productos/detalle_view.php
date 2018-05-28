<!--ESPACIO-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<h2 class="center cktes-text">
    <b>Detalles</b>
</h2>
<div class='row'>
    <form class="col s12" method="post" enctype='multipart/form-data'>
        <?php
        print("
        <h3 class='center'>".$producto->getNombre()."</h3>
            <div class= col s12 m10 l4>
                <div class='card horizontal'>
                    <div class='card-image'>
                        <img class='materialboxed' width='650' height='280' src='../web/img/productos/".$producto->getImagen()."'>
                    </div>
                    <div class='card-stacked'>
                        <div class='card-content'>
                            <p><b>Precio (US$) ".$producto->getPrecio()."</b></p>
                            <div class='card-action'>
                                <button type='submit' name='agregar' class='btn waves-effect waves-light cktes tooltipped' data-tooltip='Realizar Compra'>
                                <i class='material-icons'>add_shopping_cart</i>A&ntilde;adir al Carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        ");
        ?>
        <!-- ESTRELLAS -->
        <?php
            foreach($valoracion3 as $valoracionesE){
            print("  
            <h5><p class='center'>Valoración Actual: $valoracionesE[Estrellas] estrellas</p></h5>
            ");
            }
        ?>
        <!-- COMENTARIOS -->
        <?php
            foreach($valoracion2 as $valoracionesR){
            print("  
            <ul class='collection'>
                <li class='collection-header'><h5></h5></li>
                <li class='collection-item avatar'>
                <i class=' cktes material-icons circle'>comment</i>
                <span class='card-title'>$valoracionesR[correo_electronico]</span>
                <p>$valoracionesR[comentario]</p>
                </li>
            </ul>
            ");
            }
        ?>
    </form>
</div>