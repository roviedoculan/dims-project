<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = $_GET['id'];
$q="DELETE FROM events WHERE eid='".$delete."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}


	$sql="INSERT INTO events (eid,name,start_month,start_day,start_year,start_hr,start_min,start_apm,end_month,end_day,end_year,end_hr,end_min,end_apm,venue,description,person)
	VALUES
	(NULL,'$_POST[name]','$_POST[start_month]','$_POST[start_day]','$_POST[start_year]','$_POST[start_hr]','$_POST[start_min]','$_POST[start_apm]','$_POST[end_month]','$_POST[end_day]','$_POST[end_year]','$_POST[end_hr]','$_POST[end_min]','$_POST[end_apm]','$_POST[venue]','$_POST[description]','$_POST[person]')";

if (!mysql_query($sql,$con)) {
	die('Error: ' . mysql_error());
}

header("location: events2.php");
	
mysql_close($con);
	
?>
