<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else {
	
	mysql_select_db("dims", $con);
	
	$sql="INSERT INTO accounts (username,password,email,question,answer)
	VALUES
	('$_POST[usernamesignup]','$_POST[passwordsignup]','$_POST[eaddsignup]','$_POST[question]','$_POST[answersignup]')";
	
	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}
	
	header("location: main2.php");
	
	mysql_close($con);
}	
?>
