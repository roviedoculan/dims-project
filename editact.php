<html>

<head>
	<title>Calendar of Activities - Barangay 455 DIMS</title>
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
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="calendar2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	
	<div class="head4"><bodyheader>Calendar of Activities</bodyheader></div>
	
	<div class="head3" style="height:3000px">
		<!--Contents-->
		<?php
			session_start();
			$monthNames = Array("Januray","February","March","April","May","June","July","August","September","October","November","December");
		?>
		
		<center><img src="images/prev.png"/>
		<strong><font size='6' color="#000000" style="font-family:bebas; padding:20px"><?php $Cyear=$_SESSION['Cyear']; $Cmonth=$_SESSION['Cmonth']; echo $monthNames[$Cmonth].' '.$Cyear; ?></font></strong></strong>
		<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>"><img src="images/next.png"></a></center>
		
		<br>
		<center><table border="1" class="calendar" width="90%">
			<strong>
			<tr>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Sun</th>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Mon</th>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Tues</th>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Wed</th>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Thu</th>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Fri</th>
				<th border="1" style="font-family:verdana; font-size:20px" width="14.3%">Sat</th>
			</tr>
			</strong>
			<?php
				$Cmonth = $_SESSION['Cmonth'];
				$Cyear = $_SESSION['Cyear'];
				$timestamp = mktime(0,0,0,$Cmonth+1,1,$Cyear);
				$maxday = date("t",$timestamp);
				$thismonth = getdate ($timestamp);
				$startday = $thismonth['wday'];
				for ($i=0; $i<($maxday+$startday); $i++) {
				
					$con = mysql_connect("localhost","root","");
					if (!$con) {
						die('Could not connect: ' . mysql_error());
					}
					
					mysql_select_db("dims", $con);

					$result = mysql_query("SELECT * FROM activities");
				
					if(($i % 7) == 0 ) echo "<tr>";
					if($i < $startday) echo "<td style='opacity:0'></td>";
					else {
						echo "<td><font size=\"3\" color=\"#000000\" style=\"font-family:bebas;\">". ($i - $startday + 1) ."</font><img src='images/add.png' style='float:right'/><div id=\"accordion2\">";
						while($row = mysql_fetch_array($result)) {
							if ($row['month'] == $Cmonth && $row['date'] == ($i - $startday + 1) && $row['year'] == $Cyear) {
								echo "<h4 title='". $row['description'] ."'><font size=\"2\" color=\"#000000\" style=\"font-family:verdana;\">" . $row['title'] . "</font></h4>";
							}
						}
						echo "</td>";
					}
					if(($i % 7) == 6 ) echo "</tr>";
				}
			?>
		</table></center>
	</div>
	
	<!-- magic -->
	<div id="addactivity-box" class="addactivity-popup">
	<form method="post" class="signin" action="editactivity.php">
		<font color="#fefcd7" style="font-family:bebas">EDIT ACTIVITY</font>
		<hr width="320" noshade color="#71B238"></hr>
		
		<input type="hidden" name="edit_date" value='<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_d = mysql_real_escape_string($_POST['edit_date']);
		echo "".$edit_d."";
		?>'>
		
		<input type="hidden" name="edit_month" value='<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_m = mysql_real_escape_string($_POST['edit_month']);
		echo "".$edit_m."";
		?>'>
		
		<input type="hidden" name="edit_year" value='<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_y = mysql_real_escape_string($_POST['edit_year']);
		echo "".$edit_y."";
		?>'>
		
		<input type="hidden" name="prev_title" value='<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_t = mysql_real_escape_string($_POST['edit_title']);
		echo "".$edit_t."";
		?>'>
		
		<input type="hidden" name="prev_desc" value='<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_de = mysql_real_escape_string($_POST['edit_desc']);
		echo "".$edit_de."";
		?>'>
		
		<font type="text" size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Title:</font>
		<br>
		<center><input name="activitytitle" value='<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_t = mysql_real_escape_string($_POST['edit_title']);
		echo "".$edit_t."";
		?>' style="width:90%"></input></center>
		<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Description:</font>
		<br>
		<center><textarea name="activitydescription" rows="5" style="width:90%; font-family:verdana;"><?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$edit_de = mysql_real_escape_string($_POST['edit_desc']);
		echo "".$edit_de."";
		?></textarea></center>
		
		<hr width="320" noshade color="71B238"></hr>
		<center><input type="image" src="images/ok.jpg" alt="submit" style="padding:0 50px 0 50px"></input><a href="<?php $Cmonth = $_SESSION['Cmonth']; echo "calendar2.php?month=".($Cmonth+1)."&year=".$Cyear ?>"><img src="images/cancel.png" style="padding:0 50px 0 50px"/></a></center>
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