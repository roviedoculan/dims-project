<?php
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

else{
	mysql_select_db("dims", $con);
}

header("location: fin2.php");
mysql_close($con);
}
?>