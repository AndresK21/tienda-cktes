<?php
    require_once("../../app/models/database.class.php");
    require_once("../../app/helpers/component.class.php");
    include('../../app/views/dashboard/reportes/ventas_fecha_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/detalle_carrito.class.php");
    $detalle = new Detalle;

    $fech1 = date_create($_POST['fecha_11']);
    $fech2 = date_create($_POST['fecha_22']);

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de ventas desde '.date_format($fech1 , 'd/m/Y').' al '.date_format($fech2, 'd/m/Y'));
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Nombre', 'Fecha', 'Cantidad', 'Precio', 'Venta');
    // Carga de datos

    if($_POST['fecha_22'] <= $_POST['fecha_11']){
        Component::showMessage(3, "Por favor ingrese datos validos", "index.php");
    }else if($_POST['fecha_11'] = null || $_POST['fecha_22'] = null || $_POST['fecha_11'] = "" || $_POST['fecha_22'] = ""){
        Component::showMessage(3, "Los campos no pueden estar vacios", "index.php");
    }else{
        $result = $detalle->getVentasFecha($_POST['fecha_11'], $_POST['fecha_22']);
    }

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>