<html>

<head>
	<title>Inventory - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
</head>

<BODY>

	<div class="head"> 
		<a href="main1.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		<a href="main1.php" style="position: fixed; left: 1000px; top: 37px;"><img src="images/b_home.jpg" ></a>
		<ul class="modulemenu">
		<li><a href="#" class="slowhover" style="position: fixed; left: 1160px; top: 37px;"><img src="images/b_module.jpg" >
		<ul>
			<li><a href="info1.php" class="slowhover" style="position: fixed; left: 54px; top: 30px;">Basic Information</a></li>
            <li><a href="calendar1.php" class="slowhover" style="position: fixed; left: 202px; top: 30px;">Calendar of Activities</a></li>
            <li><a href="events1.php" class="slowhover" style="position: fixed; left: 362px; top: 30px;">Barangay Events</a></li>
			<li><a href="fin1.php" class="slowhover" style="position: fixed; left: 497px; top: 30px;">Financial Report</a></li>
			

			<table style="position: relative; left: 570px; top: 95px;"><tr><td>
			<ul class="dropv">
				<li><a href="inventory1.php" class="slowhover" style="position: fixed; left: 632px; top: 30px;">Inventory</a>
				<ul><li><a href="inventory1_assets.php" class="slowhover">Assets</a></li>
				<li><a href="inventory1_materials.php" class="slowhover">Materials</a></li>
				</ul>
				</li>
			</ul>
			</tr></td></table>
			
			<li><a href="comments1.php" class="slowhover" style="position: fixed; left: 1154px; top: 30px;">Comments and Suggestions</a></li>
			<li><a href="residents1.php" class="slowhover" style="position: fixed; left: 733px; top: 30px;">Registered Residents</a></li>
			<li><a href="evac1.php" class="slowhover" style="position: fixed; left: 890px; top: 30px;">Evacuation Centers and Temporary Shelters</a></li>
		</ul>
		</li>
		<!-- Log-in button start-->
		<div class="wrap">
		<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font-family:segoe UI; color: #fefcd7; position: fixed; right: 10px; top: 3px;" type="button">Login</a>
			<div id="login-box" class="login-popup">
				<font color="#fefcd7" style="font-family:bebas">LOG IN</font>
				<hr width="220" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Username:</font>
				<br>
				<center><input name="username-login" style="width:90%"></center>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Password:</font>
				<br>
				<center><input name="username-login" type="password" style="width:90%"></center>
				<a href="#" style="text-decoration:none; font-family:verdana;"><font size="1" color="#fefcd7" style="font-family:verdana; padding:5px">Forgot password?</font></a>
				<hr width="220" noshade color="#71B238"></hr>
				<center><a href="main2.php" style="text-decoration:none; font-family:bebas; padding:30px"><font size="3" color="#fefcd7">OK</font></a>
				<a href="inventory1_materials.php" style="text-decoration:none; font-family:bebas; padding:30px"><font size="3" color="#fefcd7">Cancel</font></a></center>
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
		<!-- Login END-->
		
		<!-- Sign-up button start-->
		<?php
		$questions = array(
		  "nickname"=>"What was your childhood nickname?",
		  "friend"=>"What is the name of your favorite childhood friend?",
		  "sibling"=>"What is your oldest sibling's middle name?",
		  "school"=>"What school did you attend for sixth grade?",
		  "city"=>"In what city or town did your mother and father meet?"
		)
		?>
		<a href="#signup-box" class="signup-window" style="font-size: 12px; text-decoration:none; font-family:segoe UI;color: #fefcd7; position: fixed; right: 42px; top: 3px;" type="button">Signup  |</a>
			<div id="signup-box" class="signup-popup">
			<form method="post" class="signin" action="newaccount.php">
				<font color="#fefcd7" style="font-family:bebas">SIGN UP</font>
				<hr width="320" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Username:</font>
				<br>
				<center><input name="usernamesignup" style="width:90%"></center>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Password:</font>
				<br>
				<center><input name="passwordsignup" type="password" style="width:90%"></center>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Re-enter password:</font>
				<br>
				<center><input name="reenterpasssignup" type="password" style="width:90%"></center>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Email address:</font>
				<br>
				<center><input name="eaddsignup" style="width:90%"></center>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Security Question:</font>
				<br>
				<center><select name="question" id="question" style="width:90%;">
					 <option value="0" selected="selected">--- Select a question---</option>
					<?php
						foreach($questions as $key=>$value) {
							echo '<option value="'.$key.'">'.$value.'</option>';
						}
					?>
				</select></center>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Answer:</font>
				<br>
				<center><input name="answersignup" style="width:90%; z-index:99999;"></center>
				<hr width="320" noshade color="#71B238"></hr>
				<center><input type="image" src="images/ok.jpg" alt="submit" style="padding:0 50px 0 50px"></input><a href="inventory1_materials.php"><img src="images/cancel.png" style="padding:0 50px 0 50px"/></a></input></a>
			</form>
			</div>
			<script type="text/javascript" src="scripts/loginbutton.js"></script>
			<script type="text/javascript">
				$(document).ready(function() {
					$('a.signup-window').click(function() {
						
						//Getting the variable's value from a link 
						var signupBox = $(this).attr('href');

						//Fade in the Popup
						$(signupBox).fadeIn(300);
						
						//Set the center alignment padding + border see css style
						var popMargTop = ($(signupBox).height() + 24) / 2; 
						var popMargLeft = ($(signupBox).width() + 24) / 2; 
						
						$(signupBox).css({ 
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
					  $('#mask , .signup-popup').fadeOut(300 , function() {
						$('#mask').remove();  
					}); 
					return false;
					});
				});
			</script>
		<!-- Sign-up END-->
	</div>
	 
	<div class="head2" style="height:3000px"></div>
	
	<div class="head4">	
	<bodyheader>Inventory - Materials</bodyheader>
	<desc style="top:-5px;left:7.5%;"><ul> The following table contains the short-term materials the barangay has as of March 2013: </ul></desc>
	<a href="#" style="position:fixed;top:165px;left:755px;font-family:bebas;"><img src="images/search.png">
	<a href="inventory1_mat_a.php" onclick="showbyletter();" style="position:relative;top:-39px;left:775px;font-family:bebas;color:#000;padding:0 0 3px 0;">A</a>
	<a href="inventory1_mat_b.php" style="position:relative;top:-39px;left:780px;font-family:bebas;color:#000;padding:0 0 3px 0;">B</a>
	<a href="inventory1_mat_c.php" style="position:relative;top:-39px;left:785px;font-family:bebas;color:#000;padding:0 0 3px 0;">C</a>
	<a href="inventory1_mat_d.php" style="position:relative;top:-39px;left:790px;font-family:bebas;color:#000;padding:0 0 3px 0;">D</a>
	<a href="inventory1_mat_e.php" style="position:relative;top:-39px;left:795px;font-family:bebas;color:#000;padding:0 0 3px 0;">E</a>
	<a href="inventory1_mat_f.php" style="position:relative;top:-39px;left:800px;font-family:bebas;color:#000;padding:0 0 3px 0;">F</a>
	<a href="#" style="position:relative;top:-39px;left:805px;font-family:bebas;color:#000;padding:0 0 3px 0;">G</a>
	<a href="#" style="position:relative;top:-39px;left:810px;font-family:bebas;color:#000;padding:0 0 3px 0;">H</a>
	<a href="#" style="position:relative;top:-39px;left:815px;font-family:bebas;color:#000;padding:0 0 3px 0;">I</a>
	<a href="#" style="position:relative;top:-39px;left:820px;font-family:bebas;color:#000;padding:0 0 3px 0;">J</a>
	<a href="#" style="position:relative;top:-39px;left:825px;font-family:bebas;color:#000;padding:0 0 3px 0;">K</a>
	<a href="#" style="position:relative;top:-39px;left:830px;font-family:bebas;color:#000;padding:0 0 3px 0;">L</a>
	<a href="#" style="position:relative;top:-39px;left:835px;font-family:bebas;color:#000;padding:0 0 3px 0;">M</a>
	<a href="#" style="position:relative;top:-39px;left:840px;font-family:bebas;color:#000;padding:0 0 3px 0;">N</a>
	<a href="#" style="position:relative;top:-39px;left:845px;font-family:bebas;color:#000;padding:0 0 3px 0;">O</a>
	<a href="#" style="position:relative;top:-39px;left:850px;font-family:bebas;color:#000;padding:0 0 3px 0;">P</a>
	<a href="#" style="position:relative;top:-39px;left:855px;font-family:bebas;color:#000;padding:0 0 3px 0;">Q</a>
	<a href="#" style="position:relative;top:-39px;left:860px;font-family:bebas;color:#000;padding:0 0 3px 0;">R</a>
	<a href="#" style="position:relative;top:-39px;left:865px;font-family:bebas;color:#000;padding:0 0 3px 0;">S</a>
	<a href="#" style="position:relative;top:-39px;left:870px;font-family:bebas;color:#000;padding:0 0 3px 0;">T</a>
	<a href="#" style="position:relative;top:-39px;left:875px;font-family:bebas;color:#000;padding:0 0 3px 0;">U</a>
	<a href="#" style="position:relative;top:-39px;left:880px;font-family:bebas;color:#000;padding:0 0 3px 0;">V</a>
	<a href="#" style="position:relative;top:-39px;left:885px;font-family:bebas;color:#000;padding:0 0 3px 0;">W</a>
	<a href="#" style="position:relative;top:-39px;left:890px;font-family:bebas;color:#000;padding:0 0 3px 0;">X</a>
	<a href="#" style="position:relative;top:-39px;left:895px;font-family:bebas;color:#000;padding:0 0 3px 0;">Y</a>
	<a href="#" style="position:relative;top:-39px;left:900px;margin-right:450px;padding:0px;font-family:bebas;color:#000;padding:0 0 3px 0;">Z</a>
	</div>
	
	<div class="head3" style="height:3000px;">
	<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);
		
		$result = mysql_query("SELECT * FROM assets ORDER BY name asc");

		echo "<table class=\"hovertable\" border=\"1\">
		<tr>
			<th width=\"220px\">Name</th><th width=\"60px\">Amount</th><th colspan=\"2\" width=\"350px\">Person/Committee In Charge</th><th width=\"135px\">Status</th><th width=\"235px\">Description (if available)</th>
		</tr>";

		while($row = mysql_fetch_array($result)) {
			echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.backgroundColor='rgba(255,255,255,1)';\">";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['amt'] . "</td>";
			echo "<td>" . $row['pic'] . "</td>";
			echo "<td>" . $row['pic_contact'] . "</td>";
			echo "<td>" . $row['status'] . "</td>";
			echo "<td>" . $row['desc'] . "</td>";
		}

		echo "</table>";
		mysql_close($con);
	?>	
	</div>
	
</BODY>

</HTML>   