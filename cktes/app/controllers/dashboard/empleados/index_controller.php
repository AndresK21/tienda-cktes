<?php
require_once("../../app/models/productos.class.php");
require_once("../../app/models/empleado.class.php");
require_once("../../app/models/placa.class.php");
require_once("../../app/models/tipo_producto.class.php");

$producto = new Producto;
$empleado = new Empleado;
$placa = new Placa;
$importacion = new Tipo_producto;

require_once("../../app/views/dashboard/cuenta/index_view.php");
?>