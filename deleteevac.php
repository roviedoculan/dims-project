<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = mysql_real_escape_string($_POST['delete_id']);
$q="DELETE FROM evac WHERE name='".$delete."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}
header('Location: evac2.php');
	
mysql_close($con);
	
?>
