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
			$this->Cell(120,10, 'Reporte De Computadores',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 5);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
	
	$query = "SELECT id, nombre, modelo, marca, procesador, memoria, disco_duro, monitor, pulgada, fuente  FROM grupo_computadores";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(116,236,104);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'ID',0,0,'C',1);
	$pdf->Cell(17,6,'NOMBRE',0,0,'C',1);
	$pdf->Cell(15,6,'MODELO',0,0,'C',1);
	$pdf->Cell(17,6,'MARCA',0,0,'C',1);
	$pdf->Cell(37,6,'PROCESADOR',0,0,'C',1);
	$pdf->Cell(15,6,'MEMORIA',0,0,'C',1);
	$pdf->Cell(30,6,'DISCO DURO',0,0,'C',1);
	$pdf->Cell(20,6,'MONITOR',0,0,'C',1);
	$pdf->Cell(15,6,'PULGADA',0,0,'C',1);
	$pdf->Cell(20,6,'FUENTE',0,1,'C',1);
	

	$pdf->SetFont('Arial','',7);	

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(10,6,$row['id'],0,0,'C');
		$pdf->Cell(17,6,utf8_decode($row['nombre']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['modelo']),0,0,'C');
		$pdf->Cell(17,6,utf8_decode($row['marca']),0,0,'C');
		$pdf->Cell(37,6,utf8_decode($row['procesador']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['memoria']),0,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['disco_duro']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['monitor']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['pulgada']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['fuente']),0,1,'C');
	}
	$pdf->Output();
; 