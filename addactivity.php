<?
session_start();
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else {
	
	mysql_select_db("dims", $con);	
	
	$Cmonth = $_SESSION['Cmonth'];
	$Cyear = $_SESSION['Cyear'];
	$i2 = $_POST['activitydate2'];
	$i=$_POST['activitydate1'];
	//echo $i2;
	for ($i; $i<($i2+1); $i++) {
	
		$sql="INSERT INTO activities (month,date,year,title,description)
		VALUES
		('$Cmonth','".$i."','$Cyear','$_POST[activitytitle]','$_POST[activitydescription]')";
	
	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}
	
	
	}
	
	header("location: calendar2.php");
	
	mysql_close($con);
}	
?>
