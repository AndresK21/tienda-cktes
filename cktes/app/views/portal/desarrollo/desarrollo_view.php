<main>
<img class="responsive-img indeximage " src="../web/img/2.jpg"> 
    <h2 class="center"><b>DESARROLLO</b></h2>
        <div class="col s12 m6 l3">
            <div class ="container">
            <br>
                <form>
                    <div class='input-field col s12 m6'>
                        <h6><b>Tipo de desarrollo</b></h6>
                        <?php
                            Page::showSelect("Tipo de desarrollo", "tipo", $desarrollo->getId(), $desarrollo->getTipo_Desarrollo());
                        ?>
                    </div>  
                    <h6><b>Descripción del desarrollo</b></h6>
                    <textarea id="textarea1" class="materialize-textarea"></textarea>
                    <h6><b>Mensaje</b></h6>
                    <textarea id="textarea2" class="materialize-textarea"></textarea>
                    <h6><b>Subir un archivo</b></h6>
                    <div class='file-field input-field col s12 m6'>
                        <div class='btn waves-effect indigo darken-4'>
                            <span><i class='material-icons'>image</i></span>
                            <input type='file' name='archivo' required/>
                        </div>
                        <div class='file-path-wrapper'>
                            <input type='text' class='file-path validate' placeholder='Subir un archivo'/>
                            <a class="waves-effect waves-light btn-large indigo darken-4 right"><b>Enviar</b></a>
                        </div>  
                    </div>   
                </form>
            </div>
        </div>
</main>