<main>
<img class="responsive-img indeximage " src="../web/img/2.jpg">
  <h2 class="center"><b>IMPORTACIONES</b></h2>
  <div class ="container">
    <div class ="row center">
      <form method='post' class='col s12'>
      <div class='input-field col s6 m4 l8'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscador</label>
        </div>
        <div class='input-field col s6 m4'>
            <button type='submit' name='buscar' class='btn waves-effect tooltipped indigo darken-4' data-tooltip='Buscar por nombre de producto'><i class='material-icons'>check_circle</i></button>
      </div>
    </div>
  </form>
  </div> 
<div class="container">
  <div class="row center">

<?php
foreach ($importaciones as $importacion ) {
  print("  
<div class='col s12 m6 l6 center'>
    <div class='carta'>
  <div class='contenedor'>
    <img height='407' width='300' class='contenedor' src='../web/img/productos/$importacion[url_imagen]'>
    <div class='arr_car'></div>
    <div class='baj_car'>
      <div class='lef_car'>
        <div class='details'>
          <h2>$importacion[nombre]</h2>
          <p>$importacion[precio]</p>
        </div>
        <div class='buy'><a href='detalle_reservacion.php?id=$importacion[id_producto]'><i class='material-icons'>add_shopping_cart</i></div>
      </div>
      <div class='right'>
        <div class='done'><i class='material-icons'>done</i></div>
        <div class='details'>
          <h1>Chair</h1>
          <p>Added to your cart</p>
        </div>
        <div class='remove'><i class='material-icons'>clear</i></div>
      </div>
    </div>
  </div>
  <div class='inside'>
    <div class='icon'><i class='material-icons'>info_outline</i></div>
    <div class='contents'>
      <table>
        <tr>
          <th>Tamaño:</th>
        </tr>
        <tr>
          <td>$importacion[tamano]</td>
        </tr>
        <tr>
          <th>Descripcion:</th>
        </tr>
        <tr>
          <td>$importacion[descripcion]</td>
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
</div>
</div>
  </main>