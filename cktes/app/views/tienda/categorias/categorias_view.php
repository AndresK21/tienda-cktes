<!--ESPACIO-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<!--SLIDER-->
<div class="slider hide-on-small-only">
    <ul class="slides">
        <li>
            <!-- IMAGEN 1 -->
            <img class="responsive-img" src="../web/img/slider/slider2.jpg">
            <div class="caption left-align">
                <p>
                    <h1 class="white-text">Circuitos profesionales</h1>
                </p>
                <p>
                    <h1 class="white-text">con la garantia que nadie ofrece</h1>
                </p>
            </div>
        </li>
        <li>
            <!-- IMAGEN 2 -->
            <img src="../web/img/slider/slider1.jpg">
            <div class="caption right-align">
                <p>
                    <h1 class="white-text">CKTES</h1>
                </p>
                <p>
                    <h1 class="white-text">Somos tu mejor opci&oacute;n</h1>
                </p>
            </div>
        </li>
        <li>
            <!-- IMAGEN 3 -->
            <img src="../web/img/slider/slider3.jpg">
            <div class="caption center-align">
                <p>
                    <h1 class="white-text">Descubre nuestras</h1>
                </p>
                <p>
                    <h1 class="white-text">categorias</h1>
                </p>
            </div>
        </li>
    </ul>
</div>
<!--TITULO Categorias-->
<div class="container">
    <h2 class="titulosTienda center-align truncate">Categorias</h2>
</div>
<!-- CATEGORIAS -->
<div class="row">
    <!-- PRODUCTOS -->
    <?php
    foreach($marcas as $marca){
        print("
    <div class='col s12 m8 offset-m2 l4'>
        <div class='card horizontal hoverable'>
            <div class='card-image'>
                <img class='hide-on-small-only' src='../web/img/card2.jpg'>
            </div>
            <div class='card-stacked'>
                <div class='card-content'>
                    <span class='card-title center-align activator grey-text text-darken-4'>$marca[marca]
                    </span>
                </div>
                <div class='card-action'>
                    <button class='cktes waves-effect waves-light btn modal-trigger TamañodelBotonLogin' href='productos_categorias.php?id=$marca[id_marca]'>
                        <i class='material-icons right'>launch</i>Ver M&aacute;s</button>
                </div>
            </div>
        </div>
    </div>
        ");
    }
    ?>
</div>