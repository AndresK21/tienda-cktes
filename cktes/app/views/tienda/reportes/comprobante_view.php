<?php
//Comprobante class, aquí se  encuentran todas las funciones necesarias para la creación de los comprobantes de compra
	require '../../app/helpers/fpdf.php';
	
    class COMP extends FPDF
	{
        /*Función header. En esta función se colocan todos los elementos que contendrá el header del comprobante
        que se repetirá en todas las páginas existentes del mismo. El encabezado contiene una imagen, el logo,
        nombre de la empresa y el titulo de "comprobante de compra"
         */
		function Header()
        {   /*en la función "IMAGE" se coloca la ruta de la imagen que se desea, ubicación en "x" y "y", el tamaño de esta
            Image(string file [, float x [, float y [, float w [, float h [, string type [, mixed link]]]]]])  */
			//$this->Image('../web/images/logo/triang.png', 0, 0, 220,200 );
           // $this->Image('../web/images/logo/logo.png', 2, 2, 25 );
            /*en la función SETFONT se coloca el tipo, el estilo y el tamaño de la letra que se desea
             SetFont(family, style, size) */
            $this->SetFont('Arial','B',18);
            /* Función SETTEXTCOLOR sirve para cambiar el color de la letra, ya que el color predeterminado es negro
            SetTextColor(r,g,b) */
            $this->SetTextColor(24,158,197);
            // Función LN sirve para dar un salto de línea
            $this->Ln(7);
            //Se agrega una celda en blanco para que el texto no quede sobre el logo
            $this->Cell(30);
            /* La función  cell sirve para colocar contenido. 
            0- No se incluyen las propiedades
            1- se incluye
             Cell(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link]]]]]]])
            */
            $this->Cell(120,8, 'C K T - E S',0,1,'C');	
            $this->Cell(30);
            $this->SetTextColor(88,88,88);
            $this->Cell(120,10, 'Comprobante de compra',0,1,'C');	
			$this->Ln(5);
		}
		/*Función footer. En esta función se colocan todos los elementos que contendrá el footer del comprobante
        que se repetirá en todas las páginas existentes del mismo. El pie de pagina contiene el día, la hora de impresióny 
        cuantas paginas  existen. 
         */
		function Footer()
		{  // $this->Image('../web/images/logo/trian.png', 0, 261, 220,200 );
			date_default_timezone_set("America/El_Salvador");
			$this->SetY(-15);
			$this->SetFont('Arial','I', 8);
			$this->Cell(0,10,'Fecha de impresion '.date('d/m/Y').' a las '.date("h:i:s"),0,0,'L');
			$this->Cell(0,10, 'Pagina '.$this->PageNo(),0,0,'R' );
			
        }
        /*En la función  IMPROVEDTABLE se coloca un ciclo para poder obtener los datos de la base de datoS.
        Se obtiene el nombre del juguete, precio y cantidad en una compra realizada. De igual manera, se saca el subtototal y el total 
        de dicha compra. */	
        // Una tabla m�s completa
        function ImprovedTable($header, $result)
        {   
            // Se crea un arreglo que contenga la anchuras de las columnas
            $w = array(70, 35, 35, 40);
            // Cabeceras
            for($i=0;$i<count($header);$i++)
                $this->Cell($w[$i],7, $header[$i],'B',0,'C');
                $this->Ln();
            // En esta sección de obtienen los datos
            $total= 0;
            foreach($result as $row)
            {
                $this->Cell($w[0],6,$row['nombre'],0,0,'C');
                $this->Cell($w[1],6,$row['precio_total'],0,0,'C');
                $this->Cell($w[2],6,$row['cantidad'],0,0,'C');
                $subtotal= $row['precio_total']* $row['cantidad'];
                $total+=$subtotal;
                $this->Cell($w[3],6,$subtotal,0,0,'C');
                $this->Ln();
            }
                $this->Ln(8);
                $this->SetFont('Courier','B',11);
                $this->Cell(0,10, 'Total: '.$total, 0,1,'R' );

                
        }
        
    
	}
?>