<?php
	require '../conexion/conexion.php';
    require '../fpdf/fpdf.php';
	
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../assets/img/reportes/logo/logo.png', 10, 3, 40 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Camaras',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 5);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}


	
	$query = "SELECT id, nombre, modelo, marca, referencia, color, condicion, resolucion, led, material  FROM grupo_camaras";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(116,236,104);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'ID',0,0,'C',1);
	$pdf->Cell(15,6,'MODELO',0,0,'C',1);
	$pdf->Cell(17,6,'MARCA',0,0,'C',1);
	$pdf->Cell(37,6,'REFERENCIA',0,0,'C',1);
	$pdf->Cell(15,6,'COLOR',0,0,'C',1);
	$pdf->Cell(30,6,'CONDICION',0,0,'C',1);
	$pdf->Cell(20,6,'RESOLUCIÓN',0,0,'C',1);
	$pdf->Cell(15,6,'LEDS',0,0,'C',1);
	$pdf->Cell(20,6,'MATERIAL',0,1,'C',1);
	

	$pdf->SetFont('Arial','',7);	

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(10,6,$row['id'],0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['modelo']),0,0,'C');
		$pdf->Cell(17,6,utf8_decode($row['marca']),0,0,'C');
		$pdf->Cell(37,6,utf8_decode($row['referencia']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['color']),0,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['condicion']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['resolucion']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['led']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['material']),0,1,'C');
	}
	$pdf->Output();
; 