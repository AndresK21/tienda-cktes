<div class="white-text">.</div>
<div class="center-align"><h3>Gr&aacute;ficos</h3></div>
<div class="white-text">.</div>

<div class='row'>
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Productos m&aacute;s vendidos</h5></div>
		<canvas id="myChart" height="215"></canvas>
	</div>
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Productos mejor valorados</h5></div>
		<canvas id="myChart2" height="215"></canvas>
	</div>
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Categor&iacute;as mejor valoradas</h5></div>
		<canvas id="myChart3" height="215"></canvas>
	</div>
</div>

<div class="white-text">.</div>

<div class="row">
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Productos m&aacute;s comentados</h5></div>
		<canvas id="myChart4" height="215"></canvas>
	</div>
	<div class='col s12 m8 l8 show-on-medium-and-up hide-on-small-only'>
		<div class="center-align"><h5>Clientes con m&aacute;s compras</h5></div>
		<canvas id="myChart51" height="112"></canvas>
	</div>
	<div class='col s12 m4 l4 show-on-small hide-on-med-and-up'>
		<div class="center-align"><h5>Clientes con m&aacute;s compras</h5></div>
		<canvas id="myChart5" height="215"></canvas>
	</div>
</div>

<div class="white-text">.</div>

<div class="row">
	<div class='col s12'>
		<div class="center-align"><h5>Ventas en rango de fechas</h5></div>
		<form method='post'>
			<div class='row'>
				<div class='input-field col s12 m5 l5'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha1' type='text' name='fecha_1' class="datepicker"/>
					<label for='fecha1'>Fecha inicial</label>
				</div>
				<div class='input-field col s12 m5 l5'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha2' type='text' name='fecha_2' class="datepicker"/>
					<label for='fecha2'>Fecha final</label>
				</div>
				<div class="input-field col s12 m2 l2 center-align">
					<button type='submit' name='generar' class='btn waves-effect blue-grey darken-4 tooltipped' data-tooltip='Generar grafico'><i class='material-icons'>search</i>Generar</button>
				</div>
			</div>
		</form>
		<canvas id="myChart6" height="112"></canvas>
	</div>
</div>

<div class="white-text">.</div>

<div class='row'>
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Productos m&aacute;s vendidos seg&uacute;n marca</h5></div>
		<form method='post'>
			<div class='row'>
				<div class="input-field col s12 m6 l6">
					<?php
						Page::showSelect("Marca", "marc", $producto->getId_marca(), $producto->getMarcas());
					?>
				</div>
				<div class="input-field col s12 m1 l1 center-align">
					<button type='submit' name='generar2' class='btn waves-effect waves-light blue-grey white-text darken-4 tooltipped' data-tooltip='Generar grafico'>Generar</button>
				</div>
			</div>
		</form>
		<canvas id="myChart7" height="215"></canvas>
	</div>
	<div class='col s12 m8 l8'>
		<div class="center-align"><h5>Manufacturaciones en rango de fecha</h5></div>
		<form method='post'>
			<div class='row'>
				<div class='input-field col s12 m4 l4'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha111' type='text' name='fecha_111' class="datepicker"/>
					<label for='fecha111'>Fecha inicial</label>
				</div>
				<div class='input-field col s12 m4 l4'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha222' type='text' name='fecha_222' class="datepicker"/>
					<label for='fecha222'>Fecha final</label>
				</div>
				<div class="input-field col s12 m2 l2 center-align">
					<button type='submit' name='generar3' class='btn waves-effect waves-light blue-grey darken-4 white-text tooltipped' data-tooltip='Generar grafico'>Generar</button>
				</div>
			</div>
		</form>
		<canvas id="myChart8" height="112"></canvas>
	</div>
	
</div>

