<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/importaciones_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/reservaciones.class.php");
    require_once("../../app/models/importaciones.class.php");
    $reservacion = new Reservacion;
    $importacion = new Importacion;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de importaciones');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Cliente', 'Cantidad', 'Fecha', 'Producto');
    // Carga de datos
    $result = $reservacion->getReservacionR();

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>