<!--ESPACIO-->
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="row">
    <form class="col s12" method="post" enctype='multipart/form-data'>
    <?php
        $marca = $data_productos[0]['marca'];
        print("
        <h2 class='center cktes-text'><b>$marca</b></h2>");
        ?>
        <div class="col s11 m8 l4 offset-l3">
            <div class="row">
                <div class="input-field col s12">
                    <i class="material-icons prefix">search</i>
                    <input type="text" id="autocomplete-input" name='busqueda_producto' class="autocomplete">
                    <label for="autocomplete-input">Escriba el nombre de un producto</label>
                </div>
            </div>
        </div>
        <div class="input-field col s2">
            <button type='submit' name='buscar_producto' class='cktes waves-effect waves-light btn tooltipped' data-tooltip='Buscar por nombre'><i class='material-icons'>search</i>
            </button>
        </div>
    </form>
    <?php
    $marca = $data_productos[0]['marca'];
    print("
    <div class='row container'>"); 
        foreach($data_productos as $productoA){ print("
        <div class='col s12 m6 l6 center'>
            <div class='carta'>
                <div class='contenedor'>
                    <img height='407' width='300' class='contenedor' src='../web/img/productos/$productoA[url_imagen]'>
                    <div class='arr_car'></div>
                    <div class='baj_car'>
                        <div class='lef_car'>
                            <div class='details'>
                                <h1>$productoA[nombre]</h1>
                            </div>
                            <div class='buy'>
                                <a href='detalle_producto.php?id=$productoA[id_producto]'>
                                    <i class='material-icons data-tooltip='Buscar por nombre''>rate_review</i>
                            </div>
                        </div>
                        <div class='right'>
                            <div class='done'>
                                <i class='material-icons'>done</i>
                            </div>
                            <div class='details'>
                                <h1>Chair</h1>
                                <p>Added to your cart</p>
                            </div>
                            <div class='remove'>
                                <i class='material-icons'>clear</i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='inside'>
                    <div class='icon'>
                        <i class='material-icons'>info_outline</i>
                    </div>
                    <div class='contents'>
                            <table>
                                <tr>
                                    <th>Descripcion:</th>
                                </tr>
                                <tr>
                                    <td>$productoA[descripcion]</td>
                                </tr>
                                <tr>
                                    <th>Precio:</th>
                                </tr>
                                <tr>
                                    <td>$productoA[precio]</td>
                                <tr>
                                    <th>Tamaño:</th>
                                </tr>
                                <tr>
                                    <td>$productoA[tamano]</td>
                                </tr>
                                <tr>
                                    <th>Proveedor:</th>
                                </tr>
                                <tr>
                                    <td>$productoA[proveedor]</td>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>
        "); 
        }
    ?>
    </div>
    
    <?php
        //seleccionar todo de la tabla usuarios
        $resultado=$producto->getCategoriaProductos();
        //Contar el total de registros
        $total_registros = count($resultado);
        //usando ceil para dividir el total de registros entre $por_pagina este ultimo es de 5
        $total_paginas = ceil($total_registros / $por_pagina);  
        //link a primera pagina
        print("<ul class='pagination center'><a href='productos_categorias.php?id=".$producto->getId_marca()."&pagina=1'>".''."<i class='material-icons'>first_page</i></a></li>");
        for ($i=1; $i<=$total_paginas; $i++) {
        print("<li class='waves-effect white-text ligactive'><a href='productos_categorias.php?id=".$producto->getId_marca()."&pagina=".$i."'>".$i."</a></li>");
        };
        // link a la ultima pagina
        print("<a href='productos_categorias.php?id=".$producto->getId_marca()."&pagina=$total_paginas'>".''."<i class='material-icons'>last_page</i></a></li>");
    ?>