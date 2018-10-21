<?php
    require_once("../../app/models/database.class.php");
    include('../../app/views/dashboard/reportes/productos_categoria_view.php');
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/productos.class.php");
    $producto = new Producto;

    // Creaci�n del objeto de la clase heredada
    $pdf = new PDF('L', 'mm', 'Letter');
    $pdf->setTitle('Reporte de productos');
    $pdf->setMargins(10, 10, 10, 10);
    // T�tulos de las columnas
    $header = array('Nombre del producto', 'Presentacion', 'Precio', 'Cantidad', 'Proveedor', 'Tipo de producto');
    // Carga de datos

    $result = $producto->getProductoMarca($_POST['marca']);
    $nomMarca = $producto->getNombreMarca($_POST['marca']);
    foreach($nomMarca as $nom){
        $_SESSION['nomMarca'] = $nom;
    }

    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','',12);
    $pdf->ImprovedTable($header,$result);
    $pdf->Output();
?>