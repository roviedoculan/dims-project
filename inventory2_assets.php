<HTML>

<HEAD>
<TITLE>Edit Assets - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript" src="scripts/formvalidate_asset.js"></script>
</HEAD>

<BODY>

	<body scroll="no" style="overflow: scroll">

	<div class="head"> 
		<a href="main2.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		<a href="main2.php" style="position: fixed; left: 1000px; top: 37px;"><img src="images/b_home.jpg" ></a>
		<ul class="modulemenu">
		<li><a href="#" class="slowhover" style="position: fixed; left: 1160px; top: 37px;"><img src="images/b_module.jpg" >
		<ul>
			<li><a href="edit2.php" class="slowhover" style="position: fixed; left: 34px; top: 30px;">Basic Information</a></li>
            <li><a href="calendar2.php" class="slowhover" style="position: fixed; left: 170px; top: 30px;">Calendar of Activities</a></li>
            <li><a href="events2.php" class="slowhover" style="position: fixed; left: 325px; top: 30px;">Barangay Events</a></li>
			<li><a href="fin2.php" class="slowhover" style="position: fixed; left: 456px; top: 30px;">Financial Report</a></li>
			<table style="position: relative; left: 505px; top: 95px;"><tr><td>
			<ul class="dropv">
				<li><a href="#" class="slowhover" style="position: fixed; left: 588px; top: 30px;">Inventory</a>
				<ul><li><a href="inventory2_assets.php" class="slowhover">Assets</a></li>
				<li><a href="inventory2_materials.php" class="slowhover">Materials</a></li>
				</ul>
				</li>
			</ul>
			</tr></td></table>
			
			<li><a href="residents2.php" class="slowhover" style="position: fixed; left: 680px; top: 30px;">Registered Residents</a></li>
			<li><a href="evac2.php" class="slowhover" style="position: fixed; left: 828px; top: 30px;">Evac Centers and Temporary Shelters</a></li>
			<li><a href="comments2.php" class="slowhover" style="position: fixed; left: 1060px; top: 30px;">Approve Comments</a></li>
			<li><a href="reportgen.php" class="slowhover" style="position: fixed; left: 1210px; top: 30px;">Report Generator</a></li>
		</ul>
		</li>
		<ul>

		<!--add item popup-->
		<div id="addasset-box" class="addasset-popup">
		<a href="#" class="close"><img src="images/websover_x.jpg" class="btn_close" title="Close Window" alt="Close" /></a>
			<form method="post" class="signin" action="insertasset.php" onsubmit="return validateForm(this);">
				<fieldset class="textbox">
				
				<label class="rid" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Asset name</span>
				</label>	
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana;" name="name">
				
				<label class="amt" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Current Amount</span>
				</label>	
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="amt">
				
				<label class="pic" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Name of Person/Committee In Charge of Asset</span>
				</label>		
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana"name="pic">
				<label class="pic_contact" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Contact of Person/Committee In Charge of Asset</span>
				</label>	
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana"name="pic_contact">
				
				<label class="status" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Status (Ex. Good, Needs Repair, etc.) </span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="status">
				<label class="desc" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Description (Optional)</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="desc">
				<br></br>
				<center><input type="submit"></center>		
				</fieldset>
			</form>
		</div>
	
	<script type="text/javascript" src="scripts/loginbutton.js"></script>
	<script type="text/javascript">
			$(document).ready(function() {
				$('a.addasset-window').click(function() {
						
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
				  $('#mask , .addasset-popup').fadeOut(300 , function() {
					$('#mask').remove();  
				}); 
				return false;
				});
			});
	</script>
	
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
	
	<div class="head2" style="height:1000px"></div>
	
	<div class="head4" style="top:142px;margin: -13px 0 -20px 0;">
	<bodyheader>Edit Inventory - Assets</bodyheader>
	</div>
	
	<div class="head3" style="height:1000px; top:200px; background-color:#fefcd7;">
	<div class="editbar">
	<a href="#" style="position:fixed;top:194px;left:155px;font-family:bebas;"><img src="images/search.png">
	<a href="residents1_a.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:29px;font-family:bebas;color:#000;padding:0 0 3px 0;">A</a>
	<a href="residents1_b.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:32px;font-family:bebas;color:#000;padding:0 0 3px 0;">B</a>
	<a href="residents1_c.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:35px;font-family:bebas;color:#000;padding:0 0 3px 0;">C</a>
	<a href="residents1_d.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:38px;font-family:bebas;color:#000;padding:0 0 3px 0;">D</a>
	<a href="residents1_e.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:41px;font-family:bebas;color:#000;padding:0 0 3px 0;">E</a>
	<a href="residents1_f.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:44px;font-family:bebas;color:#000;padding:0 0 3px 0;">F</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:47px;font-family:bebas;color:#000;padding:0 0 3px 0;">G</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:50px;font-family:bebas;color:#000;padding:0 0 3px 0;">H</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:53px;font-family:bebas;color:#000;padding:0 0 3px 0;">I</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:56px;font-family:bebas;color:#000;padding:0 0 3px 0;">J</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:59px;font-family:bebas;color:#000;padding:0 0 3px 0;">K</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:62px;font-family:bebas;color:#000;padding:0 0 3px 0;">L</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:65px;font-family:bebas;color:#000;padding:0 0 3px 0;">M</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:68px;font-family:bebas;color:#000;padding:0 0 3px 0;">N</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:71px;font-family:bebas;color:#000;padding:0 0 3px 0;">O</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:74px;font-family:bebas;color:#000;padding:0 0 3px 0;">P</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:77px;font-family:bebas;color:#000;padding:0 0 3px 0;">Q</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:80px;font-family:bebas;color:#000;padding:0 0 3px 0;">R</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:83px;font-family:bebas;color:#000;padding:0 0 3px 0;">S</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:86px;font-family:bebas;color:#000;padding:0 0 3px 0;">T</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:89px;font-family:bebas;color:#000;padding:0 0 3px 0;">U</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:92px;font-family:bebas;color:#000;padding:0 0 3px 0;">V</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:95px;font-family:bebas;color:#000;padding:0 0 3px 0;">W</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:98px;font-family:bebas;color:#000;padding:0 0 3px 0;">X</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:101px;font-family:bebas;color:#000;padding:0 0 3px 0;">Y</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:104px;font-family:bebas;color:#000;padding:0 0 3px 0;">Z</a>
	
	<a href="#addasset-box" class="addasset-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 708px; top: -13px;"><img src="images/addres.png"></a>	
	</div>
	
	<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);
		
		$result = mysql_query("SELECT * FROM assets ORDER BY name asc");

		echo "<table class=\"hovertable\" border=\"1\">
		<tr>
			<th width=\"220px\">Name</th><th width=\"60px\">Amount</th><th colspan=\"2\" width=\"350px\">Person/Committee In Charge</th><th width=\"135px\">Status</th><th width=\"235px\">Description (if available)</th><th colspan=\"2\">Options</th>
		</tr>";

		while($row = mysql_fetch_array($result)) {
			echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.backgroundColor='rgba(255,255,255,1)';\">";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['amt'] . "</td>";
			echo "<td>" . $row['pic'] . "</td>";
			echo "<td>" . $row['pic_contact'] . "</td>";
			echo "<td>" . $row['status'] . "</td>";
			echo "<td>" . $row['desc'] . "</td>";
			echo "<td><a href=\"editasset.php?id=".$row['id']."\" style=\"position: relative;\"><img src=\"images/btn_edit.png\"></a></td>";
			echo "<td><form action=\"deleteasset.php\" method=\"post\" onsubmit=\"return confirmDelete();\">
			<input type=\"hidden\" name=\"delete_id\" value=\"".$row['id']."\">
			<input type=\"image\" alt=\"submit\" src=\"images/btn_delete.png\" value=\"Delete\"></form></td></tr>";
		}

		echo "</table>";
		mysql_close($con);
	?>	
	</div>
	
</BODY>

</HTML>