<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else {

	mysql_select_db("dims", $con);

	$sql="INSERT INTO info (infoname,infodesc)
	VALUES
	('$_POST[title]','$_POST[infodescription]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	header("location: edit2.php");
	
	mysql_close($con);
}	
?>
