<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}


	mysql_select_db("dims", $con);

	$sql="INSERT INTO assets
	VALUES
	('$_POST[id]','$_POST[name]','$_POST[amt]','$_POST[status]','$_POST[desc]','$_POST[pic]','$_POST[pic_contact]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	header("location: inventory2_assets.php");
	
	mysql_close($con);
	
?>
