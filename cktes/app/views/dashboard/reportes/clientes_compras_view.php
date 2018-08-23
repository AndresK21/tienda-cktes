<?php
    require("../../app/helpers/fpdf.php");

    class PDF extends FPDF
    {
   // Cabecera de p�gina
        /*Función header. En esta función se colocan todos los elementos que contendrá el header del reporte
        que se repetirá en todas las páginas existentes del mismo. El encabezado contiene una imagen, el logo,
        nombre de la empresa y el slogan del mismo.
         */
        function Header()
        {  
            /*en la función "IMAGE" se coloca la ruta de la imagen que se desea, ubicación en "x" y "y", el tamaño de esta
            Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])  */
            //Imagen del rectangulo superior del reporte
            $this->Image('../../web/img/reporte.png', 0, 0, 220,200 );
            //Salto
            $this->Ln(15);
             //Líneas horizontales (x1,y1,x2,y2)
            $this->Line(10,25,200,25);
            $this->Line(10,46,200,46);
            // Logo
            $this->Image('../../web/img/logo.png',10,24.3,23);
            // Arial 15
            $this->SetFont('Arial','',15);
            // Movernos a la derecha
            $this->Cell(80);
            $this->Cell(40,10,'CKTE-ES, S.A DE C.V',0,1,'C');
            // Arial 15
            $this->SetFont('Arial','',13);
            // Movernos a la derecha
            $this->Cell(80);
            $this->Cell(45,10,'"Circuitos profesionales con la garantia que nadie ofrece"',0,0,'C');
            // Arial bold 15
            $this->SetFont('Arial','B',18);
            //Salto          
            $this->Ln(20);
            // Movernos a la derecha
            $this->Cell(80);
            //Titulo
            $this->Cell(40,10,'Clientes con compras mayores a '."$".$_POST['venta'],0,0,'C');
            // Salto de l�nea
            $this->Ln(15);
        
        }

           

        // Pie de p�gina
        function Footer()
        {
            session_start();
            date_default_timezone_set("America/El_Salvador");
            $hoy = getdate();
            // Posici�n: a 1,5 cm del final
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // N�mero de p�gina
            $this->Cell(0,10,'Reporte generado por '.$_SESSION['nombres2'].' '.$_SESSION['apellidos2'].' a las '.$hoy['hours'].':'.$hoy['minutes'].' del '.$hoy['mday'].'/'.$hoy['mon'].'/'.$hoy['year'],0,0);
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'R');
        }
        // Una tabla m�s completa
        function ImprovedTable($header, $result)
        {   
            // Colores, ancho de línea y fuente en negrita
            $this->SetFillColor(14,28,44);
            $this->SetTextColor(255);
            $this->SetDrawColor(14,28,44);
            $this->SetLineWidth(.3);
            $this->SetFont('','B');
            // Anchuras de las columnas
            $w = array(45, 45, 78, 25);
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
                $this->Cell($w[0],6,$row['apellidos'],'LR',0,'L',$fill);
                $this->Cell($w[1],6,$row['nombres'],'LR',0,'L',$fill);
                $this->Cell($w[2],6,$row['correo_electronico'],'LR',0,'L',$fill);
                $this->Cell($w[3],6,"$".$row['venta'],'LR',0,'L',$fill);
                $this->Ln();
                $fill = !$fill;
            }
            // L�nea de cierre
            $this->Cell(array_sum($w),0,'','T');
        }
    }
?>