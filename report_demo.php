<?php
require("diag.php");

$pdf = new PDF_diag();
$pdf->AddPage();
$pdf->SetTopMargin(10);
$pdf->SetLeftMargin(10);
$pdf->SetRightMargin(10);

$pdf->SetFont('Helvetica','B',16);
$pdf->Cell(0,7,'Barangay Demographic Profile', 0,0,'C');
$pdf->SetFont('Helvetica','',10);
$pdf->Ln();
$pdf->Cell(0,6,'Barangay 455, Zone 45, District 5, Sampaloc, City of Manila', 0,0,'C');
$pdf->Ln();
$pdf->Cell(0,6,'Updated and Compiled on '. date("Y/m/d"), 0,0,'C');
$pdf->Ln();
$pdf->Ln();
$pdf->SetX(10);
$pdf->MultiCell(0,5,"The following data describes the current population of the barangay based on the entries in Registered Residents module.");

$con = mysql_connect("localhost","root","");
mysql_select_db("dims", $con);

$countsql = mysql_query("SELECT * FROM residents");
$count = mysql_num_rows($countsql);
$pdf->Ln();
$pdf->SetX(10);
$pdf->Cell(0,5,'Current population of the barangay: '. $count);
$pdf->Ln();

$pdf->Ln();
$pdf->SetX(10);
$pdf->Cell(0,5,'Population Statistics:');
$pdf->Ln();
$pdf->Ln();
$pdf->SetX(18);
$pdf->Cell(0,5,'I. Gender');
$pdf->Ln();
$countsql = mysql_query("SELECT * FROM residents WHERE gender='F'");
$fcount = mysql_num_rows($countsql);
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of female residents: '. $fcount. ' or ' .round(($fcount/$count)*100, 2).'% of the population');
$pdf->Ln();
$countsql = mysql_query("SELECT * FROM residents WHERE gender='M'");
$mcount = mysql_num_rows($countsql);
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of male residents: '. $mcount. ' or ' .round(($mcount/$count)*100, 2).'% of the population');
$pdf->Ln();
$countsql = mysql_query("SELECT * FROM residents WHERE gender='Unspecified'");
$ucount = mysql_num_rows($countsql);
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents with undisclosed genders: '. $ucount. ' or ' .round(($ucount/$count)*100, 2).'% of the population');

//Bar diagram
$data = array('Females' => $fcount, 'Males' => $mcount, 'Unspecified' => $ucount);
$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->BarDiagram(190, 50, $data, '%l : %v (%p)', array(255,175,100));

$pdf->SetFont('Helvetica','',10);
$pdf->Ln(28);
$pdf->SetX(18);
$pdf->Cell(0,5,'II. Age');
$sql = "SELECT * FROM residents";
$result = mysql_query($sql);
$age_a = 0; $age_b = 0; $age_c = 0; $age_d = 0; $age_e = 0; $age_f = 0;
while($row=mysql_fetch_array($result)){
	$birthdate = $row['birthmonth']."/".$row['birthday']."/".$row['birthyear'];
	$birthDate = explode("/", $birthdate);
    $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md") ? ((date("Y")-$birthDate[2])-1):(date("Y")-$birthDate[2]));
    
	//18-24
	if (18 <= $age AND $age <= 24) $age_a = $age_a + 1;
	//25-39
	if (25 <= $age AND $age <= 39) $age_b = $age_b + 1;
	//40-54
	if (40 <= $age AND $age <= 54) $age_c = $age_c + 1;
	//55-65
	if (55 <= $age AND $age <= 65) $age_d = $age_d + 1;
	//65+
	if (65 < $age) $age_e = $age_e + 1;	
}


$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are 18-25 years old: '. $age_a. ' or ' .round(($age_a/$count)*100, 2).'% of the population');
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are 25-39 years old: '. $age_b. ' or ' .round(($age_b/$count)*100, 2).'% of the population');
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are 40-54 years old: '. $age_c. ' or ' .round(($age_c/$count)*100, 2).'% of the population');
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are 55-65 years old: '. $age_d. ' or ' .round(($age_d/$count)*100, 2).'% of the population');
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are above 65 years old: '. $age_e. ' or ' .round(($age_e/$count)*100, 2).'% of the population');

//Bar diagram
$data = array('18-25 years old' => $age_a, '25-39 years old' => $age_b, '40-54 years old' => $age_c, '55-65 years old' => $age_d, 'Above 65 years old' => $age_e);
$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->BarDiagram(190, 50, $data, '%l : %v (%p)', array(255,175,100));

$pdf->SetFont('Helvetica','',10);
$pdf->Ln(28);
$pdf->SetX(18);
$pdf->Cell(0,5,'III. Civil Status');

$countsql = mysql_query("SELECT * FROM residents WHERE stat='Single'");
$scount = mysql_num_rows($countsql);
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are single: '. $scount. ' or ' .round(($scount/$count)*100, 2).'% of the population');

$countsql = mysql_query("SELECT * FROM residents WHERE stat='Married'");
$mcount = mysql_num_rows($countsql);
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are married: '. $mcount. ' or ' .round(($mcount/$count)*100, 2).'% of the population');

$countsql = mysql_query("SELECT * FROM residents WHERE stat='Divorced'");
$dcount = mysql_num_rows($countsql);
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are divorced: '. $dcount. ' or ' .round(($dcount/$count)*100, 2).'% of the population');

$countsql = mysql_query("SELECT * FROM residents WHERE stat='Widowed'");
$wcount = mysql_num_rows($countsql);
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents who are widowed: '. $wcount. ' or ' .round(($wcount/$count)*100, 2).'% of the population');

$countsql = mysql_query("SELECT * FROM residents WHERE stat='Unspecified'");
$ucount = mysql_num_rows($countsql);
$pdf->Ln();
$pdf->SetX(25);
$pdf->Cell(0,5,'Number of residents with undisclosed civil status: '. $ucount. ' or ' .round(($ucount/$count)*100, 2).'% of the population');

//Bar diagram
$data = array('Single' => $scount, 'Married' => $mcount, 'Divorced' => $dcount, 'Widowed' => $wcount, 'Unspecified' => $ucount);
$pdf->Ln(8);
$valX = $pdf->GetX();
$valY = $pdf->GetY();
$pdf->BarDiagram(190, 50, $data, '%l : %v (%p)', array(255,175,100));

mysql_close($con);
$pdf->Output();
?>
