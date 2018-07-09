<main>
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
    <h2 class="center"><b>DESARROLLO</b></h2>
            <div class ="container">
                <form method="POST" class="row">
                    <div class='input-field col s12'>
                        <?php
                            Page::showSelect("Tipo de desarrollo", "tipo", $desarrollo->getTipo_desa(),$desarrollo->getTipo_Desarrollo());
                        ?>
                    </div> 
                    <div class="col s12">
                      <h6><b>Mensaje</b></h6>
                    <textarea id="mensaje" name="mensaje" class="materialize-textarea" required></textarea>
                    </div>
                    <div class='file-field input-field col s12'>
                    <div class='btn waves-effect indigo darken-4'>
                    <span><i class='material-icons'>image</i></span>
                    <input type='file' name='archivo' required/>
                    </div>
                    <div class='file-path-wrapper'>
                    <input type='text' class='file-path validate' placeholder='Seleccione un archivo'/>
                    </div>
                    </div>
                    <div class="col s12">
                        <button type="submit" name="enviar" class="waves-effect waves-light btn-large indigo darken-4"><b>Enviar</b></button>
                    </div>
                </form>
            </div>
</main>