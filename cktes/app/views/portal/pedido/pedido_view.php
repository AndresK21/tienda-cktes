
<div class='row'>
<div class='container'>
<div class="col s12 center">
    <h1 class="linea">Pedidos</h1>
</div>
<?php

foreach($pedidos as $pedido){
print("
<div class='col s12 m6 l6 center'>
            <div class='carta'>
                <div class='contenedor'>
                    <img height='407' width='300' class='contenedor colorNa'>
                    <div class='arr_car'></div>
                    <div class='baj_car'>
                        <div class='lef_car'>
                            <div class='details'>
                                <h5>Pedido $pedido[id_pedido]</h5>
                            </div>
                            <div class='buy'>
                                <a href='../web/archivo/$pedido[archivo]'>
                                    <i class='material-icons' data-tooltip='Buscar por nombre'>file_download</i></a>
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
                                    <th><i class='material-icons left'>remove_red_eye</i>Estado</th>
                                </tr>
                                <tr>
                                    <td>$pedido[estado]</td>
                                </tr>
                                <tr>
                                    <th><i class='material-icons left'>event_note</i>Fecha estimada</th>
                                </tr>
                                <tr>
                                    <td>$pedido[fecha]</td>
                                <tr>
                                 <th><a class='waves-effect colorNa waves-light btn modal-trigger' href='#modal$pedido[id_pedido]'>Ver mas</a></th>
                                </tr>
                                <tr>
                                 <th><button type='submit' name='cancelar' class='waves-effect colorNa waves-light btn modal-trigger' href=''>Cancelar Pedido</button></th>
                                </tr>
                            </table>
                        </div>
                </div>
            </div>
        </div>");

print("<div id='modal$pedido[id_pedido]' class='modal cktes white-text'>
    <div class='modal-content center'>
      <h4>Pedido $pedido[id_pedido]</h4>
      <ul class='collapsible colorNaC'>
    <li class='white'>
      <div class='collapsible-header'><i class='material-icons'>more</i>Tipo de placa</div>
      <div class='collapsible-body'><span>$pedido[tipo_placa]</span></div>
    </li>
    <li class='white'>
      <div class='collapsible-header'><i class='material-icons'>perm_media</i>Cantidad</div>
      <div class='collapsible-body'><span>$pedido[cantidad]</span></div>
    </li>
    <li class='white'>
      <div class='collapsible-header'><i class='material-icons'>local_drink</i>Sustrato</div>
      <div class='collapsible-body'><span>$pedido[sustrato]</span></div>
    </li>
    <li class='white'>
      <div class='collapsible-header'><i class='material-icons'>grid_on</i>Medidas</div>
      <div class='collapsible-body'><span>$pedido[medida]</span></div>
    </li>
  </ul>
    </div>
    <div class='modal-footer cktes white-text'>
      <a href='../web/archivo/$pedido[archivo]' class='waves-effect colorNa btn-flat white-text'>Descargar</a>
      <a class='modal-close waves-effect colorNa btn-flat white-text left'>Cerrar</a>
    </div>
  </div>");
    }
        ?>
        </div>
</div>

