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
			$this->Cell(120,10, 'REPORTE DE CREDITOS',0,0,'C');
			$this->Ln(20);
		}
		
		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','I', 5);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}		
	}
//@$id = $_GET['id'];

	
	$query = "SELECT id, valor, articulo, fecha, descripcion, nombre, apellido, cedula, direccion, telefono, cargo, vivienda, fpago, nombref, apellidof, direccionf, telefonof, nombrep, apellidop, direccionp, telefonop, nombrec, apellidoc, cedulac, direccionc, telefonoc, nombrecf, apellidocf, direccioncf, telefonocf, nombrecp,  apellidocp, direccioncp, telefonocp FROM creditos ";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(116,236,104);
	$pdf->SetFont('Arial','B',8);
	$pdf->Cell(10,6,'ID',0,0,'C',1);
	$pdf->Cell(15,6,'VALOR',0,0,'C',1);
	$pdf->Cell(17,6,'ARTICULO',0,0,'C',1);
	$pdf->Cell(37,6,'FECHA',0,0,'C',1);
	$pdf->Cell(15,6,'DESCRIPCION',0,0,'C',1);
	$pdf->Cell(30,6,'NOMBRE',0,0,'C',1);
	$pdf->Cell(20,6,'APELLIDO',0,0,'C',1);
	$pdf->Cell(15,6,'CEDULA',0,0,'C',1);
	$pdf->Cell(20,6,'DIRECCION',0,1,'C',1);
	

	$pdf->SetFont('Arial','',7);	

	while($row = $resultado->fetch_assoc())
	{
		
		$pdf->Cell(10,6,$row['id'],0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['valor']),0,0,'C');
		$pdf->Cell(17,6,utf8_decode($row['articulo']),0,0,'C');
		$pdf->Cell(37,6,utf8_decode($row['fecha']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['descripcion']),0,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['nombre']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['apellido']),0,0,'C');
		$pdf->Cell(15,6,utf8_decode($row['cedula']),0,0,'C');
		$pdf->Cell(20,6,utf8_decode($row['direccion']),0,1,'C');
		//$pdf->Cell(20,6,utf8_decode($row['direccion']),0,1,'C');

	}
	$pdf->Output();
; 