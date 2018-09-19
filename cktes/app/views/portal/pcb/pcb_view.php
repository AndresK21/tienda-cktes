<main>
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
    <h2 class="center"><b>PCB</b></h2>
        <ul id="tabs-swipe-demo" class="tabs center">
            <li class="tab col s3 "><a href="#test-swipe-1" class ="indigo-text darken-4"><h5> VISUALIZADOR</h5></a></li>
            <li class="tab col s3 "><a href="#test-swipe-2" class ="indigo-text darken-4"><h5>PCB</h5></a></li>
            <li class="tab col s3"><a href="#test-swipe-3" class ="indigo-text darken-4"><h5>DUDAS</h5></a></li>
        </ul>
        <div id="test-swipe-1" class="col s12 m6 l3">
            <div class ="container">
            <br>
            <h5 class="center indigo-text darken-4"><b>Desarrollando PCB</b></h5> 
                <form>
                    <h6><b>Subir archivo gerber</b></h6>
                    <div class='file-field input-field col s12 m6'>
                        <div class='btn waves-effect indigo darken-4'>
                            <span><i class='material-icons'>image</i></span>
                            <input type='file' name='archivo' required/>
                        </div>
                        <div class='file-path-wrapper'>
                            <input type='text' class='file-path validate' placeholder='Subir archivo gerber'/>
                        </div>  
                    </div> 
                    <h6><b>Visualizar archivo gerber</b></h6>  
                    <div class="col s12 m6 l5 push-l1">
                        <div class="card card-panel hoverable">
                            <div class="embed-container">
                        <iframe src="http://www.gerber-viewer.com/"  border="0" frameborder="0" height="" width="" > 
                        </iframe> 
                        </div>
                        </div>
                
                    </div>
                    <h6><b>Especificaciones</b></h6>  
                    <div class='input-field col s12 m6'>
                        <i class='material-icons prefix'>archive</i>
                        <input id='cantidad' type='text' name='cantidad' class='validate'/>
                        <label for='cantidad'>Cantidad</label>
                    </div>           
                     <!--<div class='input-field col s12 m6'>
                       <?php
                            //Page::showSelect("Sustrato", "sustrato", $pcb->getSustrato(), $pcb->getTipo_Sustrato());
                        ?>--> 
                        <a class="waves-effect waves-light btn-large indigo darken-4 right"><i class ="material-icons left">add_shopping_cart</i><b>Agregar al carrito</b></a><br><br><br><br><br>
                   <!-- </div> -->  
                    
                </form>
                
            </div>
        </div>
        <div id="test-swipe-3" class="col s12 m6 l3">
            <div class ="container">
            <br>
            <div class="col s12 m6 l5 push-l1">
                        <div class="card card-panel hoverable">
            <h5 class="center indigo-text darken-4"><b>Dejanos tus dudas</b></h5> 
                <form>
                   
                    <h6><b>Asunto</b></h6> 
                    <input id='asunto' name='asunto' class='validate'/>
                    <h6><b>Mensaje</b></h6>
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <a class="waves-effect waves-light btn-large indigo darken-4 right"><i class ="material-icons right">send</i><b>Enviar</b></a><br><br><br><br><br>
                </form>
            </div>
            </div>
            </div>
        </div>
</main>