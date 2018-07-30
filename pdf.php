<?php 
	require "fpdf/fpdf.php";	
	$v2=$_GET["importeB"];
	$v1=$_GET["precioServicio"];
	$v3=$_GET["importeTotal"];
	$v4=$_GET["folio"];
	$hoy=(date("d")-1)."/".date("m")."/".date("Y");

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->Image('images/pago.png',10,10,190,170,'PNG');
	
	$pdf->SetFont("Arial","B",12);	
	/* FECHA */
	$pdf->SetXY(119,47);
	$pdf->Cell(100,10,"Fecha inicial: $hoy",0,1,'C');
	/* TOTAL BOLETO */
	$pdf->SetXY(100,85);
	$pdf->Cell(100,10,$v2,0,1,'C');
	/* TOTAL SERVICIO */
	$pdf->SetXY(100,95);
	$pdf->Cell(100,10,$v1,0,1,'C');
	/* TOTAL SERVICIO */
	$pdf->SetXY(100,105);
	$pdf->Cell(100,10,$v3,0,1,'C');
	/* FOLIO */
	$pdf->SetXY(115,70);
	$pdf->Cell(100,10,"Folio: $v4",0,1,'C');

	$pdf->OutPut();/*Para ver el pdf*/
?>