<!--ESPACIO-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<h2 class="center cktes-text">
    <b>Detalles</b>
</h2>
<?php
    print("
        <h3 class='center'>".$producto->getNombre()."</h3>
    ")
?>
<div class='row'>
    <form method="post">
    <?php
    foreach($valoracion3 as $valoracionesE){
    print("
    <div class='col s12 m12 l8 offset-l2'>
        <div class='card horizontal'>
            <div class='card-image'>
            <img height='300' width='250' src='../web/img/productos/".$producto->getImagen()."'>
            </div>
            <div class='card-stacked'>
    ");
            if(isset($_SESSION['id_cliente'])){
            print(" 
            <div class='card-content'>
                <h5>".$producto->getDescripcion()."</h5>
                <h5>Precio (US$): ".$producto->getPrecio()."</h5>
                <div class=' input-field col s12 m12 l12'>
                    <input id='cantidad' type='number' name='cantidad' min='1' max=".$producto->getExistencias()." class='validate'>
                    <label for='cantidad'>Cant</label>
                </div>
                <h5><p class='center'>Valoración Actual: $valoracionesE[Estrellas] estrellas</p></h5>
            </div>
            <div class='card-action'>
                <div class='center'>
                    <div class='input-field col s12 m12 l12 '>
                        <button type='submit' name='agregar' class=' TamañodelBotonLogin btn waves-effect waves-light cktes tooltipped ' data-tooltip='Realizar Compra' data-position='right'>
                        A&ntilde;adir al Carrito</button>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
            ");
            }
            else{
                print("
                    <div class='row'>
                    <div class='col s12 center'>
                    <span class='cyan-text'>NO PUEDE AÑADIR AL CARRITO SIN INICIAR SESION</span>
                    </div>
                    </div>
                    ");
                }
            }
            ?>
    </form>
</div>

<!-- COMENTARIOS -->
<div class="row">
    <div class="col s12 m12 l8 offset-l2">
    <ul class="collection with-header">
    <li class="collection-header center"><h4>Comentarios</h4></li>
    </ul>
    <?php
        foreach($valoracion2 as $valoracionesR){
        print(" 
        <ul class='collection'>
            <li class='collection-item avatar'>
            <i class='cktes material-icons circle'>comment</i>
            <span class='card-title'><b>$valoracionesR[correo_electronico]</b></span>
            <p>$valoracionesR[comentario]</p>
            </li>
        </ul>
    
        ");
        }
    ?>
</div>
</div>