<HTML>

<HEAD>
<TITLE>Edit Asset - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript" src="scripts/formvalidate_asset.js"></script>
</HEAD>

<BODY>

	<body scroll="no" style="overflow: hidden">

	<div class="head"> 
		<a href="main2.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		<a href="main2.php" style="position: fixed; left: 1000px; top: 37px;"><img src="images/b_home.jpg" ></a>
		<ul class="modulemenu">
		<li><a href="#" class="slowhover" style="position: fixed; left: 1160px; top: 37px;"><img src="images/b_module.jpg" >
		<ul>
			<li><a href="edit2.php" class="slowhover" style="position: fixed; left: 34px; top: 37px;">Basic Information</a></li>
            <li><a href="calendar2.php" class="slowhover" style="position: fixed; left: 170px; top: 37px;">Calendar of Activities</a></li>
            <li><a href="events2.php" class="slowhover" style="position: fixed; left: 325px; top: 37px;">Barangay Events</a></li>
			<li><a href="fin2.php" class="slowhover" style="position: fixed; left: 456px; top: 37px;">Financial Report</a></li>
			<table style="position: relative; left: 505px; top: 95px;"><tr><td>
			<ul class="dropv">
				<li><a href="#" class="slowhover" style="position: fixed; left: 588px; top: 37px;">Inventory</a>
				<ul><li><a href="inventory2_assets.php" class="slowhover">Assets</a></li>
				<li><a href="inventory2_materials.php" class="slowhover">Materials</a></li>
				</ul>
				</li>
			</ul>
			</tr></td></table>
			
			<li><a href="residents2.php" class="slowhover" style="position: fixed; left: 680px; top: 37px;">Registered Residents</a></li>
			<li><a href="evac2.php" class="slowhover" style="position: fixed; left: 828px; top: 37px;">Evac Centers and Temporary Shelters</a></li>
			<li><a href="comments2.php" class="slowhover" style="position: fixed; left: 1060px; top: 37px;">Approve Comments</a></li>
			<li><a href="reportgen.php" class="slowhover" style="position: fixed; left: 1210px; top: 37px;">Report Generator</a></li>
		</ul>
		</li>
		<ul>
		<!-- Logout button start-->
		<div class="wrap">
				<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font-family:Segoe UI; color: #fefcd7; position: fixed; right: 30px; top: 3px;z-index:101;" type="button">Logout</a>
		<div id="login-box" class="login-popup">
				<font color="#fefcd7" style="font-family:bebas">LOG OUT</font>
				<hr width="300" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Are you sure?</font>
				<br>
				<br>
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="inventory2_assets.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
			</div>
			<script type="text/javascript" src="scripts/loginbutton.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('a.login-window').click(function() {
						
						//Getting the variable's value from a link 
						var loginBox = $(this).attr('href');

						//Fade in the Popup
						$(loginBox).fadeIn(300);
						
						//Set the center alignment padding + border see css style
						var popMargTop = ($(loginBox).height() + 24) / 2; 
						var popMargLeft = ($(loginBox).width() + 24) / 2; 
						
						$(loginBox).css({ 
							'margin-top' : -popMargTop,
							'margin-left' : -popMargLeft
						});
						
						// Add the mask to body
						$('body').append('<div id="mask"></div>');
						$('#mask').fadeIn(300);
						
						return false;
					});
					
					// When clicking on the button close or the mask layer the popup closed
					$('a.close, #mask').live('click', function() { 
					  $('#mask , .login-popup').fadeOut(300 , function() {
						$('#mask').remove();  
					}); 
					return false;
					});
				});
			</script>
		</div>
		<!-- Logout END-->
	</div>

	<div class="head2" style="height:3000px"></div>
	
	<div class="head4" style="top:142px;margin: -13px 0 -20px 0;">
	<bodyheader>Edit Inventory - Assets</bodyheader>
	</div>
	
	<div class="head3" style="height:193px; top:200px;">
	

	<?
	$con = mysql_connect("localhost","root","");

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dims", $con);

	$res_id = $_GET['id'];
	$res = mysql_query("select * from assets where id = '".$res_id."'");
	$row = mysql_fetch_assoc($res);

	echo"<form method=\"post\" action=\"saveasset.php?id=".$res_id."\" onsubmit=\"return validateForm(this);\">
		<fieldset class=\"textbox\">
				<label class=\"name\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Asset Name</span>
				</label>	
				<input type=\"text\" value=\"".$row['name']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\"name=\"name\">
				<label class=\"amt\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Current Amount</span>
				</label>	
				<input type=\"text\" value=\"".$row['amt']."\" style=\"width:100px;background-color:white;color:black;font-family:verdana\"name=\"amt\">
				<br>
				<label class=\"pic\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Name of Person/Committee In Charge of Asset</span>
				</label>		
				<input type=\"text\" value=\"".$row['pic']."\" style=\"width:226px;background-color:white;color:black;font-family:verdana\"name=\"pic\">
				<br>
				<label class=\"pic_contact\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Contact of Person/Committee In Charge of Asset</span>
				</label>	
				<input type=\"text\" value=\"".$row['pic_contact']."\" style=\"width:226px;background-color:white;color:black;font-family:verdana\"name=\"pic_contact\">
				<br>
				<label class=\"status\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Status (Ex. Good, Needs Repair, etc.)</span>
				</label>
				<input type=\"text\" value=\"".$row['status']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"status\">
				<br>
				<label class=\"desc\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Description (Optional) </span>
				</label>
				<input type=\"text\" value=\"".$row['desc']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"desc\">
				<br></br>
				<center><input type=\"submit\" value=\"Save\">
				<a href=\"inventory2_assets.php\"><input type=\"button\" name=\"cancel\" value=\"Cancel\" /></a>
				</center>
				</fieldset>
		</form>";
	
	mysql_close($con);
	
?>
	
</div>

</body>
</html>