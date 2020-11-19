<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = mysql_real_escape_string($_POST['delete_id']);
$q="DELETE FROM materials WHERE id='".$delete."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}
header('Location: inventory2_materials.php');
	
mysql_close($con);
	
?>
