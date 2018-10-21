<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/empleados_tipo_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/empleado.class.php");
    $empleado = new Empleado;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->setTitle('Reporte de empleados');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Apellidos', 'Nombres', 'Correo electronico');
    // Carga de datos
    $result = $empleado->getEmpleado3($_POST['permiso']);
    $nomTipo = $empleado->getNomTipo($_POST['permiso']);
    foreach($nomTipo as $nom){
        $_SESSION['nomTipo'] = $nom;
    }

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>