<div class="row">
	<div class='col s12 m6 l6'>
		<div class="center-align"><h5>Manufacturaciones por tipo de placa</h5></div>
		<form method='post'>
			<div class='row'>
				<div class="input-field col s12 m7 l7">
					<?php
						Page::showSelect("Tipo de placa", "tipo1", $placa->getTipo(), $placa->getPlacas());
					?>
				</div>
				<div class="input-field col s12 m2 l2 center-align">
					<button type='submit' name='generar4' class='btn waves-effect waves-light blue-grey white-text darken-4 tooltipped' data-tooltip='Generar grafico'>Generar</button>
				</div>
			</div>
		</form>
		<canvas id="myChart9" height="125"></canvas>
	</div>
	<div class='col s12 m6 l6'>
		<div class="center-align"><h5>Productos m&aacute;s vendidos seg&uacute;n fecha</h5></div>
		<form method='post'>
			<div class='row'>
				<div class='input-field col s12 m4 l4'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha1111' type='text' name='fecha_1111' class="datepicker"/>
					<label for='fecha1111'>Fecha inicial</label>
				</div>
				<div class='input-field col s12 m4 l4'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha2222' type='text' name='fecha_2222' class="datepicker"/>
					<label for='fecha2222'>Fecha final</label>
				</div>
				<div class="input-field col s12 m2 l2 center-align">
					<button type='submit' name='generar5' class='btn waves-effect waves-light blue-grey darken-4 white-text tooltipped' data-tooltip='Generar grafico'>Generar</button>
				</div>
			</div>
		</form>
		<canvas id="myChart10" height="125"></canvas>
	</div>
</div>



<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="center-align"><h3>Reportes</h3></div>
<div class="white-text">.</div>

<div class='row'>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/empleados.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de empleados'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de empleados</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/clientes.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de clientes</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/productos.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de productos'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de productos</h5></div>
	</div>
</div>

<div class="white-text">.</div>

<div class="row">
	<div class='col s12 m6 l6'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/ventas.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de ventas'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Reporte de ventas</h5></div>
	</div>
	<div class='col s12 m6 l6'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/cliente_ventas.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Clientes con m&aacute;s compras</h5></div>
	</div>
</div>

