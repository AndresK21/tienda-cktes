<main>
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
    <h2 class="center"><b>DESARROLLO</b></h2>
            <div class ="container">
            <div class="col s12 m6 l5 push-l1">
                            <div class="card card-panel hoverable">
                <form method='post' enctype='multipart/form-data'>
                    <div class='input-field col s12'>
                        <?php
                            Page::showSelect("Tipo de desarrollo", "tipo", $desarrollo->getTipo_desa(),$desarrollo->getTipo_Desarrollo());
                        ?>
                    </div> 
                    <div class="input-field col s12">
                        <textarea id="textarea1" name= "mensaje" class="materialize-textarea"></textarea>
                        <label class="black-text" for="textarea1">¿Qué proyecto necesita?</label>
                    </div>
                    <div class='file-field input-field col s12'>
                    <div class='btn waves-effect colorNa'>
                    <span><i class='material-icons'>cloud_upload</i></span>
                    <input type='file' name='archivo'/>
                    </div>
                    <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione su archivo si lo posee'/>
                    </div>
                    </div>
                    <div class="col s12">
                        <button type="submit" name="enviar" class="waves-effect waves-light  right btn-large colorNa"><i class="material-icons">send</i>Enviar</button>
                    </div>
                </form>
                <br>
                <br>
            </div>
</div>
</div>
</main>