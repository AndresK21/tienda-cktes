<main>
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
    <h2 class="center"><b>PCB</b></h2>
        <ul id="tabs-swipe-demo" class="tabs center">
            <li class="tab col s3 "><a href="#test-swipe-1" class ="black-text"><h5> VISUALIZADOR</h5></a></li>
            <li class="tab col s3 "><a href="#test-swipe-2" class ="black-text darken-4"><h5>PCB</h5></a></li>
            <li class="tab col s3"><a href="#test-swipe-3" class ="black-text darken-4"><h5>DUDAS</h5></a></li>
        </ul>
        <div id="test-swipe-1" class="col s12 m6 l3">
            <div class ="container">
            <br>
            <h5 class="center "><b>DESARROLLO PCB</b></h5>  
                    <div class="col s12 m6 l8">
                        <div class="card card-panel hoverable">
                        <h6><b>Visualizar archivo gerber</b></h6> 
                            <div class="embed-container">
                        <iframe class= "marginleftPcb"src="http://www.gerber-viewer.com/"  border="0" frameborder="0" height="1300" width="1100" > 
                        </iframe> 
                        </div>
                        </div>
                    </div>
                
            </div>
        </div>
        <div id="test-swipe-2" class="col s12 m6 l3">
            <div class ="container">
                <br>
                <div class="col s12 m6 l5 push-l1">
                            <div class="card card-panel hoverable">
                <h5 class="center"><b>Ingresa tu proyecto</b></h5> 
                <form method="post" enctype='multipart/form-data'>
                    <div class="input-field col s12 m12 ">
                        <input id="medida" name="medida" type="text" autocomplete="off" class="validate transparent" >
                        <label for="medida">Medida</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="capas" name="cantidad" type="number" autocomplete="off" class="validate transparent" >
                        <label for="cantidad">Cantidad</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="capas" name="capas" type="number" autocomplete="off" class="validate transparent" >
                        <label for="capas">Capas</label>
                    </div>
                    <div class='input-field col s12'>
                        <?php
                            Page::showSelect("Tipo de Placa", "tipo", $pedido->getTipo_placa(),$pedido->getTipo_placas());
                        ?>
                    </div> 
                    <div class='input-field col s12'>
                        <?php
                            Page::showSelect("Tipo de Sustrato", "tipo_sustrato", $pedido->getSustrato(),$pedido->getSustratos());
                        ?>
                    </div> 
                    <div class='file-field input-field col s12'>
                    <div class='btn waves-effect colorNa'>
                    <span><i class='material-icons'>image</i></span>
                    <input type='file' name='archivo'/>
                    </div>
                    <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione su archivo'/>
                    </div>
                    </div>
                    <button type='submit' name='pedidos' class='btn-large right waves-effect colorNa'><i class="material-icons left">send</i>Enviar pedido</button>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
        <div id="test-swipe-3" class="col s12 m6 l3">
            <div class ="container">
                <br>
                <div class="col s12 m6 l5 push-l1">
                            <div class="card card-panel hoverable">
                <h5 class="center"><b>DEJANOS TUS DUDAS</b></h5> 
                <form method="post">
                    <div class="input-field col s12 m12 ">
                        <input id="DUI" name="Asunto" type="text" autocomplete="off" class="validate transparent" >
                        <label for="last_name">Asunto del mensaje</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name= "duda" class="materialize-textarea"></textarea>
                        <label for="textarea1">Mensaje</label>
                    </div>
                    <button type='submit' name='enviar' class='btn-large right waves-effect colorNa'><i class="material-icons">send</i>  Enviar mensaje</button>
                </form>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
</main>