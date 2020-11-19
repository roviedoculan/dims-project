<html>

<head>
	<title>Comments - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
	<script type="text/javascript">
		function waitApproval() {
			return confirm('Your comment is now awaiting moderator\'s approval.');
		}
</script>
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
			<li><a href="fin1.php" class="slowhover" style="position: fixed; left: 497px; top: 40px;">Financial Report</a></li>
			

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
		<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font face=verdana; color: #fefcd7; position: fixed; right: 10px; top: 3px;" type="button">Login</a>
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
				<center><a href="main2.php" style="text-decoration:none; font-family:bebas; padding:30px"><font size="3" color="#fefcd7">OK</font></a><a href="comments1.php" style="text-decoration:none; font-family:bebas; padding:30px"><font size="3" color="#fefcd7">Cancel</font></a></center>
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
		<a href="#signup-box" class="signup-window" style="font-size: 12px; text-decoration:none; font face=verdana; color: #fefcd7; position: fixed; right: 42px; top: 3px;" type="button">Signup  |</a>
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
				<center><input type="image" alt="submit" style="background:url('images/ok.png'); "></input></a>
				<a href="comments1.php" style="text-decoration:none; font-family:bebas; padding:0 60px 0 60px"><font size="3" color="#fefcd7">Cancel</font></a></center>
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
	
		<!--add resident popup-->
		<div id="addresident-box" class="addresident-popup">
		<a href="#" class="close"><img src="images/websover_x.jpg" class="btn_close" title="Close Window" alt="Close" /></a>
			<form method="post" class="signin" action="insertcomment.php" onsubmit="return waitApproval(this);">
				

				<fieldset class="textbox">
				
				<label class="commentname" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Name</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;" name="name">
				
				<label class="commenttext" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Type your comment</span>
				</label>
				<textarea name="comment" style="width:326px;height:150px;color:black;font-family:Arial"></textarea>
				
				<br></br>
				<center><input type="submit"></center>
				
				</fieldset>
			</form>
		</div>



	<script type="text/javascript" src="scripts/loginbutton.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
				$('a.addresident-window').click(function() {
						
					//Getting the variable's value from a link 
					var addeventBox = $(this).attr('href');

					//Fade in the Popup
					$(addeventBox).fadeIn(300);
						
					//Set the center alignment padding + border see css style
					var popMargTop = ($(addeventBox).height() + 24) / 2; 
					var popMargLeft = ($(addeventBox).width() + 24) / 2; 
						
					$(addeventBox).css({ 
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
				  $('#mask , .addresident-popup').fadeOut(300 , function() {
					$('#mask').remove();  
				}); 
				return false;
				});
			});
	</script>




	<div class="head2" style="height:3000px"></div>
	
	<div class="head4">
	<bodyheader>Comments Section</bodyheader>
	<desc style="top:-5px;left:7.5%;"><ul> Comments left by visitors. You can add your own comment too! </ul></desc>
	</div>
	<div class="head3" style="height:3000px; top:200px; background-color:#fefcd7;">
	<div class="editbar">
	
	
	<a href="#addresident-box" class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 728px; top: -13px;"><img src="images/addres.png"></a>
	<a class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 728px; top: -21px;">ADD COMMENT</a>		
	</div>



	<div class="head5" style="height:3000px">




		<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);

		$result = mysql_query("SELECT * FROM com");

		while($row = mysql_fetch_array($result)) {
		$key =  $row['key'];
	
			if($key == '1'){
				echo "<div style=\"padding: 0px 92px 0px 92px; background-color:#fefcd7;\" class=\"bubble-list\">
					<div class=\"bubble clearfix\">

						<img src=\"images/anonpic.jpg\">

						<div class=\"bubble-content\">
						<div class=\"point\"></div>";
						echo "<p>" . $row['name'] . ":</p>";
						echo "<p>" . $row['comment'] . "</p>";


				echo "</div></div></div>";

			}

		}



		mysql_close($con);
		?>




	</div></div>
	
</body>

</html>
