<?
$con = mysql_connect("localhost","root","");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}

mysql_select_db("dims", $con);

$delete = mysql_real_escape_string($_POST['delete_id']);
$del_key = $_POST['delete_key'];


	
	if($del_key == 'DIMS'){
	$q="DELETE FROM findims WHERE name='".$delete."'";

	if (!mysql_query($q,$con)) {
		die('Error: ' . mysql_error());
	}

	
	}else{
	$q="DELETE FROM fin WHERE name='".$delete."'";

	if (!mysql_query($q,$con)) {
		die('Error: ' . mysql_error());
	}
	
	
	
	}

header('Location: fin2.php');
	
mysql_close($con);
	
?>
