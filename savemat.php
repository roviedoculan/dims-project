<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = $_GET['id'];
$q="DELETE FROM materials WHERE id='".$delete."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

	$sql="INSERT INTO materials
	VALUES
	('$_POST[id]','$_POST[name]','$_POST[amt]','$_POST[pic]','$_POST[pic_contact]','$_POST[desc]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	header("location: inventory2_materials.php");
	
	mysql_close($con);
	
?>
