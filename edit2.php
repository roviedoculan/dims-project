<html>

<head>
	<title>Barangay Information - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
</head>

<body>

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
			
			echo "<br><hr width=\"100%\" noshade color=\"#71B238\"></hr><center><table class=\"hovertable\" border=\"1\" id=\"table\" width=\"90%\">
			<tr>
				<th width=\"70%\">Name</th><th width=\"55%\">Age</th><th width=\"80%\">Position</th><th width=\"75%\">Other Information</th><th>Edit</th><th>Delete</th>
			</tr>";

			while($row = mysql_fetch_array($result)) {
				echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.background='rgba(255,255,255,0.1)';\">";
				echo "<td>" . $row['name'] . "</td>";
				echo "<td>" . $row['age'] . "</td>";
				echo "<td>" . $row['position'] . "</td>";
				echo "<td>" . $row['otherinfo'] . "</td>";
				echo "<td><center><form action=\"editinfoa.php\" method=\"post\"><input type=\"hidden\" name=\"name\" value=\"".$row['name']."\"><input type=\"hidden\" name=\"age\" value=\"".$row['age']."\"><input type=\"hidden\" name=\"position\" value=\"".$row['position']."\"><input type=\"hidden\" name=\"otherinfo\" value=\"".$row['otherinfo']."\"><input type=\"image\" alt=\"submit\" src=\"images/edit.png\" title=\"edit\"></form></a></h4></center></td>
				<td><center><form action=\"#\" method=\"post\" onsubmit=\"return confirmDelete();\"><input type=\"hidden\" name=\"name\" value=\"".$row['name']."\"><input type=\"hidden\" name=\"age\" value=\"".$row['age']."\"><input type=\"hidden\" name=\"position\" value=\"".$row['position']."\"><input type=\"hidden\" name=\"otherinfo\" value=\"".$row['otherinfo']."\"><input type=\"image\" alt=\"submit\" src=\"images/delete.png\" title=\"delete\" value=\"Delete\"></form></center></td>";
			}
			echo "</center></table>";
			mysql_close($con);
		?>
	</div>
	
</body>

</html>