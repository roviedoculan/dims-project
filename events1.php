<html>

<head>
	<title>Barangay Events - Barangay 455 DIMS</title>
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
				<a href="events1.php" style="text-decoration:none; font-family:bebas; padding:30px"><font size="3" color="#fefcd7">Cancel</font></a></center>
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
		<a href="#signup-box" class="signup-window" style="font-size: 12px; text-decoration:none; font-family:segoe UI; color: #fefcd7; position: fixed; right: 42px; top: 3px;" type="button">Signup  |</a>
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
				<center><input type="image" src="images/ok.jpg" alt="submit" style="padding:0 50px 0 50px"></input><a href="events1.php"><img src="images/cancel.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	<bodyheader>Barangay Events</bodyheader>
	<desc style="top:-5px;left:7.5%;"><ul> Here are the past and ongoing events within the barangay:</ul></desc>
	</div>
	
	<div class="head3" style="top:200px;height:3000px">
	<!-- start accordion -->
		<div id="accordion">
			<h2><center>2013</center></h2>
			<div id="subaccordion" class="pane" style="display:block">
				<h4><center>March</center></h4>
				<div class="subpane">
					<center><eventheader> Cleaning of Canal</eventheader><br>
					<desc> Held on March 1 from 5:45am to 12:30pm </desc><br>
					<img src="images/cleaning.jpg" style="position:relative;width:47%;height:300px;display:inline;"><br>
					<br>
					<eventheader> Gift Giving to Seniors and Raffle Draw</eventheader><br>
					<desc> Held on March 4 from 9:30am to 4:30pm </desc><br>
					<img src="images/giving.jpg" style="position:relative;width:47%;height:300px;"><br></center>
				</div>
				<h4><center>February</center></h4>
				<div class="subpane">
					<center><eventheader> General Meeting </eventheader><br>
					<desc> Held on February 7 from 8:30am to 8:30pm </desc><br>
					<img src="images/meeting.jpg" style="position:relative;width:47%;height:300px;display:inline;"><br>
					</center>
				</div>
				<h4><center>January</center></h4>
				<div class="subpane">
					<center><eventheader> New Year Party </eventheader><br>
					<desc> Held on January 3 from 8:15am to 9:30pm </desc><br>
					<img src="images/party.jpg" style="position:relative;width:47%;height:300px;display:inline;"><br>
					</center>
				</div>
			</div>
			<h2><center>2012</center></h2>
			<div id="subaccordion" class="pane">
				<h5><center>December</center></h5>
				<div class="subpane"></div>
				<h5><center>November</center></h5>
				<div class="subpane"></div>
				<h5><center>October</center></h5>
				<div class="subpane"></div>
				<h5><center>September</center></h5>
				<div class="subpane"></div>
				<h5><center>August</center></h5>
				<div class="subpane"></div>
			</div>
		</div>	
	</div>

	<!-- activate tabs with JavaScript -->
	<script type="text/javascript" src="scripts/acc.js"></script>
	<script type="text/javascript">
	$(function() {
	    $("#accordion").tabs(
	    "#accordion div.pane",
	    {tabs: 'h2', effect: 'slide', initialIndex: null}
		);
		$("#accordion").tabs(
	    "#accordion div.subpane",
	    {tabs: 'h4', effect: 'slide', initialIndex: null}
		);
		$("accordion").tabs(
	    "#accordion div.subpane",
	    {tabs: 'h5', effect: 'slide', initialIndex: null}
		);
	});
	</script>

	</div>
	
</BODY>
</HTML>