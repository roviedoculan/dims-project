<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

	$total = $_POST['cost'] * $_POST['denum'];

$delete = $_GET['id'];
$prevchoice = $_GET['choice'];

if($prevchoice == 'Assets'){
$q="DELETE FROM fin WHERE name='".$delete."'";
}else{
$q="DELETE FROM findims WHERE name='".$delete."'";

}



if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

if($prevchoice == 'Assets'){
$sql="INSERT INTO fin
	VALUES
	('$_POST[choice]', '$_POST[name]','$_POST[denum]', '$_POST[cost]', '$total', '$_POST[acqr_month]', '$_POST[acqr_day]', '$_POST[acqr_year]', '$_POST[person]')";
}else{
$sql="INSERT INTO findims
	VALUES
	('$_POST[choice]', '$_POST[name]','$_POST[denum]', '$_POST[cost]', '$total', '$_POST[acqr_month]', '$_POST[acqr_day]', '$_POST[acqr_year]', '$_POST[person]')";
	
}


if (!mysql_query($sql,$con)) {
	die('Error: ' . mysql_error());
}

header("location: fin2.php");
	
mysql_close($con);
	
?>
