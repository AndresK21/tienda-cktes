<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
<h2 class="center"><b>IMPORTACI&Oacute;N NUEVA</b></h2>
<div class ="container">
            <div class="col s12 m6 l6">
                <div class="card card-panel hoverable">
                    <form method='post'>
                    <h5>En esta sección puede solicitar productos como importación</h5><br>
                        <div class='row'>
                            <div class='input-field col s12'>
                                <i class='material-icons prefix'>person</i>
                                <textarea id='textarea1' type='text'  autocomplete="off" name='nombres' class='validate materialize-textarea' value='<?php print($importacion->getProducto()) ?>' required /></textarea>
                                <label for='textarea1'>Nombre del producto y especificaciones</label>
                            </div>
                         
                            <div class='input-field col s12 '>
                                <i class='material-icons prefix'>person</i>
                                <input id='cantidad' type='number'  autocomplete="off" min='1' max ='500' name='cantidad' class='validate' value='<?php print($importacion->getCantidad()) ?>' required/>
                                <label for='cantidad'>Cantidad</label>
                            </div>
                 
                        <div class='row center-align'>
                        <button type='submit' name='enviar' class='btn-large waves-effect colorNa'><i class="material-icons">send</i>Enviar</button>
                        </div>
                    </form>
</div>
</div>
</div>