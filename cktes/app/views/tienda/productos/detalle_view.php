
<h2 class="center cktes-text">
    <b>Detalles</b>
</h2>
<?php
    print("
        <h4 class='center'>".$producto->getNombre()."</h4>
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
            <img class='materialboxed' width='50' height='420' src='../web/img/productos/".$producto->getImagen()."'>
            </div>
            <div class='card-stacked'>
    ");
            if(isset($_SESSION['id_cliente'])){
            print(" 
            <div class='card-content'>
                <h5>".$producto->getDescripcion()."</h5>
                <h5>".$producto->getProveedorG()."</h5>
                <h5>".$producto->getPresentacionG()."</h5>
                <h5>Precio: $".$producto->getTotal()."</h5>
                
                <div>
                    <a target='blank' class='waves-effect waves-light btn colorNa' href='../web/archivo/fichas/".$producto->getFicha()."'><i class='material-icons left'>cloud_download</i>Descargar ficha t&eacute;cnica</a>
                </div>

                <div class=' input-field col s12 m12 l12'>
                    <input id='cantidad' type='number' name='cantidad' min='1' max=".$producto->getExistencias()." class='validate'>
                    <label for='cantidad'>Cant</label>
                </div>
                <h5><p class='center'>Valoración Actual: $valoracionesE[Estrellas]</p></h5>
            </div>
            <div class='card-action'>
                <div class='center'>
                    <div class='input-field col s12 m12 l12 '>
                        <button type='submit' name='agregar' class=' TamañodelBotonLogin btn waves-effect waves-light cktes tooltipped ' data-tooltip='Realizar Compra' data-position='right'>
                        <i class='material-icons right'>shopping_cart</i>A&ntilde;adir al Carrito</button>
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
        
            <h4 class="center">Comentarios</h4>

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