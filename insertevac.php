<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else {

	mysql_select_db("dims", $con);

	$sql="INSERT INTO evac (name, location, description)
	VALUES
	('$_POST[name]','$_POST[location]','$_POST[description]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	header("location: evac2.php");
	
	mysql_close($con);
}	
?>
