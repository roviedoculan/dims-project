<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete_m = mysql_real_escape_string($_POST['delete_month']);
$delete_d = mysql_real_escape_string($_POST['delete_date']);
$delete_y = mysql_real_escape_string($_POST['delete_year']);
$delete_t = mysql_real_escape_string($_POST['delete_title']);
$delete_de = mysql_real_escape_string($_POST['delete_desc']);
$q="DELETE FROM activities WHERE month='".$delete_m."' AND date='".$delete_d."' AND year='".$delete_y."' AND title='".$delete_t."' AND description='".$delete_de."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}
header('Location: calendar2.php');
	
mysql_close($con);
	
?>
