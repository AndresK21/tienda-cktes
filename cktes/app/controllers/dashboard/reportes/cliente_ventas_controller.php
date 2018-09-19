<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/cliente_ventas_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/detalle_carrito.class.php");
    $detalle = new Detalle;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF('L', 'mm', 'Letter');
    $pdf->setTitle('Reporte de clientes');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Cliente', 'Correo electronico', 'Producto mas comprado', 'Cantidad');
    // Carga de datos
    $result = $detalle->cliente_ventas();

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>