<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = $_GET['id'];
$q="DELETE FROM residents WHERE rid='".$delete."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

	$sql="INSERT INTO residents
	VALUES
	('$_POST[rid]','$_POST[lastname]','$_POST[firstname]','$_POST[middlename]','$_POST[gender]','$_POST[stat]','$_POST[birthmonth]','$_POST[birthday]','$_POST[birthyear]','$_POST[tel]','$_POST[cp]','$_POST[housenum]','$_POST[streetname]','$_POST[brgy]','$_POST[district]','$_POST[city]')";

if (!mysql_query($sql,$con)) {
	die('Error: ' . mysql_error());
}

header("location: residents2.php");
	
mysql_close($con);
	
?>
