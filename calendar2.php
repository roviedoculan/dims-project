<html>

<head>
	<title>Calendar of Activities - Barangay 455 DIMS</title>
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
		
		
	</div>
	
	<div class="head2" style="height:3000px"></div>
	
	<div class="head4"><bodyheader>Calendar of Activities</bodyheader></div>
	
	<div class="head3" style="height:3000px">
		<!--Contents-->
		<?php
			$monthNames = Array("January","February","March","April","May","June","July","August","September","October","November","December");
			if (!isset($_REQUEST["month"])) $_REQUEST["month"] = date("n");
			if (!isset($_REQUEST["year"])) $_REQUEST["year"] = date("Y");
			
			$cMonth = $_REQUEST["month"];
			$cYear = $_REQUEST["year"];
			
			$prev_year = $cYear;
			$next_year = $cYear;
			$prev_month = $cMonth-1;
			$next_month = $cMonth+1;
			if ($prev_month == 0 ) {
				$prev_month = 12;
				$prev_year = $cYear - 1;
			}
			if ($next_month == 13 ) {
				$next_month = 1;
				$next_year = $cYear + 1;
			}
		?>
		<center><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>"><img src="images/prev.png"></a>
		<strong><font size='6' color="#000000" style="font-family:bebas; padding:20px"><?php session_start(); $_SESSION['Cmonth'] = $cMonth-1;  $_SESSION['Cyear'] = $cYear; echo $monthNames[$cMonth-1].' '.$cYear; ?></font></strong>
		<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>"><img src="images/next.png"></a></center>
		
		<br>
		<center><table border="1" class="calendar" width="90%">
			<strong>
			<tr>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Sun</th>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Mon</th>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Tues</th>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Wed</th>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Thu</th>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Fri</th>
				<th border="1" style="color:#71B238; font-family:verdana; font-size:20px" width="14.3%">Sat</th>
			</tr>
			</strong>
			<?php
				$timestamp = mktime(0,0,0,$cMonth,1,$cYear);
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
						echo "<td><font size=\"3\" color=\"#000000\" style=\"font-family:bebas;\">". ($i - $startday + 1) ."</font><a href=calendarbutton.php type=\"button\"><img src='images/add.png' style='float:right'/></a><br><br><div id=\"accordion2\">";
						while($row = mysql_fetch_array($result)) {
							if ($row['month']+1 == $cMonth && $row['date'] == ($i - $startday + 1) && $row['year'] == $cYear) {
								echo "<h4 title='". $row['description'] ."'><form action=\"deleteactivity.php\" method=\"post\" onsubmit=\"return confirmDelete();\"><input type=\"hidden\" name=\"delete_month\" value=\"".$row['month']."\"><input type=\"hidden\" name=\"delete_date\" value=\"".$row['date']."\"><input type=\"hidden\" name=\"delete_year\" value=\"".$row['year']."\"><input type=\"hidden\" name=\"delete_title\" value=\"".$row['title']."\"><input type=\"hidden\" name=\"delete_desc\" value=\"".$row['description']."\"><input type=\"image\" alt=\"submit\" src=\"images/delete.png\" title=\"delete\" style=\"float:right;\" value=\"Delete\"></form> <form action=\"editact.php\" method=\"post\"><input type=\"hidden\" name=\"edit_month\" value=\"".$row['month']."\"><input type=\"hidden\" name=\"edit_date\" value=\"".$row['date']."\"><input type=\"hidden\" name=\"edit_year\" value=\"".$row['year']."\"><input type=\"hidden\" name=\"edit_title\" value=\"".$row['title']."\"><input type=\"hidden\" name=\"edit_desc\" value=\"".$row['description']."\"><input type=\"image\" alt=\"submit\" src=\"images/edit.png\" title=\"edit\" style=\"float:right;\"></form></a><font size=\"2\" color=\"#000000\" style=\"font-family:verdana\">" . $row['title'] . "</font></h4>";
							}
						}
						echo "</div></td>";
					}
					if(($i % 7) == 6 ) echo "</tr>";
				}
			?>
		</table></center>
	
	</div>
	
</body>

</html>