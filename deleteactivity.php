<html>

<head>
	<title>Calendar of Activities - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
</head>

<body>

	<div class="mask2"></div>

	<div class="head"> 
		<a href="main1.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		<a href="main1.php" style="position: fixed; left: 1000px; top: 37px;"><img src="images/b_home.jpg" ></a>
		<a href="#" style="font-size: 12px; text-decoration:none; font-family:segoe UI; color: #fefcd7; position: fixed; right: 10px; top: 3px;">Login</a>
		<a href="#" style="font-size: 12px; text-decoration:none; font-family:segoe UI; color: #fefcd7; position: fixed; right: 42px; top: 3px;">Signup  |</a> 
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
	<form method="post" class="signin" action="deleteact.php">
		<font color="#fefcd7" style="font-family:bebas">DELETE ACTIVITY</font>
		<hr width="320" noshade color="#71B238"></hr>
		
		<input type="hidden" name="delete_date" value=<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$delete_d = mysql_real_escape_string($_POST['delete_date']);
		echo "".$delete_d."";
		?>>
		
		<input type="hidden" name="delete_month" value=<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$delete_m = mysql_real_escape_string($_POST['delete_month']);
		echo "".$delete_m."";
		?>>
		
		<input type="hidden" name="delete_year" value=<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$delete_y = mysql_real_escape_string($_POST['delete_year']);
		echo "".$delete_y."";
		?>>
		
		<input type="hidden" name="delete_title" value=<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$delete_t = mysql_real_escape_string($_POST['delete_title']);
		echo "".$delete_t."";
		?>>
		
		<input type="hidden" name="delete_desc" value=<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("dims", $con);
		$delete_de = mysql_real_escape_string($_POST['delete_desc']);
		echo "".$delete_de."";
		?>>
		
		<font type="text" size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Are you sure?</font>
		<center><input type="image" src="images/yes.png" alt="submit" style="padding:0 50px 0 50px"></input><a href="<?php $Cmonth = $_SESSION['Cmonth']; echo "calendar2.php?month=".($Cmonth+1)."&year=".$Cyear ?>"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></center>
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