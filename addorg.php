<html>

<head>
	<title>Barangay Information - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
</head>

<body>

	<div class="mask2"></div>

	<div class="head"> 
		<a href="main2.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		<a href="main2.php" style="position: fixed; left: 1000px; top: 37px;"><img src="images/b_home.jpg" ></a>
		
		<ul class="modulemenu">
		<li><a href="#" class="slowhover" style="position: fixed; left: 1160px; top: 37px;"><img src="images/b_module.jpg" >
		<ul>
			<li><a href="edit2.php" class="slowhover" style="position: fixed; left: 54px; top: 40px;">Basic Information</a></li>
            <li><a href="calendar2.php" class="slowhover" style="position: fixed; left: 202px; top: 40px;">Calendar of Activities</a></li>
            <li><a href="events2.php" class="slowhover" style="position: fixed; left: 362px; top: 40px;">Barangay Events</a></li>
			<li><a href="fin2.php" class="slowhover" style="position: fixed; left: 497px; top: 35px;">Financial Report</a></li>
			
			<table style="position: relative; left: 570px; top: 95px;"><tr><td>
			<ul class="dropv">
				<li><a href="inventory2.php" class="slowhover" style="position: fixed; left: 632px; top: 40px;">Inventory</a>
				<ul><li><a href="inventory2_assets.php" class="slowhover">Assets</a></li>
				<li><a href="inventory2_materials.php" class="slowhover">Materials</a></li>
				</ul>
				</li>
			</ul>
			</tr></td></table>
			
			<li><a href="comments2.php" class="slowhover" style="position: fixed; left: 1154px; top: 40px;">Comments and Suggestions</a></li>
			<li><a href="residents2.php" class="slowhover" style="position: fixed; left: 733px; top: 40px;">Registered Residents</a></li>
			<li><a href="evac2.php" class="slowhover" style="position: fixed; left: 890px; top: 40px;">Evacuation Centers and Temporary Shelters</a></li>
		</ul>
		</li>
		<ul>
		
		<!-- Logout button start-->
		<div class="wrap">
		<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font face=verdana; color: #fefcd7; position: fixed; right: 10px; top: 3px;" type="button">Logout</a>
			<div id="login-box" class="login-popup">
				<font color="#fefcd7" style="font-family:bebas">LOG OUT</font>
				<hr width="300" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Are you sure?</font>
				<br>
				<br>
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="edit2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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

			echo "<a href='editadd.php' type=\"button\"><img src='images/btn_edit.png' style='float:right; padding:15px'/></a><br><br><div id=\"accordion2\"><strong><center><font size=\"5\" color=\"#000000\" style=\"font-family:verdana; padding:20px\">Barangay Information</font></center></strong><br><hr width=\"100%\" noshade color=\"#71B238\"></hr>";
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
		<strong><center><a href="addorg.php" type=\"button\"><img src='images/addres.png' style='float:right; padding:15px'/></a><br><br><font size="5" color="#000000" style="font-family:verdana; padding:20px">Organizational Chart</font></center></strong>
		<?php
			$con = mysql_connect("localhost","root","");
			if (!$con) {
				die('Could not connect: ' . mysql_error());
			}

			mysql_select_db("dims", $con);

			$result = mysql_query("SELECT * FROM org");
			
			echo "<br><hr width=\"100%\" noshade color=\"#71B238\"></hr><table class=\"hovertable\" border=\"1\" id=\"table\">
			<tr>
				<th width=\"25%\">Name</th><th width=\"10%\">Age</th><th width=\"35px\">Position</th><th width=\"30%\">Other Information</th>
			</tr>";

			while($row = mysql_fetch_array($result)) {
				echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.background='rgba(255,255,255,0.1)';\">";
				mysql_close($con);
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
				echo "<td>" . $row['position'] . "</td>";
				echo "<td>" . $row['otherinfo'] . "</td>";
			}
		?>
	</div>
	
	<!-- magic -->
	<div id="addactivity-box" class="addactivity-popup">
	<form method="post" class="signin" action="addorginfo.php">
		<font color="#fefcd7" style="font-family:bebas">ADD OFFICIAL</font>
		<hr width="320" noshade color="#71B238"></hr>
		<font type="text" size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Name:</font>
		<br>
		<center><input name="name" style="width:90%"></input></center>
		<font type="text" size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Age:</font>
		<br>
		<center><input name="age" style="width:90%"></input></center>
		<font type="text" size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Position:</font>
		<br>
		<center><input name="position" style="width:90%"></input></center>
		<font type="text" size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Other Information:</font>
		<br>
		<center><input name="otherinfo" style="width:90%"></input></center>
		<hr width="320" noshade color="71B238"></hr>
		<center><input type="image" src="images/ok.jpg" alt="submit" style="padding:0 50px 0 50px"></input><a href="edit2.php"><img src="images/cancel.png" style="padding:0 50px 0 50px"/></a></center>
	</form>
	</div>
	<script type="text/javascript" src="scripts/loginbutton.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('a.addactivity-window').click(function() {
				//Getting the variable's value from a link 
				var addactivityBox = $(this).attr('href');
				//Fade in the Popup
				$(addactivityBox).fadeIn(300);
				//Set the center alignment padding + border see css style
				var popMargTop = ($(addactivityBox).height() + 24) / 2; 
				var popMargLeft = ($(addactivityBox).width() + 24) / 2; 
				$(addactivityBox).css({ 
					'margin-top' : -popMargTop,
					'margin-left' : -popMargLeft
				});	
			});
			// When clicking on the button close or the mask layer the popup closed
			$('a.close, #mask2').live('click', function() { 
				$('#mask2 , .addactivity-popup').fadeOut(300 , function() {
					$('#mask2').remove();  
				}); 
				return false;
			});
		});
	</script>
</body>

</html>