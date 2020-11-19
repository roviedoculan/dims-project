<HTML>

<HEAD>
<TITLE>Edit Evacuation Centers - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript">
		function confirmDelete() {
			return confirm('Are you sure you want to remove this?');
		}
</script>
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

		<!--add resident popup-->
		<div id="addresident-box" class="addresident-popup">
		<a href="#" class="close"><img src="images/websover_x.jpg" class="btn_close" title="Close Window" alt="Close" /></a>
			<form method="post" class="signin" action="insertevac.php" onsubmit="return validateForm(this);">
				<fieldset class="textbox">
				
				<label class="evacname" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Evacuation Center Name</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;"name="name">
				
				<label class="evacloc" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Location</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;" name="location">
				
				
				<label class="evacdesc" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Description</span>
				</label>
				<textarea name="description" style="width:326px;height:150px;color:black;font-family:Arial"></textarea>
				
				<br></br>
				<center><input type="submit"></center>
				
				</fieldset>
			</form>
		</div>
		
	
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
	<!-- Log-out button start-->
		<div class="wrap">
		<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font-family:Segoe UI; color: #fefcd7; position: fixed; right: 30px; top: 3px;z-index:101;" type="button">Logout</a>
			<div id="login-box" class="login-popup">
				<font color="#fefcd7" style="font-family:bebas">LOG OUT</font>
				<hr width="300" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Are you sure?</font>
				<br>
				<br>
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="evac2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	<bodyheader>Edit Evacuation Centers</bodyheader>
	</div>
	
	<div class="head3" style="height:3000px; top:200px; background-color:#fefcd7;">
	<div class="editbar">
	
	<a href="#addresident-box" class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 858px; top: -13px;"><img src="images/addres.png"></a>	
	<a class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 858px; top: -21px;">ADD CENTER</a>	
	</div>
	
	

<div id="accordion" style="overflow:auto">
	
		<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);

		$result = mysql_query("SELECT * FROM evac");





		
		while($row = mysql_fetch_array($result)) {
			echo "<h2><center>" . $row['name'] . "</center></h2>";
			echo "<tr><center><td><a href=\"editevac.php?id=".$row['name']."\" style=\"position: relative;\"><img src=\"images/btn_edit.png\"></a></td>";
			echo "<td><form action=\"deleteevac.php\" method=\"post\" onsubmit=\"return confirmDelete();\">
			<input type=\"hidden\" name=\"delete_id\" value=\"".$row['name']."\">
			<input type=\"image\" alt=\"submit\" src=\"images/btn_delete.png\" value=\"Delete\"></form></td></center></tr>";
			
			echo "<div class=\"pane\" style=\"overflow:auto\">";
			echo "<h3>Location:</h3>";
			echo "<h3 style=\"padding: 0px 92px 0px 92px\"><desc>" . $row['location'] . "</center></h3>";
			echo "<h3>Description:</h3>";
			echo "<h3 style=\"padding: 0px 92px 0px 92px\"><desc>" . $row['description'] . "</desc></h3>";

			echo "</div>";
		}

		
		mysql_close($con);
		?>

</div>


<!-- activate tabs with JavaScript -->
	<script type="text/javascript" src="scripts/acc.js"></script>
	<script type="text/javascript">
	$(function() {
	    $("#accordion").tabs(
	    "#accordion div.pane",
	    {tabs: 'h2', effect: 'slide', initialIndex: null}
	  );
	});
	</script>


	</div>
	
</BODY>

</HTML>
