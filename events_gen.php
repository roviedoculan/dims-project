<?php
require("fpdf.php");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetTopMargin(1);
$pdf->SetLeftMargin(1);
$pdf->SetRightMargin(1);

$pdf->SetFont('Helvetica','B',24);
$pdf->SetY(20);
$pdf->Cell(0,10,'List of Barangay Events', 0,0,'C');
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
$pdf->SetX(30);
$pdf->SetTopMargin(30);
$pdf->SetFont('Helvetica','',8);

$header = array('Name', 'Time', 'Venue', 'Person-In-Charge', 'Description');
$w = array(90, 45, 45, 90, 90);

$con = mysql_connect("localhost","root","");
mysql_select_db("dims", $con);
$sql = "SELECT * FROM events";
$result = mysql_query($sql);

while($row=mysql_fetch_array($result)){
	if($row['start_year'] == date("Y") || $row['end_year'] == date("Y")){
		$pdf->Ln();	
		$pdf->SetX(30);
		$pdf->Cell(20,7,'Name: ',0,0,'L');
		$pdf->SetX(30);
		$pdf->Cell(230,7, $row['name'],1,0,'C');
		$pdf->Ln();	
		$pdf->SetX(30);
		$pdf->Cell(115,7,'Time: ',1,0,'L');
		$pdf->SetX(30);
		$pdf->Cell(20,7,$row['start_month'],0,0,'R');
		$pdf->Cell(5,7,$row['start_day'],0,0,'C');
		$pdf->Cell(10,7,$row['start_year'],0,0,'C');
		$pdf->Cell(2,7,$row['start_hr'],0,0,'C');
		$pdf->Cell(2,7,':' ,0,0,'C');
		$pdf->Cell(2,7,$row['start_min'],0,0,'C');
		$pdf->Cell(8,7,$row['start_apm'],0,0,'C');
		$pdf->Cell(5,7,'-' ,0,0,'C');
		$pdf->Cell(10,7,$row['end_month'],0,0,'C');
		$pdf->Cell(5,7,$row['end_day'],0,0,'C');
		$pdf->Cell(10,7,$row['end_year'],0,0,'C');
		$pdf->Cell(2,7,$row['end_hr'],0,0,'C');
		$pdf->Cell(2,7,':' ,0,0,'C');
		$pdf->Cell(2,7,$row['end_min'],0,0,'C');
		$pdf->Cell(8,7,$row['end_apm'],0,0,'C');
		$pdf->SetX(145);
		$pdf->Cell(20,7,'Venue: ',0,0,'L');
		$pdf->SetX(145);
		$pdf->Cell(115,7,$row['venue'],1,0,'C');
		$pdf->Ln();	
		$pdf->SetX(30);
		$pdf->Cell(20,7,'Person-In-Charge: ',0,0,'L');
		$pdf->SetX(30);
		$pdf->Cell(230,7, $row['person'],1,0,'C');
		$pdf->Ln();	
		$pdf->SetX(30);
		$pdf->Cell(20,7,'Description: ',0,0,'L');
		$pdf->SetX(30);
		$pdf->Cell(230,7, $row['description'],1,0,'C');
		$pdf->Ln();$pdf->Ln();
	}
}


  
mysql_close($con);
$pdf->Output();

?>
