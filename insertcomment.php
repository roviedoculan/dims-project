<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else {

	mysql_select_db("dims", $con);

	$sql="INSERT INTO com (name, comment)
	VALUES
	('$_POST[name]','$_POST[comment]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	header("location: comments1.php");
	
	mysql_close($con);
}	
?>

