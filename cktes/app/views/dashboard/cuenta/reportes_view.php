<div class="left-align"><a href='index.php' class='waves-effect waves-light tooltipped' data-tooltip='Volver'><i class='material-icons blue-grey-text text-darken-4 medium prefix'>arrow_back</i></a></div>
<div class="center-align colorNaLe"><h3>REPORTES</h3></div>
<div class="white-text">.</div>

<div class='row'>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/empleados.php' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de empleados'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de empleados</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/clientes.php' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de clientes</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/productos.php' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de productos'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Lista de productos</h5></div>
	</div>
</div>

<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="row">
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/ventas.php' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de ventas'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Reporte de ventas</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/cliente_ventas.php' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de clientes'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Clientes con m&aacute;s compras</h5></div>
	</div>
	<div class='col s12 m4 l4'>
		<?php
			print("
			<div class='center-align'>
				<a href='../reportes/importaciones.php' target='_blank' class='waves-effect waves-light tooltipped' data-tooltip='Generar reporte de importaciones'><i class='material-icons blue-grey-text text-darken-4 large prefix'>content_paste</i></a>
			</div>
			");
		?>
		<div class="center-align"><h5>Importaciones pendientes</h5></div>
	</div>
</div>


<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>
<div class="white-text">.</div>

<div class="row">
	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Ventas por fecha</h5></div>
		<form method='post' action='../reportes/ventas_fecha.php'>
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
					<button type='submit' name='reporte6' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Generar reporte de ventas'><i class='material-icons white-text large prefix'>content_paste</i></button>
				</div>
			</div>
			
		</form>
		
	</div>

	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Productos por marca</h5></div>
		<form method='post' action='../reportes/productos_categoria.php'>
			<div class='row'>
				<div class="input-field col s12">
					<?php
						Page::showSelect("Marca", "marca", $producto->getId_marca(), $producto->getMarcas());
					?>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte7' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar la marca'><i class='material-icons white-text large prefix'>content_paste</i></button>
				</div>
			</div>
			
		</form>
		
	</div>

	<div class='col s12 m4 l4'>
		<div class="center-align"><h5>Empleados por tipo</h5></div>
		<form method='post' action='../reportes/empleado_tipo.php'>
			<div class='row'>
				<div class="input-field col s12">
					<?php
						Page::showSelect("Tipo de empleado", "permiso", $empleado->getId_permiso(), $empleado->getPermisos());
					?>
				</div>
				<div class='center-align'>
					<button type='submit' name='reporte8' class='btn grey darken-3 waves-effect tooltipped' data-tooltip='Ingresar el tipo de empleado'><i class='material-icons white-text large prefix'>content_paste</i></button>
				</div>
			</div>
			
		</form>
		
	</div>
</div>

<div class="white-text">.</div>
<div class="white-text">.</div>