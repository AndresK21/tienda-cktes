<img class="responsive-img indeximage" src="../web/img/2.jpg"> 
<h2 class="center"><b>DETALLE DE LA RESERVACIÓN</b></h2>
<?php
print("
    <section class='bg-img'>
     <div class='container'>
    <div class='row'>
        <div class='col s12'>
          <div class='center'>
       <h3 class='header letra'>".$importacion->getNombre()."</h3>
       </div>
            <div class='card horizontal'>
                <div class='card-image abajo_de'>
                    <img width='200' height='142' src='../web/img/productos/".$importacion->getImagen()."'>
                </div>
                <div class='card-stacked'>
                    <div class='card-content'>
                        <div class='row lineaazul'>
                        <div class='col s6 m6 l6'>
                        <p class='letra detalle_letra'>Descripcion:</p>
                        </div>
                        <div class='col s6 m6 l6'>
                        <p class='centrar_detalle'>".$importacion->getDescripcion()."</p>
                        </div>
                        </div>
                        <div class='row lineaazul'>
                        <div class='col s6 m6 l6'>
                        <p class='letra detalle_letra'>Precio (US$):</p>
                        </div>
                        <div class='col s6 m6 l6'>
                        <p class='centrar_detalle'><b>$".$importacion->getPrecio()."</b></p>
                        </div>
                        </div>
                        <div class='row lineaazul'>
                        <div class='col s6 m6 l6'>
                        <p class='letra detalle_letra'>Stock:</p>
                        </div>
                        <div class='col s6 m6 l6'>
                        <p class='centrar_detalle'>".$importacion->getCantidad()."</p>
                        </div>
                        </div>

                    </div>");
                  if(isset($_SESSION['id_cliente'])){
                    print("
                    <div class='card-action'>
                        <form method='post'>
                            <div class='row center'>
                                <div class='input-field col s12 m6'>
                                    <i class='material-icons prefix'>list</i>
                                    <input id='cantidad' type='number' name='cantidad' min='1' max='".$importacion->getCantidad()."' class='validate black-text'>
                                    <label for='cantidad'>Cantidad</label>
                                </div>
                                <div class='input-field col s12 m6'>
                                    <button type='submit' name='comprar' class='btn waves-effect waves-light fantasma tooltipped black-text' data-tooltip='Agregar al carrito'><i class='material-icons'>add_shopping_cart</i></button>
                                </div>
                            </div>
                        </form>
                    </div>");
                }
                else{
                    print("

                     <div class='row'>
                     <div class='col s12 center'>
                     <span class='red-text'>NO PUEDE AÑADIR AL CARRITO SIN INICIAR SESION</span>
                     </div>
                     <div class='col s12 center'>
                    <button class='btn waves-effect waves-light fantasma tooltipped black-text modal-trigger' href='#Sesion' data-tooltip='REGISTRATE YA'><i class='material-icons'>account_circle</i></button>
                     </div>
                     </div>
                        ");
                }

                print("
</div>
</div>
</section>
");
?>