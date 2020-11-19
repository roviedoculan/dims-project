<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = $_GET['id'];
$q="DELETE FROM evac WHERE name='".$delete."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}


$sql="INSERT INTO evac
	VALUES
	('$_POST[name]','$_POST[location]','$_POST[description]')";

if (!mysql_query($sql,$con)) {
	die('Error: ' . mysql_error());
}

header("location: evac2.php");
	
mysql_close($con);
	
?>
