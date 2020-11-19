<html>

<head>
	<title>Barangay Information - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
</head>

<body>

	<div class="head"> 
		<a href="main1.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		<a href="main1.php" style="position: fixed; left: 1000px; top: 37px;"><img src="images/b_home.jpg" ></a>
		
		<ul class="modulemenu">
		<li><a href="#" class="slowhover" style="position: fixed; left: 1160px; top: 37px;"><img src="images/b_module.jpg" >
		<ul>
			<li><a href="info1.php" class="slowhover" style="position: fixed; left: 54px; top: 40px;">Basic Information</a></li>
            <li><a href="calendar1.php" class="slowhover" style="position: fixed; left: 202px; top: 40px;">Calendar of Activities</a></li>
            <li><a href="events1.php" class="slowhover" style="position: fixed; left: 362px; top: 40px;">Barangay Events</a></li>
			<li><a href="fin1.php" class="slowhover" style="position: fixed; left: 497px; top: 35px;">Financial Report</a></li>
			
			<table style="position: relative; left: 570px; top: 95px;"><tr><td>
			<ul class="dropv">
				<li><a href="inventory1.php" class="slowhover" style="position: fixed; left: 632px; top: 40px;">Inventory</a>
				<ul><li><a href="inventory1_assets.php" class="slowhover">Assets</a></li>
				<li><a href="inventory1_materials.php" class="slowhover">Materials</a></li>
				</ul>
				</li>
			</ul>
			</tr></td></table>
			
			<li><a href="comments1.php" class="slowhover" style="position: fixed; left: 1154px; top: 40px;">Comments and Suggestions</a></li>
			<li><a href="residents1.php" class="slowhover" style="position: fixed; left: 733px; top: 40px;">Registered Residents</a></li>
			<li><a href="evac1.php" class="slowhover" style="position: fixed; left: 890px; top: 40px;">Evacuation Centers and Temporary Shelters</a></li>
		</ul>
		</li>
		<ul>
		
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
				<a href="info1.php" style="text-decoration:none; font-family:bebas; padding:30px"><font size="3" color="#fefcd7">Cancel</font></a></center>
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
		<a href="#signup-box" class="signup-window" style="font-size: 12px; text-decoration:none;font-family:segoe UI; color: #fefcd7; position: fixed; right: 42px; top: 3px;" type="button">Signup  |</a>
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
				<center><input type="image" src="images/ok.jpg" alt="submit" style="padding:0 50px 0 50px"></input><a href="info1.php"><img src="images/cancel.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	
	<div class="head4"><bodyheader>Barangay Information</bodyheader></div>
	
	<div class="head6" style="height:3000px">
		<!--Contents-->
		<?php
			$con = mysql_connect("localhost","root","");
			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("dims", $con);

			$result = mysql_query("SELECT * FROM information");

			echo "<br><br><div id=\"accordion2\"><strong><center><font size=\"5\" color=\"#000000\" style=\"font-family:verdana; padding:20px\">Barangay Information</font></center></strong><br><hr width=\"100%\" noshade color=\"#71B238\"></hr>";
			//while($row = mysql_fetch_array($result)) {
				$row = mysql_fetch_array($result);
				//if($j==0) {
					echo "<br><font size=\"3\" color=\"#71B238\" style=\"font-family:bebas; padding:50px\">Address:<br><font size=\"3\" color=\"black\" style=\"font-family:verdana; padding:100px\">".$row['address']."</font>";
				//} else if ($j==1) {
					echo "<br><br><font size=\"3\" color=\"#71B238\" style=\"font-family:bebas; padding:50px\">Mission:<br><font size=\"3\" color=\"black\" style=\"font-family:verdana; padding:100px\">".$row['mission']."</font>";
				//} else if ($j==2) {
					echo "<br><br><font size=\"3\" color=\"#71B238\" style=\"font-family:bebas; padding:50px\">Objectives:<br><font size=\"3\" color=\"black\" style=\"font-family:verdana; padding:100px\">".$row['objectives']."</font>";
				//}
				//$j = $j+1;
			//}
			
			mysql_close($con);
		?>
	</div>
	
	<div class="head7" style="height:3000px">
		<!--Contents-->
		<strong><center><br><br><font size="5" color="#000000" style="font-family:verdana; padding:20px">Organizational Chart</font></center></strong>
		<?php
			$con = mysql_connect("localhost","root","");
			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("dims", $con);

			$result = mysql_query("SELECT * FROM org");
			
			echo "<br><hr width=\"100%\" noshade color=\"#71B238\"></hr><table class=\"hovertable\" border=\"1\" id=\"table\">
			<tr>
				<th width=\"20%\">Name</th><th width=\"10%\">Age</th><th width=\"15px\">Position</th><th width=\"40%\">Other Information</th>
			</tr>";

			while($row = mysql_fetch_array($result)) {
				echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.background='rgba(255,255,255,0.1)';\">";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
				echo "<td>" . $row['position'] . "</td>";
				echo "<td>" . $row['otherinfo'] . "</td>";
			}
			mysql_close($con);
		?>
	</div>
	
</body>

</html>