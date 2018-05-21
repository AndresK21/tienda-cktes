<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Tienda</title>
  <!-- Android bar-->
  <meta name="theme-color" content="#444">
  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <link rel="stylesheet" href="../web/css/materialize.min.css">
  <link href="../web/css/icon.css" rel="stylesheet">
  <link rel="stylesheet" href="../web/css/normalize.min.css">
  <link rel="stylesheet" href="../web/css/valoraciones.css">
  <link rel="stylesheet" href="../web/css/style_tienda.css">
</head>

<body>
  <!--Archivo maestro del navbar -->
  <?php
    require('../app/view/nav_tienda.php');
  ?>
  <!--SLIDER-->
  <div class="slider hide-on-small-only	">
    <ul class="slides">
      <li>
        <!-- IMAGEN 1 -->
        <img class="responsive-img" src="../web/img/slider/slider1.jpg">
        <div class="caption center-align">
          <h1 class="caviar white-text"> CKTES</h1>
        </div>
      </li>
      <li>
        <!-- IMAGEN 2 -->
        <img src="../web/img/slider/slider2.jpg">
      </li>
      <li>
        <!-- IMAGEN 3 -->
        <img src="../web/img/slider/slider3.jpg">
      </li>
    </ul>
  </div>
  <!-- FIN DEL SLIDER -->

  <!-- CONTENEDOR DE LA PRIMERA CATEGORIA -->
  <main class="caviar">
    <!--TITULO Categorias-->
    <div class="container">
      <h2 class="caviar titulo1 centro truncate">Categorias</h2>
    </div>
    <!-- PRIMERA CATEGORIA -->
    <div class="row">
      <div class=" col s12 m12 l8 offset-l1">
        <h3 class=" caviar left-align">Categoria 1
          <a href="categoria.php" target="_blank" class="pink waves-effect waves-light btn">
            <i class="material-icons right">apps</i>Ver m&aacute;s</a>
        </h3>
      </div>
      <!-- PRIMER PRODUCTO -->
      <div class="col s12 m6 l3 offset-l1">
        <div class="card sticky-action">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../web/img/productos/producto3.jpg">
          </div>
          <div class="card-action">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kit de Resistencias
                <i class="material-icons right">more_vert</i>
              </span>
              <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal1">
                <i class="material-icons right">shopping_cart</i>Agregar</a>

            </div>
          </div>
          <div class="card-reveal cktes2">
            <span class="card-title  black-text text-darken-4">Descripción
              <i class="material-icons right">close</i>
            </span>
            <p class="black-text text-darken-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ratione assumenda nostrum soluta hic sit
              culpa expedita, optio obcaecati sapiente, rerum eligendi, saepe unde iste ut alias cumque ea tempore?</p>
          </div>
        </div>
      </div>

      <!-- SEGUNDO PRODUCTO -->
      <div class="col s12 m6 l3">
        <div class="card sticky-action">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../web/img/productos/producto3.jpg">
          </div>
          <div class="card-action">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kit de Resistencias
                <i class="material-icons right">more_vert</i>
              </span>
              <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal1">
                <i class="material-icons right">shopping_cart</i>Agregar</a>

            </div>
          </div>
          <div class="card-reveal cktes2">
            <span class="card-title  black-text text-darken-4">Descripción
              <i class="material-icons right">close</i>
            </span>
            <p class="black-text text-darken-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ratione assumenda nostrum soluta hic sit
              culpa expedita, optio obcaecati sapiente, rerum eligendi, saepe unde iste ut alias cumque ea tempore?</p>
          </div>
        </div>
      </div>

      <!-- TERCER PRODUCTO -->
      <div class="col s12 m6 l3">
        <div class="card sticky-action">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../web/img/productos/producto3.jpg">
          </div>
          <div class="card-action">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kit de Resistencias
                <i class="material-icons right">more_vert</i>
              </span>
              <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal1">
                <i class="material-icons right">shopping_cart</i>Agregar</a>

            </div>
          </div>
          <div class="card-reveal cktes2">
            <span class="card-title  black-text text-darken-4">Descripción
              <i class="material-icons right">close</i>
            </span>
            <p class="black-text text-darken-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ratione assumenda nostrum soluta hic sit
              culpa expedita, optio obcaecati sapiente, rerum eligendi, saepe unde iste ut alias cumque ea tempore?</p>
          </div>
        </div>
      </div>
    </div>

    <!-- PARALAX DE DIVISION -->
    <div class="parallax-container">
      <div class="parallax">
        <img src="../web/img/1.jpg">
      </div>
    </div>

    <!-- CONTENEDOR DE LA SEGUNDA CATEGORIA -->
    <div class="row">
      <!-- PRIMER PRODUCTO -->
      <div class=" col s12 m12 l8 offset-l1">
        <h3 class=" caviar left-align">Categoria 2
          <a href="categoria.php" target="_blank" class="pink waves-effect waves-light btn">
            <i class="material-icons right">apps</i>Ver m&aacute;s</a>
        </h3>
      </div>
      <div class="col s12 m6 l3 offset-l1">
        <div class="card sticky-action">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../web/img/productos/producto3.jpg">
          </div>
          <div class="card-action">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kit de Resistencias
                <i class="material-icons right">more_vert</i>
              </span>
              <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal1">
                <i class="material-icons right">shopping_cart</i>Agregar</a>

            </div>
          </div>
          <div class="card-reveal cktes2">
            <span class="card-title  black-text text-darken-4">Descripción
              <i class="material-icons right">close</i>
            </span>
            <p class="black-text text-darken-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ratione assumenda nostrum soluta hic sit
              culpa expedita, optio obcaecati sapiente, rerum eligendi, saepe unde iste ut alias cumque ea tempore?</p>
          </div>
        </div>
      </div>

      <!-- SEGUNDO PRODUCTO -->
      <div class="col s12 m6 l3">
        <div class="card sticky-action">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../web/img/productos/producto3.jpg">
          </div>
          <div class="card-action">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kit de Resistencias
                <i class="material-icons right">more_vert</i>
              </span>
              <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal1">
                <i class="material-icons right">shopping_cart</i>Agregar</a>

            </div>
          </div>
          <div class="card-reveal cktes2">
            <span class="card-title  black-text text-darken-4">Descripción
              <i class="material-icons right">close</i>
            </span>
            <p class="black-text text-darken-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ratione assumenda nostrum soluta hic sit
              culpa expedita, optio obcaecati sapiente, rerum eligendi, saepe unde iste ut alias cumque ea tempore?</p>
          </div>
        </div>
      </div>

      <!-- TERCER PRODUCTO -->
      <div class="col s12 m6 l3">
        <div class="card sticky-action">
          <div class="card-image waves-effect waves-block waves-light">
            <img class="activator" src="../web/img/productos/producto3.jpg">
          </div>
          <div class="card-action">
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Kit de Resistencias
                <i class="material-icons right">more_vert</i>
              </span>
              <a class="cktes waves-effect waves-light btn modal-trigger" href="#modal1">
                <i class="material-icons right">shopping_cart</i>Agregar</a>

            </div>
          </div>
          <div class="card-reveal cktes2">
            <span class="card-title  black-text text-darken-4">Descripción
              <i class="material-icons right">close</i>
            </span>
            <p class="black-text text-darken-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus ratione assumenda nostrum soluta hic sit
              culpa expedita, optio obcaecati sapiente, rerum eligendi, saepe unde iste ut alias cumque ea tempore?</p>
          </div>
        </div>
      </div>
    </div>
  </main>

  <!-- Modal Structure -->
  <div id="modal1" class="modal caviar">
    <div class="modal-content">
      <!-- Lista de Tabulaciones -->
      <div class="row">
        <ul class="tabs tabs-fixed-width tab-demo z-depth-1">
          <li class="tab cktes">
            <a class="active" href="#test1">Detalles</a>
          </li>
          <li class="tab cktes">
            <a href="#test2">Comentarios</a>
          </li>
          <li class="tab cktes">
            <a href="#test3">Comentar</a>
          </li>
        </ul>

        <!-- Tab Principal (Adquirir Producto) -->
        <div id="test1" class="col s12">
          <div class="card col s12 m12 l12 ">
            <div class="card-image col s12 m6 l6">
              <img src="../web/img/productos/producto3.jpg">
            </div>
            <div class="card-stacked col s12 m6 l6">
              <div class="black-text card-content col s12 m8 offset-m1 l12">
                <p>Nombre del Producto</p>
                <div class="input-field ">
                  <p>Cantidad</p>
                  <input placeholder="1" id="cantidad" type="number" class="validate">
                </div>
                <p class="section">Precio Unitario&#58; &#36;25.00</p>
                <p class="section">Sub-total&#58; &#36;25.00</p>
              </div>
              <div class="col s4 m6 l6">
                <a href="#!" class="modal-action modal-close waves-effect waves white-text btn-flat cktes2">Descartar</a>
              </div>
              <div class="col s4 offset-s4 m6 l6">
                <a href="#!" class="modal-action modal-close waves-effect waves white-text btn-flat cktes">Adquirir</a>
              </div>
              <p class=" col s12 m12 m12 white-text">.</p>
            </div>
          </div>
        </div>

        <!-- Tab Secundario (Comentarios) -->
        <div id="test2" class="col s12">
          <div class="col s12 m12 l6">
            <p class="">Puntuacion Actual:</p>
            <div class="ec-stars-wrapper">
              <!-- 5 ESTRELLAS PARA VALORAR -->
              <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
              <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
              <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
              <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
              <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
            </div>
          </div>
          <div class="col s12 m11 l12">
            <ul class="collection">
              <li class="collection-item avatar">
                <i class="material-icons circle cktes">person_pin</i>
                <span class="title">Usuario</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi eos nulla, porro a accusantium consequatur incid
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle cktes">person_pin</i>
                <span class="title">Usuario</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores sapiente tempore, perspiciatis cupiditate enim quas.
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle cktes">person_pin</i>
                <span class="title">Usuario</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi eos nulla, porro a accusantium consequatur incid
                </p>
              </li>
              <li class="collection-item avatar">
                <i class="material-icons circle cktes">person_pin</i>
                <span class="title">Usuario</span>
                <p>
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores sapiente tempore, perspiciatis cupiditate enim quas.
                </p>
              </li>
            </ul>
          </div>
        </div>

        <!-- Tab Terciario (Comentar) -->
        <div id="test3" class="col s12">
          <form class="col s12 m11 offset-m1 l12">
            <div class="row">
              <div class="col s6 m6 l6">
                <p class="">Valoracion</p>
                <div class="ec-stars-wrapper">
                  <!-- 5 ESTRELLAS PARA VALORAR -->
                  <a class="waves-effect waves-yellow" href="#" data-value="1" title="1 Estrellas">&#9733;</a>
                  <a class="waves-effect waves-yellow" href="#" data-value="2" title="2 Estrellas">&#9733;</a>
                  <a class="waves-effect waves-yellow" href="#" data-value="3" title="3 Estrellas">&#9733;</a>
                  <a class="waves-effect waves-yellow" href="#" data-value="4" title="4 Estrellas">&#9733;</a>
                  <a class="waves-effect waves-yellow" href="#" data-value="5" title="5 Estrellas">&#9733;</a>
                </div>
              </div>
              <div class="input-field col s12 m12 l8">
                <textarea id="textarea1" class="materialize-textarea" data-length="120"></textarea>
                <label for="textarea1">Comentar</label>
              </div>
              <div class="col l4">
                <button class="btn-large cktes waves-effect waves-light" type="submit" name="action">Enviar
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="../web/js/main.js"></script>
  <script src='../web/js/jquery.min.js'></script>
  <script type="text/javascript" src="../web/js/tienda.js"></script>
  <script type="text/javascript" src="../web/js/materialize.min.js"></script>
  <script src="../web/js/fontawesom.js"></script>
  <script src='../web/js/stats.min.js'></script>
</body>

</html>