<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="row">
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Ventas por fecha</h5></div>
		<form method='post'>
			<div class='row'>
				<div class='input-field col s12 m6 l6'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha11' type='text' name='fecha_11' class="datepicker"/>
					<label for='fecha11'>Fecha inicial</label>
				</div>
				<div class='input-field col s12 m6 l6'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha22' type='text' name='fecha_22' class="datepicker"/>
					<label for='fecha22'>Fecha final</label>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte6' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar las fechas'>Ingresar</button>
				</div>
			</div>
			
		</form>
		
		<?php
			if(isset($_POST['reporte6'])){
				print("
					<div class='center-align'>
						<a href='../reportes/ventas_fecha.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]&fech1=$_POST[fecha_11]&fech2=$_POST[fecha_22]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de ventas'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
					</div>
				");
			}else{
				print("
				<div class='center-align'>
					<i class='material-icons blue-grey-text text-darken-4 large prefix tooltipped' data-tooltip='Ingrese las dos fechas'>content_paste</i>
				</div>
				");
			}	
		?>
		
	</div>

	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Productos por marca</h5></div>
		<form method='post'>
			<div class='row'>
				<div class="input-field col s12">
					<?php
						Page::showSelect("Marca", "marca", $producto->getId_marca(), $producto->getMarcas());
					?>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte7' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar la marca'>Ingresar</button>
				</div>
			</div>
			
		</form>
		
		<?php
			if(isset($_POST['reporte7'])){
				print("
					<div class='center-align'>
						<a href='../reportes/productos_categoria.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]&marc=$_POST[marca]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de productos'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
					</div>
				");
			}else{
				print("
				<div class='center-align'>
					<i class='material-icons blue-grey-text text-darken-4 large prefix tooltipped' data-tooltip='Seleccione una marca'>content_paste</i>
				</div>
				");
			}	
		?>
		
	</div>

	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Empleados por tipo</h5></div>
		<form method='post'>
			<div class='row'>
				<div class="input-field col s12">
					<?php
						Page::showSelect("Tipo de empleado", "permiso", $empleado->getId_permiso(), $empleado->getPermisos());
					?>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte8' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar el tipo de empleado'>Ingresar</button>
				</div>
			</div>
			
		</form>
		
		<?php
			if(isset($_POST['reporte8'])){
				print("
					<div class='center-align'>
						<a href='../reportes/empleado_tipo.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]&permis=$_POST[permiso]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de empleados'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
					</div>
				");
			}else{
				print("
				<div class='center-align'>
					<i class='material-icons blue-grey-text text-darken-4 large prefix tooltipped' data-tooltip='Seleccione una tipo de empleado'>content_paste</i>
				</div>
				");
			}	
		?>
		
	</div>
</div>

<div class="row">
	<div class='col s12 m6 l6'>
		<div class="center-align"><h5>Importaciones pendientes</h5></div>
		<form method='post'>
			<div class='row'>
				<div class="input-field col s12">
					<select name="import">
						<option value="" disabled selected>Seleccione una opci&oacute;n</option>
						<option value="1">Normal</option>
						<option value="2">Pedido especial</option>
					</select>
					<label>Tipo de imporatci&oacute;n</label>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte9' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar el tipo de importacion'>Ingresar</button>
				</div>
			</div>
			
		</form>
		
		<?php
			if(isset($_POST['reporte9'])){
				print("
					<div class='center-align'>
						<a href='../reportes/importaciones.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]&impor=$_POST[import]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de importaciones'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
					</div>
				");
			}else{
				print("
				<div class='center-align'>
					<i class='material-icons blue-grey-text text-darken-4 large prefix tooltipped' data-tooltip='Seleccione una tipo de importacion'>content_paste</i>
				</div>
				");
			}	
		?>
		
	</div>
	<div class='col s12 m6 l6'>
		<div class="center-align"><h5>Clientes con compras mayores a:</h5></div>
		<form method='post'>
			<div class='row'>
				<div class="input-field col s12">
					<input id="vent" name="venta" type="number" class="validate" max="9999.99" min="0.01" step="any"/>
					<label for="venta" class="black-text">Precio</label>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte10' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar el monto'>Ingresar</button>
				</div>
			</div>
			
		</form>
		
		<?php
			if(isset($_POST['reporte10'])){
				if($_POST['venta'] <= 0){
					throw new Exception("Por favor ingrese datos validos");
				}else{
					print("
						<div class='center-align'>
							<a href='../reportes/clientes_compras.php?id=$_SESSION[nombres2]&id2=$_SESSION[apellidos2]&vent=$_POST[venta]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
						</div>
					");
				}
			}else{
				print("
				<div class='center-align'>
					<i class='material-icons blue-grey-text text-darken-4 large prefix tooltipped' data-tooltip='Seleccione una tipo de importacion'>content_paste</i>
				</div>
				");
			}	
		?>
	</div>
</div>

<script>
	var ctx = document.getElementById("myChart").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php
					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_producto, nombre FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombre]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],

			datasets: [{
				label: 'Cantidad',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta segunda instancia solo se necesitan los valores
					de los respectivos productos.*/
					<?php
						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_producto, nombre FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes valores se debn separar por coma para JS

						<?php print("$row[cant]"); ?>, //Aqui NO se usan las comillas simples porque los valores son de tipo numericos

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,

			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);


	var ctx = document.getElementById("myChart2").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'horizontalBar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php
					$sql = "SELECT ROUND(AVG(estrellas), 1) AS estrellas, valoraciones.id_producto, nombre FROM valoraciones INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 GROUP BY id_producto ORDER BY estrellas DESC LIMIT 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);
					
					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombre]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Cantidad de estrellas',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta segunda instancia solo se necesitan los valores
					de los respectivos productos.*/
					<?php
						$sql = "SELECT ROUND(AVG(estrellas), 1) AS estrellas, valoraciones.id_producto, nombre FROM valoraciones INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 GROUP BY id_producto ORDER BY estrellas DESC LIMIT 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);
						
						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes valores se debn separar por coma para JS

						<?php print("$row[estrellas]"); ?>, //Aqui NO se usan las comillas simples porque los valores son de tipo numericos

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				xAxes: [{
					ticks: {
						beginAtZero:true
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);


	var ctx = document.getElementById("myChart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'horizontalBar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php
					$sql = "SELECT ROUND(AVG(estrellas), 1) AS estrellas, marca FROM valoraciones INNER JOIN productos USING(id_producto) INNER JOIN marca USING(id_marca) GROUP BY id_marca ORDER BY estrellas DESC LIMIT 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[marca]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Cantidad de estrellas',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta segunda instancia solo se necesitan los valores
					de los respectivos productos.*/
					<?php
						$sql = "SELECT ROUND(AVG(estrellas), 1) AS estrellas, marca FROM valoraciones INNER JOIN productos USING(id_producto) INNER JOIN marca USING(id_marca) GROUP BY id_marca ORDER BY estrellas DESC LIMIT 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes valores se debn separar por coma para JS

						<?php print("$row[estrellas]"); ?>, //Aqui NO se usan las comillas simples porque los valores son de tipo numericos

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				xAxes: [{
					ticks: {
						beginAtZero:true
					}
				}],
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);


	var ctx = document.getElementById("myChart4").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'pie',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php
					$sql = "SELECT COUNT(comentario) AS comentar, valoraciones.id_producto, nombre FROM valoraciones INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 GROUP BY id_producto ORDER BY comentar DESC LIMIT 5";
					$params = array(null);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombre]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Cantidad de comentarios',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php
						$sql = "SELECT COUNT(comentario) AS comentar, valoraciones.id_producto, nombre FROM valoraciones INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 GROUP BY id_producto ORDER BY comentar DESC LIMIT 5";
						$params = array(null);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[comentar]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				
			}
		}
	}, 5000);


	var ctx = document.getElementById("myChart5").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php
					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_carrito, nombres, apellidos FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN clientes USING(id_cliente) GROUP BY id_cliente ORDER BY cant DESC LIMIT 10";
					$params = array(null);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombres]"." "."$row[apellidos]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Productos comprados',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php
						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_carrito, nombres, apellidos FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN clientes USING(id_cliente) GROUP BY id_cliente ORDER BY cant DESC LIMIT 10";
						$params = array(null);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[cant]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);

	var ctx = document.getElementById("myChart51").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php
					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_carrito, nombres, apellidos FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN clientes USING(id_cliente) GROUP BY id_cliente ORDER BY cant DESC LIMIT 10";
					$params = array(null);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombres]"." "."$row[apellidos]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Productos comprados',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php
						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_carrito, nombres, apellidos FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN clientes USING(id_cliente) GROUP BY id_cliente ORDER BY cant DESC LIMIT 10";
						$params = array(null);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[cant]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);

</script>
<script>
	var ctx = document.getElementById("myChart6").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php

					if(isset($_POST['generar'])){
						$_SESSION['fecha1'] = $_POST['fecha_1'];
						$_SESSION['fecha2'] = $_POST['fecha_2'];
					}
					
					/*$idioma = "SET lc_time_names ='es_SV'";
					Database::getRows($idioma, null);*/

					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, precio, detalle_carrito.id_producto as id, ROUND(precio*SUM(detalle_carrito.cantidad), 2) AS venta, carrito.fecha AS fecha, MONTHNAME(carrito.fecha) AS mes FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN productos USING(id_producto) WHERE carrito.fecha BETWEEN ? AND ? GROUP BY fecha";
					$params = array($_SESSION['fecha1'], $_SESSION['fecha2']);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[fecha]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: '$ de venta',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php
						if(isset($_POST['generar'])){
							$_SESSION['fecha1'] = $_POST['fecha_1'];
							$_SESSION['fecha2'] = $_POST['fecha_2'];
						}

						/*$idioma = "SET lc_time_names ='es_SV'";
						Database::getRows($idioma, null);*/

						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, precio, detalle_carrito.id_producto as id, ROUND(precio*SUM(detalle_carrito.cantidad), 2) AS venta, carrito.fecha AS fecha, MONTHNAME(carrito.fecha) AS mes FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN productos USING(id_producto) WHERE carrito.fecha BETWEEN ? AND ? GROUP BY fecha";
						$params = array($_SESSION['fecha1'], $_SESSION['fecha2']);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[venta]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(214, 214, 214, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);
</script>

<script>
	var ctx = document.getElementById("myChart7").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php

					if(isset($_POST['generar2'])){
						$_SESSION['marca'] = $_POST['marc'];
					}
					
					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_producto, nombre FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 AND id_marca = ? GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
					$params = array($_SESSION['marca']);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombre]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Productos comprados',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php

						if(isset($_POST['generar2'])){
							$_SESSION['marca'] = $_POST['marc'];
						}

						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_producto, nombre FROM detalle_carrito INNER JOIN productos USING(id_producto) WHERE id_tipo_producto = 2 AND id_marca = ? GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
						$params = array($_SESSION['marca']);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[cant]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);
