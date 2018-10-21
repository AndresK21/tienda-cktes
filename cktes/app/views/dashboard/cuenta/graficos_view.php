<div class="left-align"><a href='index.php' class='waves-effect waves-light tooltipped' data-tooltip='Volver'><i class='material-icons blue-grey-text text-darken-4 medium prefix'>arrow_back</i></a></div>
<div class="center-align colorNaLe"><h3>GR&Aacute;FICOS</h3></div>
<div class="white-text">.</div>

<div class='row'>
	<div class='col s12 m6 '>
		<div class="center-align"><h5>Productos m&aacute;s vendidos</h5></div>
		<canvas id="myChart" height="215"></canvas>
	</div>
	<div class='col s12 m6'>
		<div class="center-align"><h5>Productos mejor valorados</h5></div>
		<canvas id="myChart2" height="215"></canvas>
	</div>
</div>
<div class="row">
	<div class='col s12 m7 offset-m2'>
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
					<input id='fecha111' type='text' name='fecha_111' class="datepicker" autocomplete="off"/>
					<label for='fecha111'>Fecha inicial</label>
				</div>
				<div class='input-field col s12 m4 l4'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha222' type='text' name='fecha_222' class="datepicker" autocomplete="off"/>
					<label for='fecha222'>Fecha final</label>
				</div>
				<div class="input-field col s12 m2 l2 center-align">
					<button type='submit' name='generar3' class='btn waves-effect waves-light blue-grey darken-4 white-text tooltipped' data-tooltip='Generar grafico'>Generar</button>
				</div>
			</div>
		</form>
		<?php
			if(isset($_POST['generar3'])){
				$_SESSION['fe1'] = date_create($_POST['fecha_111']);
				$_SESSION['fe2'] = date_create($_POST['fecha_222']);

				print("<div class='center-align'>Desde el ".date_format($_SESSION['fe1'], 'd-m-Y')." al ".date_format($_SESSION['fe2'], 'd-m-Y')."</div>");
			}
		?>
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
					<input id='fecha1111' type='text' name='fecha_1111' class="datepicker" autocomplete="off" />
					<label for='fecha1111'>Fecha inicial</label>
				</div>
				<div class='input-field col s12 m4 l4'>
					<i class='material-icons prefix'>date_range</i>
					<input id='fecha2222' type='text' name='fecha_2222' class="datepicker" autocomplete="off" />
					<label for='fecha2222'>Fecha final</label>
				</div>
				<div class="input-field col s12 m2 l2 center-align">
					<button type='submit' name='generar5' class='btn waves-effect waves-light blue-grey darken-4 white-text tooltipped' data-tooltip='Generar grafico'>Generar</button>
				</div>
			</div>
		</form>
		<?php
			if(isset($_POST['generar5'])){
				$_SESSION['fec1'] = date_create($_POST['fecha_1111']);
				$_SESSION['fec2'] = date_create($_POST['fecha_2222']);

				print("<div class='center-align'>Desde el ".date_format($_SESSION['fec1'], 'd-m-Y')." al ".date_format($_SESSION['fec2'], 'd-m-Y')."</div>");
			}
		?>
		<canvas id="myChart10" height="125"></canvas>
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
					$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, nombre FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN productos USING(id_producto) WHERE estado_carrito = 6 GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
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
						$sql = "SELECT SUM(detalle_carrito.cantidad) AS cant, nombre FROM detalle_carrito INNER JOIN carrito USING(id_carrito) INNER JOIN productos USING(id_producto) WHERE estado_carrito = 6 GROUP BY id_producto ORDER BY cant DESC LIMIT 5";
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