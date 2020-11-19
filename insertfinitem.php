<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else{
	mysql_select_db("dims", $con);

	$total = $_POST['cost'] * $_POST['denum'];
	$choice1 =  $_POST['choice'];
	
	if($choice1 == 'Assets'){
	$sql="INSERT INTO fin (choice, name, cost, denum, total, acqr_month, acqr_day, acqr_year, person)
	VALUES
	('$_POST[choice]','$_POST[name]','$_POST[cost]','$_POST[denum]','$total', '$_POST[acqr_month]', '$_POST[acqr_day]', '$_POST[acqr_year]', '$_POST[person]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}

	
	}else{
	$sql="INSERT INTO findims (choice, name, cost, denum, total, acqr_month, acqr_day, acqr_year, person)
	VALUES
	('$_POST[choice]','$_POST[name]','$_POST[cost]','$_POST[denum]','$total', '$_POST[acqr_month]', '$_POST[acqr_day]', '$_POST[acqr_year]', '$_POST[person]')";

	if (!mysql_query($sql,$con)) {
		die('Error: ' . mysql_error());
	}
	
	
	
	}
	
	
	header("location: fin2.php");
	
	
	mysql_close($con);
}
?>