</script>

<script>
	var ctx = document.getElementById("myChart8").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php

					if(isset($_POST['generar3'])){
						$_SESSION['fe1'] = $_POST['fecha_111'];
						$_SESSION['fe2'] = $_POST['fecha_222'];
					}
					
					$sql = "SELECT COUNT(id_pedido) as cantidad, fecha, estado FROM pedido INNER JOIN estado USING(id_estado) WHERE fecha BETWEEN ? AND ? GROUP BY id_estado";
					$params = array($_SESSION['fe1'], $_SESSION['fe2']);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[estado]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Productos comprados',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php

						if(isset($_POST['generar3'])){
							$_SESSION['fe1'] = $_POST['fecha_111'];
							$_SESSION['fe2'] = $_POST['fecha_222'];
						}

						$sql = "SELECT COUNT(id_pedido) as cantidad, fecha, estado FROM pedido INNER JOIN estado USING(id_estado) WHERE fecha BETWEEN ? AND ? GROUP BY id_estado";
						$params = array($_SESSION['fe1'], $_SESSION['fe2']);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[cantidad]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(58, 202, 236, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				
			}
		}
	}, 5000);
</script>

<script>
	var ctx = document.getElementById("myChart9").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php

					if(isset($_POST['generar4'])){
						$_SESSION['tipo1'] = $_POST['tipo1'];
					}
					
					$sql = "SELECT COUNT(id_pedido) as cantidad, fecha, estado, tipo_placa FROM pedido INNER JOIN estado USING(id_estado) INNER JOIN placa USING(id_placa) INNER JOIN tipo_placa USING(id_tipo_placa) WHERE id_tipo_placa = ? GROUP BY estado";
					$params = array($_SESSION['tipo1']);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[estado]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],
			datasets: [{
				label: 'Productos comprados',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
					de los productos.*/ 
					<?php

						if(isset($_POST['generar3'])){
							$_SESSION['tipo1'] = $_POST['tipo1'];
						}

						$sql = "SELECT COUNT(id_pedido) as cantidad, fecha, estado, tipo_placa FROM pedido INNER JOIN estado USING(id_estado) INNER JOIN placa USING(id_placa) INNER JOIN tipo_placa USING(id_tipo_placa) WHERE id_tipo_placa = ? GROUP BY estado";
						$params = array($_SESSION['tipo1']);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

						'<?php print("$row[cantidad]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(58, 202, 236, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,
			
			scales: {
				
			}
		}
	}, 5000);
