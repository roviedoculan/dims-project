<?php
require("fpdf.php");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTopMargin(1);
$pdf->SetLeftMargin(1);
$pdf->SetRightMargin(1);

$pdf->SetFont('Helvetica','B',24);
$pdf->SetY(20);
$pdf->Cell(0,10,'Inventory: Assets', 0,0,'C');
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
$pdf->SetY(20);
$pdf->SetX(20);
$pdf->SetFont('Helvetica','',8);

$header = array('Name', 'Amount', 'Status', 'Description','Person-In-Charge (PIC)', 'PIC Contact Info');
$w = array(50, 20, 40, 70, 45, 40);
for($i=0;$i<count($header);$i++)
    $pdf->Cell($w[$i],15,$header[$i],1,0,'C');
	
$con = mysql_connect("localhost","root","");
mysql_select_db("dims", $con);
$sql = "SELECT * FROM assets";
$result = mysql_query($sql);

while($row=mysql_fetch_array($result)){
	$pdf->Ln();	
	$pdf->SetX(20);
	$pdf->Cell(50,7,$row['name'],1,0,'C');
	$pdf->Cell(20,7,$row['amt'],1,0,'C');
	$pdf->Cell(40,7,$row['status'],1,0,'C');
	$pdf->Cell(70,7,$row['desc'],1,0,'C');
	$pdf->Cell(45,7,$row['pic'],1,0,'C');
	$pdf->Cell(40,7,$row['pic_contact'],1,0,'C');
}
  
mysql_close($con);
$pdf->Output();

?>
