<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else {

	mysql_select_db("dims", $con);

	$sql="INSERT INTO acti (month,date,year,name,description)
	VALUES
	(0,0,'$_POST[wday]','$_POST[name]','$_POST[description]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	header("location: edit2.php");
	
	mysql_close($con);
}	
?>
