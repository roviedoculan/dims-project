<?php
require("fpdf.php");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTopMargin(1);
$pdf->SetLeftMargin(1);
$pdf->SetRightMargin(1);

$pdf->SetFont('Helvetica','B',24);
$pdf->SetY(20);
$pdf->Cell(0,10,'Directory of Residents', 0,0,'C');
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
$pdf->SetY(7);
$pdf->SetX(4);
$pdf->SetFont('Helvetica','',8);

$header = array('Cedula Number', 'Last Name', 'First Name', 'Middle Name', 'Gender', 'Civil Status', 'Birth Date', 'Tel Number', 'Mobile Num', 'House Num', 'Street Name', 'Brgy', 'District', 'City');
$w = array(22, 23, 23, 23, 19,19,19,18,19,18,26,22,20,18);
for($i=0;$i<count($header);$i++)
    $pdf->Cell($w[$i],15,$header[$i],1,0,'C');
	
$con = mysql_connect("localhost","root","");
mysql_select_db("dims", $con);
$sql = "SELECT * FROM residents ORDER BY lastname ASC";
$result = mysql_query($sql);

while($row=mysql_fetch_array($result)){
	$pdf->Ln();	
	$pdf->SetX(4);
	$pdf->Cell(22,7,$row['rid'],1,0,'C');
	$pdf->Cell(23,7,$row['lastname'],1,0,'C');
	$pdf->Cell(23,7,$row['firstname'],1,0,'C');
	$pdf->Cell(23,7,$row['middlename'],1,0,'C');
	$pdf->Cell(19,7,$row['gender'],1,0,'C');
	$pdf->Cell(19,7,$row['stat'],1,0,'C');
	$pdf->Cell(19,7,$row['birthmonth'].'/'.$row['birthday'].'/'.$row['birthyear'],1,0,'C');
	$pdf->Cell(18,7,$row['tel'],1,0,'C');
	$pdf->Cell(19,7,$row['cp'],1,0,'C');
	$pdf->Cell(18,7,$row['housenum'],1,0,'C');
	$pdf->Cell(26,7,$row['streetname'],1,0,'C');
	$pdf->Cell(22,7,$row['brgy'],1,0,'C');
	$pdf->Cell(20,7,$row['district'],1,0,'C');
	$pdf->Cell(18,7,$row['city'],1,0,'C');
}
  
mysql_close($con);
$pdf->Output();

?>