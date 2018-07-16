<?php
    require("../../app/helpers/fpdf.php");

    class PDF extends FPDF
    {
        // Cabecera de p�gina
        function Header()
        {
            $fech1 = date_create($_GET['fech1']);
            $fech2 = date_create($_GET['fech2']);

            // Logo
            $this->Image('../../web/img/logo.png',10,8,23);
            // Arial bold 15
            $this->SetFont('Arial','B',18);
            // Movernos a la derecha
            $this->Cell(80);
            // T�tulo
            $this->Cell(35,10,'Ventas desde '.date_format($fech1 , 'd-m-Y').' al '.date_format($fech2, 'd-m-Y'),0,0,'C');
            // Salto de l�nea
            $this->Ln(20);
        }

        // Pie de p�gina
        function Footer()
        {
            date_default_timezone_set("America/El_Salvador");
            $hoy = getdate();
            // Posici�n: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // N�mero de p�gina
            $this->Cell(0,10,'Reporte generado por '.$_GET['id'].' '.$_GET['id2'].' a las '.$hoy['hours'].':'.$hoy['minutes'].' del '.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'],0,0);
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
        }
        // Una tabla m�s completa
        function ImprovedTable($header, $result)
        {   
            $total = null;
            $fecha = null;
            // Colores, ancho de línea y fuente en negrita
            $this->SetFillColor(14,28,44);
            $this->SetTextColor(255);
            $this->SetDrawColor(14,28,44);
            $this->SetLineWidth(.3);
            $this->SetFont('','B');
            // Anchuras de las columnas
            $w = array(75, 27, 25, 25, 25);
            // Cabeceras
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7, $header[$i] ,1,0,'C', true);
            $this->Ln();

            // Restauración de colores y fuentes
            $this->SetFillColor(214,214,214);
            $this->SetTextColor(0);
            $this->SetFont('');
            // Datos
            $fill = false;
            foreach($result as $row)
            {
                $fecha = date_create($row['fecha']);

                $this->Cell($w[0],6,$row['nombre'],'LR',0,'L',$fill);
                $this->Cell($w[1],6,date_format($fecha, 'd-m-Y'),'LR',0,'L',$fill);
                $this->Cell($w[2],6,$row['cant'],'LR',0,'L',$fill);
                $this->Cell($w[3],6,'$'.$row['precio'],'LR',0,'L',$fill);
                $this->Cell($w[4],6,'$'.number_format($row['venta'], 2),'LR',0,'L',$fill);

                $total = $total + $row['venta'];
                $this->Ln();
                $fill = !$fill;
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');

            $this->Ln();
            $this->Cell($w[0],0,null,'LR');
            $this->Cell($w[1],0,null,'LR');
            $this->Cell($w[2],0,null,'LR');
            $this->Cell($w[3],7,'Total:','LB',0,'R',$fill);

            $total = number_format($total, 2);

            $this->Cell($w[4],7,'$'.$total,'RB',0,'L',$fill);
        }
    }
?>