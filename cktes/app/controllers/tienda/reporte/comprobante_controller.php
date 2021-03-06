<?php
/* En este controlador se ponen todos los datos que contiene el comprobante de compra*/
    include '../../app/views/tienda/reportes/comprobante_view.php';
    require_once("../../app/models/database.class.php");
    require_once("../../app/helpers/validator.class.php");
    require_once("../../app/models/detalle.class.php");
    
    $detalles = new DetalleCliente;
    
	// L- Landscape(horizontal), mm- milimetros, A5- tamaño de la pagina
    $comp = new COMP('L', 'mm', 'A5');
    // Se especifica que contrndrá el arreglo (el nombre de las columnas)
    $header = array('Producto', 'Precio','Cantidad', 'Subtotal');
    // SetMargins(float left, float top [, float right])
    $comp->SetMargins(15,20 , 15);
    //Se añade una pagina
    $comp->AddPage();
    $comp->SetFont('Courier','B',11);
    //Se ponen el tamñano de las columnas 
    $w = array(90, 90);
    //Columnas y su información (del cliente)
    $detalles->setId_carrito($_GET['id']);
    $detalle= $detalles->getComp2();
    $result= $detalles->getComp();
    $comp->Cell($w[0],6,'Id del pedido: '.$detalle['id_carrito'],0,1,'L');
    $comp->Cell($w[0],6,'Cliente: '.$detalle['nombres'],0,1,'L');
    $comp->Cell($w[1],6,'Correo: '.$detalle['correo_electronico'],0,1,'L');         
    $comp->Cell($w[1],6, 'Fecha de compra: '.$detalle['fecha'],0,1,'L' );
    $comp->Ln(10);
    $comp->SetFont('Courier','',11);
    $comp->ImprovedTable($header,$result);
    // Sirve para que se pueda ver el pdf y se descargue
    $comp->Output();
    
?>