<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$n1 = mysql_real_escape_string($_POST['name1']);
$n2 = mysql_real_escape_string($_POST['name2']);
$a1 = ($_POST['age1']);
$a2 = ($_POST['age2']);
$p1 = mysql_real_escape_string($_POST['position1']);
$p2 = mysql_real_escape_string($_POST['position2']);
$o1 = mysql_real_escape_string($_POST['otherinfo1']);
$o2 = mysql_real_escape_string($_POST['otherinfo2']);

$q="UPDATE org
SET name='".$n2."', age='".$a2."', position='".$p2."', otherinfo='".$o2."'
WHERE name='$n1'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

header('Location: edit2.php');
	
mysql_close($con);
	
?>