<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/ventas_fecha_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/detalle_carrito.class.php");
    $detalle = new Detalle;

    $fech1 = date_create($_GET['fech1']);
    $fech2 = date_create($_GET['fech2']);

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de ventas desde '.date_format($fech1 , 'd-m-Y').' al '.date_format($fech2, 'd-m-Y'));
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Nombre', 'Fecha', 'Cantidad', 'Precio', 'Venta');
    // Carga de datos

    $result = $detalle->getVentasFecha($_GET['fech1'], $_GET['fech2']);

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>