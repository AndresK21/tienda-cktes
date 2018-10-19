<div class="white-text">.</div>
<div class="center-align"><h4>Editar estado de la orden</h4></div>

<div class="container">
    <div class="row">
        <form class="col s12" method="post">
            <div class="row">
                <div class="input-field col s12">
                    <?php
                        Page::showSelect("Estado", "estado", $orden->getEstado(), $orden->getEstados());
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col s12 right-align">
                    <a class='btn waves-effect  cktes' href="index.php"><i class='material-icons'></i>Cancelar</a>
                    <button type='submit' name='actualizar' class='btn waves-effect colorNa'><i class='material-icons'>save</i>Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>