</script>

<script>
	var ctx = document.getElementById("myChart10").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: [
				/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
				por eso se utiliza el "foreach", en esta primera instancia solo se necesitan los nombres
				de los productos.*/ 
				<?php

					if(isset($_POST['generar5'])){
						$_SESSION['fec1'] = $_POST['fecha_1111'];
						$_SESSION['fec2'] = $_POST['fecha_2222'];
					}

					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_producto, nombre , carrito.fecha FROM detalle_carrito INNER JOIN productos USING(id_producto) INNER JOIN carrito USING(id_carrito) WHERE id_tipo_producto = 2 AND fecha BETWEEN ? and ? GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
					$params = array($_SESSION['fec1'], $_SESSION['fec2']);
					$result = Database::getRows($sql, $params);

					foreach($result as $row){
				?> //Cerramos la etiqueta php porque los siguientes resultados tienen que ser tipo "String" Y porque los siguientes valores se debn separar por coma para JS

					'<?php print("$row[nombre]"); ?>', //Se usan las comillas simples para indicar a JavaSccript que los valores son de tipo String

				<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
					}
				?>
			],

			datasets: [{
				label: 'Cantidad',
				data: [
					/*Se abre la etiqueta de php para hacer la consulta, la consulta devuelve varios valores
					por eso se utiliza el "foreach", en esta segunda instancia solo se necesitan los valores
					de los respectivos productos.*/
					<?php

						if(isset($_POST['generar5'])){
							$_SESSION['fec1'] = $_POST['fecha_1111'];
							$_SESSION['fec2'] = $_POST['fecha_2222'];
						}

						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, detalle_carrito.id_producto, nombre , carrito.fecha FROM detalle_carrito INNER JOIN productos USING(id_producto) INNER JOIN carrito USING(id_carrito) WHERE id_tipo_producto = 2 AND fecha BETWEEN ? and ? GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
						$params = array($_SESSION['fec1'], $_SESSION['fec2']);
						$result = Database::getRows($sql, $params);

						foreach($result as $row){
					?> //Cerramos la etiqueta php porque los siguientes valores se debn separar por coma para JS

						<?php print("$row[cant]"); ?>, //Aqui NO se usan las comillas simples porque los valores son de tipo numericos

					<?php //Se vuelve a abrir la etiqueta php para añadir la llave faltante del codigo del Foreach
						}
					?>
				],
				backgroundColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(14, 28, 44, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(214, 214, 214, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(58, 202, 236, 1)',
					'rgba(255, 227, 98, 1)',
					'rgba(1, 94, 182, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(14, 28, 44, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(214, 214, 214, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(58, 202, 236, 90)',
					'rgba(255, 227, 98, 90)',
					'rgba(1, 94, 182, 90)',
					'rgba(85, 5, 39, 90)',
					'rgba(164, 3, 31, 90)',
					'rgba(10, 46, 54, 90)'
				],
				borderWidth: 2
			}]
		},
		options: {
			responsive : true,

			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			}
		}
	}, 5000);
</script>

<div class="white-text">.</div>
<div class="white-text">.</div>