<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$add1 = mysql_real_escape_string($_POST['prev1']);
$add2 = mysql_real_escape_string($_POST['address']);
$m1 = mysql_real_escape_string($_POST['prev2']);
$m2 = mysql_real_escape_string($_POST['mission']);
$o1 = mysql_real_escape_string($_POST['prev3']);
$o2 = mysql_real_escape_string($_POST['objectives']);

$q="UPDATE information
SET address='".$add2."', mission='".$m2."', objectives='".$o2."'
WHERE address='".$add1."' AND mission='".$m1."' AND objectives='".$o1."'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

header('Location: edit2.php');
	
mysql_close($con);
	
?>
