<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/empleados_tipo_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/reservaciones.class.php");
    $reservacion = new Reservacion;
    $importacion = new Importacion;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de importaciones');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Cliente', 'Producto', 'Tipo de usuario', 'Correo electronico');
    // Carga de datos
    if($_GET['permis'] == 1){
        $result = $reservacion->getReservacionR();
    }else if($_GET['permis'] == 2){
        $result = $importacion->getImportacion();
    }

    

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>