<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/ventas_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/detalle_carrito.class.php");
    $detalle = new Detalle;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de productos');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Nombre', 'Fecha', 'Cantidad', 'Precio', 'Venta');
    // Carga de datos
    $result = $detalle->getVentas();

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>