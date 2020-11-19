<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$edit_m = mysql_real_escape_string($_POST['edit_month']);
$edit_d = mysql_real_escape_string($_POST['edit_date']);
$edit_y = mysql_real_escape_string($_POST['edit_year']);
$prev_t = mysql_real_escape_string($_POST['prev_title']);
$edit_t = mysql_real_escape_string($_POST['activitytitle']);
$prev_de = mysql_real_escape_string($_POST['prev_desc']);
$edit_de = mysql_real_escape_string($_POST['activitydescription']);

$q="UPDATE activities
SET title='".$edit_t."', description='".$edit_de."'
WHERE month='$edit_m' AND date='$edit_d' AND year='$edit_y' AND title='$prev_t' AND description='$prev_de'";

if (!mysql_query($q,$con)) {
	die('Error: ' . mysql_error());
}

header('Location: calendar2.php');
	
mysql_close($con);
	
?>
