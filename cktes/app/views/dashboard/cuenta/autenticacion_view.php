<div class="white-text">.</div>
<div class="white-text">.</div>

<form method="post" enctype='multipart/form-data'>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6 offset-l3 offset-m3">
				<div class="card grey lighten-4">
					<div class="card-content">
						<span class="card-title"><h4>Confirmar auntenticaci&oacute;n</h4></span>
                        <p>Hemos enviado un c&oacute;digo de autenticaci&oacute;n a su correo electr&oacute;nico<p>
						<div class="center-align">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="cmail" type="number" min="1" max="9999" step="any" name="codigo" class="validate" autocomplete="off" required>
                                    <label for="cmail" class="black-text">C&oacute;digo de autenticaci&oacute;n</label>
                                </div>
                            </div>
                            
						</div>
						<div class="white-text">.</div>
                        <div class="row">
                            <div class="col s12 right-align">
                                <a class='btn waves-effect red darken-3' href="logout.php"><i class='material-icons'></i>Cancelar</a>
                                <button type='submit' name='continuar' class='btn waves-effect blue-grey darken-4'>Confirmar</button>
                            </div>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<form>