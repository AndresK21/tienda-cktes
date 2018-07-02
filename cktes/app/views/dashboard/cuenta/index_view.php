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
		<canvas id="myChart6" height="112"></canvas>
	</div>
</div>

<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="center-align"><h3>Reportes</h3></div>
<div class="white-text">.</div>

<div class='row'>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../../app/view/dashboard/usuarios/reporte.php?id=$_SESSION[nombres]&id2=$_SESSION[apellidos]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de empleados'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de empleados</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../../app/view/dashboard/clientes/reporte.php?id=$_SESSION[nombres]&id2=$_SESSION[apellidos]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de clientes</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../../app/view/dashboard/producto/reporte.php?id=$_SESSION[nombres]&id2=$_SESSION[apellidos]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de productos'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de productos</h5></div>
	</div>
</div>

<div class="white-text">.</div>

<div class="row">
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../../app/view/dashboard/empleado/reporte_ventas.php?id=$_SESSION[nombres]&id2=$_SESSION[apellidos]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de ventas'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Reporte de ventas</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../../app/view/dashboard/empleado/reporte_cliente.php?id=$_SESSION[nombres]&id2=$_SESSION[apellidos]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Clientes con m&aacute;s compras</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../../app/view/dashboard/usuarios/reporte.php?id=$_SESSION[nombres]&id2=$_SESSION[apellidos]' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de empleados'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Ventas por fecha</h5></div>
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
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				borderColor: [
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				hoverBackground: [
					'rgba(24, 42, 51, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(174, 171, 152, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(69, 190, 252, 90)',
					'rgba(213, 185, 66, 90)'
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
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				borderColor: [
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				hoverBackground: [
					'rgba(24, 42, 51, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(174, 171, 152, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(69, 190, 252, 90)',
					'rgba(213, 185, 66, 90)'
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
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				borderColor: [
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				hoverBackground: [
					'rgba(24, 42, 51, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(174, 171, 152, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(69, 190, 252, 90)',
					'rgba(213, 185, 66, 90)'
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
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				borderColor: [
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)'
				],
				hoverBackground: [
					'rgba(24, 42, 51, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(174, 171, 152, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(69, 190, 252, 90)',
					'rgba(213, 185, 66, 90)'
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
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)',
					'rgba(0, 21, 20, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)',
					'rgba(0, 21, 20, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(24, 42, 51, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(174, 171, 152, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(69, 190, 252, 90)',
					'rgba(213, 185, 66, 90)',
					'rgba(0, 21, 20, 90)',
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
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)',
					'rgba(0, 21, 20, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				borderColor: [
					'rgba(24, 42, 51, 1)',
					'rgba(76, 91, 92, 1)',
					'rgba(174, 171, 152, 1)',
					'rgba(229, 90, 124, 1)',
					'rgba(69, 190, 252, 1)',
					'rgba(213, 185, 66, 1)',
					'rgba(0, 21, 20, 1)',
					'rgba(85, 5, 39, 1)',
					'rgba(164, 3, 31, 1)',
					'rgba(10, 46, 54, 1)'
				],
				hoverBackground: [
					'rgba(24, 42, 51, 10)',
					'rgba(76, 91, 92, 10)',
					'rgba(174, 171, 152, 90)',
					'rgba(229, 90, 124, 90)',
					'rgba(69, 190, 252, 90)',
					'rgba(213, 185, 66, 90)',
					'rgba(0, 21, 20, 90)',
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


	var ctx = document.getElementById("myChart6").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
			datasets: [{
				label: '# of Votes',
				data: [12, 19, 3, 5, 2, 3],
				backgroundColor: [
					'rgba(255, 99, 132, 0.4)',
					'rgba(54, 162, 235, 0.4)',
					'rgba(255, 206, 86, 0.4)',
					'rgba(75, 192, 192, 0.4)',
					'rgba(153, 102, 255, 0.4)',
					'rgba(255, 159, 64, 0.4)'
				],
				borderColor: [
					'rgba(255,99,132,1)',
					'rgba(54, 162, 235, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(75, 192, 192, 1)',
					'rgba(153, 102, 255, 1)',
					'rgba(255, 159, 64, 1)'
				],
				hoverBackgroundColor: [
					'rgba(255, 99, 132, 0.8)',
					'rgba(54, 162, 235, 0.8)',
					'rgba(255, 206, 86, 0.8)',
					'rgba(75, 192, 192, 0.8)',
					'rgba(153, 102, 255, 0.8)',
					'rgba(255, 159, 64, 0.8)'
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