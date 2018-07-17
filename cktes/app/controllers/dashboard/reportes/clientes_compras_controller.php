<?php
    require_once("../../app/models/database.class.php");
    require_once("../../app/helpers/component.class.php");
    include('../../app/views/dashboard/reportes/clientes_compras_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/detalle.class.php");
    $detalle = new Detalle;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de clientes');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Apellidos', 'Nombres', 'Correo electronico', 'Compras');
    // Carga de datos
    if($_POST['venta'] <= 0){
        Component::showMessage(3, "Por favor ingrese datos validos", "index.php");
    }else{
        $result = $detalle->clienteVenta($_POST['venta']);
    }

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>