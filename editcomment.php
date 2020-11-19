<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$edit = mysql_real_escape_string($_POST['edit_id']);

$k = 1;
$q="
UPDATE  `dims`.`com` SET  `key` = '$k' WHERE  `com`.`name` =  '$edit' 
";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

header('Location: comments2.php');


	
mysql_close($con);
	
?>
