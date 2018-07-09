<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/clientes_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/cliente.class.php");
    $cliente = new Cliente;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de clientes');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Apellidos', 'Nombres', 'Correo electronico');
    // Carga de datos
    $result = $cliente->getClientes();

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>