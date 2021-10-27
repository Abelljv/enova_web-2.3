_<?php
	require '../conexion/conexion.php';
    require '../fpdf/fpdf.php';
	
	
	class PDF extends FPDF
	{
		function Header()
		{
			$this->Image('../../assets/img/reportes/logo/logo.png', 10, 3, 40 );
			$this->SetFont('Arial','B',15);
			$this->Cell(30);
			$this->Cell(120,10, 'Reporte De Usuario',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 5);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}


	
	$query = "SELECT nombre, apellido, cedula, correo, password, ciudad, activo  FROM user_admin";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(116,236,104);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(30,6,'NOMBRE',0,0,'C',1);
	$pdf->Cell(30,6,'APELLIDO',0,0,'C',1);
	$pdf->Cell(20,6,'CEDULA',0,0,'C',1);
	$pdf->Cell(15,6,'CORREO',0,0,'C',1);
	$pdf->Cell(30,6,'PASSWORD',0,0,'C',1);
	$pdf->Cell(20,6,'CIUDAD',0,0,'C',1);
	$pdf->Cell(15,6,'ESTADO',0,0,'C',1);
	

	$pdf->SetFont('Arial','',7);	

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(10,6,$row['id'],0,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre']),0,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['apellido']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['cedula']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['correo']),0,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['password']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['ciudad']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['estado']),0,0,'C');
	
	}
	$pdf->Output();
; 