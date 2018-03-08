 <!DOCTYPE html>
  <html lang="es">
    <head>
        <?php
            include('../app/view/referencias.php');
        ?>
        <link href="../web/css/style.css" rel="stylesheet">
      <title>Inicio</title>
    </head>
    <body>
      <header>
        <!--Archivo maestro que contiene la barra de navegacion-->
        <?php
                include('../app/view/nav_public.php');
        ?>
      </header>
      <!--SLIDER-->
      <div class="slider hide-on-small-only	">
        <ul class="slides">
          <li>
            <!-- IMAGEN 1 -->
            <img class="responsive-img" src="../web/img/slider/slider1.jpg"> 
            <div class="caption center-align">
              <h3 class="white-text"> CKTES</h3>
            </div>
          </li>
          <li>
            <!-- IMAGEN 2 -->
            <img src="../web/img/slider/slider2.jpg">
          </li>
          <li>
            <!-- IMAGEN 3 -->
            <img src="../web/img/slider/slider3.jpg">
            <div class="caption left-align">
            </div>
            </div>
          </li>
        </ul>
      </div>
      <main>
        <!-- CONTENEDOR DE LA PRIMERA CATEGORIA -->
        <div class="container">
          <div>
            <h2 class="center-align">Categorias</h2>
          </div>
          <div>
            <!-- PRIMERA CATEGORIA -->
            <h4 class="left-align">Categoria 1 <a href="categoria_aceite.php" target="_blank" class="cktes waves-effect waves-light btn"><i class="material-icons right">apps</i>Ver m&aacute;s</a></h4>
          </div>
          <div class="row">
            <!-- PRIMER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image ">
                  <img src="../web/img/producto1.jpg">
                  <span class="card-title black-text">&#36;25.00</span>
                  <!-- MODAL DE VALORACIONES -->
                  <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves cktes"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">message</i></a>
                  <div id="modal9" class="modal bottom-sheet">
                    <div class="modal-content">
                      <!-- COMENTARIOS -->
                      <ul class="collection">
                      <li class="collection-header"><h5>Comentarios</h5></li>
                        <li class="collection-item avatar">
                          <i class="material-icons circle">comment</i>
                          <span class="title">Andres Gomez</span>
                          <p>Excelente<br>
                            Nunca habia comprado productos de gran calidad
                          </p>
                        </li>
                        <li class="collection-item avatar">
                          <i class="material-icons circle">comment</i>
                          <span class="title">David Mejia</span>
                          <p>Buenos Productos<br>
                            Lo mejor
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                  </div>
                </div>
                  <div class="card-content">
                    <p>LEDS de 1.5 Voltios</p>
                  </div>
                  <div class="card-action">
                    <a class=" cktes waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                      <!-- Modal Structure -->
                      <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <div class="col s12 m12 l12">
                              <h5 class="header">A&ntilde;adir al Carrito</h5>
                            <div class="card horizontal">
                              <div class="card-image">
                                <img src="../web/img/producto1.jpg">
                              </div>
                              <div class="card-stacked">
                                <div class="card-content">
                                  <p>LEDS de 1.5 Voltios</p><br>
                                  <p>Presentaci&oacute;n&#58; -</p><br>
                                  <div class="input-field">
                                    <input placeholder="1" id="cantidad" type="number" class="validate">
                                    <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                  </div>
                                  <p>Precio Unitario&#58; &#36;25.00</p><br>
                                  <p>Sub-total&#58; &#36;25.00</p><br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                          <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- SEGUNDO PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto2.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves cktes"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">message</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Integrado N555</p>
                </div>
                <div class="card-action">
                  <a class=" cktes waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
                    <div id="modal2" class="modal modal-fixed-footer">
                      <div class="modal-content">
                        <div class="col s12 m12 l12">
                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                          <div class="card horizontal">
                            <div class="card-image">
                              <img src="../web/img/producto2.jpg">
                            </div>
                            <div class="card-stacked">
                              <div class="card-content">
                                <p>Integrado N555</p><br>
                                <p>Presentaci&oacute;n&#58; -;n</p><br>
                                <div class="input-field">
                                  <input placeholder="1" id="cantidad" type="number" class="validate">
                                  <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                </div>
                                <p>Precio Unitario&#58; &#36;25.00</p><br>
                                <p>Sub-total&#58; &#36;25.00</p><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- TERCER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto3.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves cktes"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">message</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Kit de Resistencias</p>
                </div>
                <div class="card-action">
                  <a class=" cktes waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
                    <div id="modal3" class="modal modal-fixed-footer">
                      <div class="modal-content">
                        <div class="col s12 m12 l12">
                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                          <div class="card horizontal">
                            <div class="card-image">
                              <img src="../web/img/producto3.jpg">
                            </div>
                            <div class="card-stacked">
                              <div class="card-content">
                                <p>Kit de Resistencia</p><br>
                                <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                <div class="input-field">
                                  <input placeholder="1" id="cantidad" type="number" class="validate">
                                  <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                </div>
                                <p>Precio Unitario&#58; &#36;25.00</p><br>
                                <p>Sub-total&#58; &#36;25.00</p><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PARALAX DE DIVISION -->
        <div class="parallax-container">
          <div class="parallax"><img src="../web/img/paralaxinicio2.jpg"></div>
        </div>
        <!-- CONTENEDOR DE LA SEGUNDA CATEGORIA -->
        <div class="container">
          <div>
            <h4 class="left-align">Categoria 2 <a href="categoria_agua.php" target="_blank" class="cktes waves-effect waves-light btn"><i class="material-icons right">apps</i>Ver m&aacute;s</a></h4>
          </div>
          <div class="row">
            <!-- PRIMER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                <div class="card-image ">
                  <img src="../web/img/producto1.jpg">
                  <span class="card-title black-text">&#36;25.00</span>
                  <!-- MODAL DE VALORACIONES -->
                  <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves cktes"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">message</i></a>
                  <div id="modal9" class="modal bottom-sheet">
                    <div class="modal-content">
                      <!-- COMENTARIOS -->
                      <ul class="collection">
                      <li class="collection-header"><h5>Comentarios</h5></li>
                        <li class="collection-item avatar">
                          <i class="material-icons circle">comment</i>
                          <span class="title">Andres Gomez</span>
                          <p>Excelente<br>
                            Nunca habia comprado productos de gran calidad
                          </p>
                        </li>
                        <li class="collection-item avatar">
                          <i class="material-icons circle">comment</i>
                          <span class="title">David Mejia</span>
                          <p>Buenos Productos<br>
                            Lo mejor
                          </p>
                        </li>
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                    </div>
                  </div>
                </div>
                  <div class="card-content">
                    <p>LEDS de 1.5 Voltios.</p>
                  </div>
                  <div class="card-action">
                    <a class=" cktes waves-effect waves-light btn modal-trigger" href="#modal1"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                      <!-- Modal Structure -->
                      <div id="modal1" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <div class="col s12 m12 l12">
                              <h5 class="header">A&ntilde;adir al Carrito</h5>
                            <div class="card horizontal">
                              <div class="card-image">
                                <img src="../web/img/producto1.jpg">
                              </div>
                              <div class="card-stacked">
                                <div class="card-content">
                                  <p>LEDS de 1.5 Voltios</p><br>
                                  <p>Presentaci&oacute;n&#58; -</p><br>
                                  <div class="input-field">
                                    <input placeholder="1" id="cantidad" type="number" class="validate">
                                    <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                  </div>
                                  <p>Precio Unitario&#58; &#36;25.00</p><br>
                                  <p>Sub-total&#58; &#36;25.00</p><br>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                          <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                        </div>
                      </div>
                  </div>
              </div>
            </div>
            <!-- SEGUNDO PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto2.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves cktes"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">message</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Integrado N555</p>
                </div>
                <div class="card-action">
                  <a class=" cktes waves-effect waves-light btn modal-trigger" href="#modal2"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
                    <div id="modal2" class="modal modal-fixed-footer">
                      <div class="modal-content">
                        <div class="col s12 m12 l12">
                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                          <div class="card horizontal">
                            <div class="card-image">
                              <img src="../web/img/producto2.jpg">
                            </div>
                            <div class="card-stacked">
                              <div class="card-content">
                                <p>Integrado N555</p><br>
                                <p>Presentaci&oacute;n&#58; -</p><br>
                                <div class="input-field">
                                  <input placeholder="1" id="cantidad" type="number" class="validate">
                                  <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                </div>
                                <p>Precio Unitario&#58; &#36;25.00</p><br>
                                <p>Sub-total&#58; &#36;25.00</p><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- TERCER PRODUCTO -->
            <div class="col s12 m6 l4">
              <div class="card">
                  <div class="card-image ">
                    <img src="../web/img/producto3.jpg">
                    <span class="card-title black-text">&#36;25.00</span>
                    <!-- MODAL DE VALORACIONES -->
                    <a class="btn tooltipped btn-floating modal-trigger halfway-fab waves-effect waves cktes"  href="#modal9" data-position="bottom" data-delay="50" data-tooltip="Ver Comentarios"><i class="material-icons">message</i></a>
                      <div id="modal9" class="modal bottom-sheet">
                        <div class="modal-content">
                          <h4>Este producto tiene 5 estrellas</h4>
                          <p>Comentarios</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Cerrar</a>
                        </div>
                      </div>
                  </div>
                <div class="card-content">
                  <p>Kit de Resistencias</p>
                </div>
                <div class="card-action">
                  <a class=" cktes waves-effect waves-light btn modal-trigger" href="#modal3"><i class="material-icons right">shopping_cart</i>A&ntilde;adir al Carrito</a>
                    <!-- Modal Structure -->
                    <div id="modal3" class="modal modal-fixed-footer">
                      <div class="modal-content">
                        <div class="col s12 m12 l12">
                            <h5 class="header">A&ntilde;adir al Carrito</h5>
                          <div class="card horizontal">
                            <div class="card-image">
                              <img src="../web/img/producto3.jpg">
                            </div>
                            <div class="card-stacked">
                              <div class="card-content">
                                <p>Kit de Resistencia</p><br>
                                <p>Presentaci&oacute;n&#58; Cubeta</p><br>
                                <div class="input-field">
                                  <input placeholder="1" id="cantidad" type="number" class="validate">
                                  <label for="Cantidad" class="blue-grey-text text-darken-4">Cantidad</label>
                                </div>
                                <p>Precio Unitario&#58; &#36;25.00</p><br>
                                <p>Sub-total&#58; &#36;25.00</p><br>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <a href="#!" class="modal-action modal-close waves-effect waves-red grey-text text-darken-3 btn-flat">Descartar</a>
                        <a href="#!" class="modal-action modal-close waves-effect waves-green blue-text btn-flat">A&ntilde;adir al Carrito</a>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- PARALAX FINAL -->
        <div class="parallax-container">
          <div class="parallax"><img src="../web/img/paralaxinicio.jpg"></div>
        </div>    
    </main> 
        <!--Archivo maestro que contiene el footer-->
        <?php
              include('../app/view/footer_public.php');
        ?>
        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="../web/js/main.js"></script>
        <script type="text/javascript" src="../web/js/ini.js"></script>
        <script type="text/javascript" src="../js/materialize.min.js"></script>
        <script type="text/javascript" src="../web/js/fontawesom.js"></script>
    </body>
  </html>