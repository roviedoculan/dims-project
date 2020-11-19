<?php
require("fpdf.php");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTopMargin(1);
$pdf->SetLeftMargin(1);
$pdf->SetRightMargin(1);

$pdf->SetFont('Helvetica','B',24);
$pdf->SetY(20);
$pdf->Cell(0,10,'Financial Report', 0,0,'C');
$pdf->SetFont('Helvetica','',14);
$pdf->SetY(90);
$pdf->Cell(0,10,'Barangay 455, Zone 45', 0,0,'C');
$pdf->Ln();
$pdf->Cell(0,10,'District 5, Sampaloc', 0,0,'C');
$pdf->Ln();
$pdf->Cell(0,10,'City of Manila', 0,0,'C');
$pdf->SetY(170);
$pdf->Cell(0,10,'Updated and Compiled on '. date("Y/m/d"), 0,0,'C');

$pdf->AddPage();
$pdf->SetY(30);

$header = array('Name', 'Cost Per Item', 'Quantity', 'Total', 'Date', 'Person');
$w = array(50, 25, 25, 25, 25, 45);
$pdf->SetFont('Helvetica','B',24);
$pdf->Cell(200,7,'GENERAL EXPENSES',0,0,'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->SetX(50);
for($i=0;$i<count($header);$i++)
    $pdf->Cell($w[$i],15,$header[$i],1,0,'C');
	
$con = mysql_connect("localhost","root","");
mysql_select_db("dims", $con);
$sql = "SELECT * FROM fin";
$result = mysql_query($sql);
$gen_total = 0;
while($row=mysql_fetch_array($result)){
	if($row['acqr_year'] == date("Y")){
		$gen_total = $gen_total + $row['total'];
		$pdf->Ln();	
		$pdf->SetX(50);
		$pdf->Cell(50,7,$row['name'],1,0,'C');
		$pdf->Cell(25,7,$row['cost'],1,0,'C');
		$pdf->Cell(25,7,$row['denum'],1,0,'C');
		$pdf->Cell(25,7,$row['total'],1,0,'C');
		$pdf->Cell(25,7,$row['acqr_month'] . ' ' . $row['acqr_day'] . ' ' . $row['acqr_year'],1,0,'C');
		$pdf->Cell(45,7,$row['person'],1,0,'C');
	}
}
$pdf->Ln();$pdf->Ln();
$pdf->SetX(50);
$pdf->Cell(200,7,'Total Expenses: ' . $gen_total ,0,0,'C');


$pdf->AddPage();
$pdf->SetY(30);

$header = array('Name', 'Cost Per Item', 'Quantity', 'Total', 'Date', 'Person-In-Charge');
$w = array(50, 25, 25, 25, 25, 45);
$pdf->SetFont('Helvetica','B',24);
$pdf->Cell(230,7,'DISASTER RELATED EXPENSES',0,0,'C');
$pdf->Ln();$pdf->Ln();$pdf->Ln();
$pdf->SetFont('Helvetica','',8);
$pdf->SetX(50);
for($i=0;$i<count($header);$i++)
    $pdf->Cell($w[$i],15,$header[$i],1,0,'C');
	
$con = mysql_connect("localhost","root","");
mysql_select_db("dims", $con);
$sql = "SELECT * FROM findims";
$result = mysql_query($sql);
$dims_total = 0;
while($row=mysql_fetch_array($result)){
	if($row['acqr_year'] == date("Y")){
		$dims_total = $dims_total + $row['total'];
		$pdf->Ln();	
		$pdf->SetX(50);
		$pdf->Cell(50,7,$row['name'],1,0,'C');
		$pdf->Cell(25,7,$row['cost'],1,0,'C');
		$pdf->Cell(25,7,$row['denum'],1,0,'C');
		$pdf->Cell(25,7,$row['total'],1,0,'C');
		$pdf->Cell(25,7,$row['acqr_month'] . ' ' .  $row['acqr_day'] . ' ' .  $row['acqr_year'],1,0,'C');
		$pdf->Cell(45,7,$row['person'],1,0,'C');
	}
}
$pdf->Ln();$pdf->Ln();
$pdf->SetX(50);
$pdf->Cell(200,7,'Total Expenses: ' . $dims_total ,0,0,'C');
mysql_close($con);
$pdf->Output();

?>
