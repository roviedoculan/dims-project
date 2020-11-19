<HTML>

<HEAD>
<TITLE>Edit Financial Report - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript">
		function confirmDelete() {
			return confirm('Are you sure you want to remove this item?');
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

		<!--add expense popup-->
		<div id="addresident-box" class="addresident-popup">
		<a href="#" class="close"><img src="images/websover_x.jpg" class="btn_close" title="Close Window" alt="Close" /></a>
			<form method="post" class="signin" action="insertfinitem.php" onsubmit="return validateForm(this);">
				<fieldset class="textbox">

				<label class="dimschoice" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Add to:</span>
				</label>
				<select name="choice" id="choice">
					<option>Assets</option><option>DIMS</option>
				</select>
				
				<label class="itemname" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Item Name</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;"name="name">
				
				<label class="itemdenum" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Denomination</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;" name="denum">
				
				
				<label class="itemcost" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Cost per Item</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;" name="cost">
				
				
				<label class="eventstart" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Date Acquired</span>
				</label>
				<select name="acqr_month" id="acqr_month"><option>---</option>
					<option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option>
					<option>Jun</option><option>Jul</option><option>Aug</option><option>Sep</option><option>Oct</option>
					<option>Nov</option><option>Dec</option>
				</select>
				
				<select name="acqr_day" id="acqr_day"><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				
				<select name="acqr_year" id="acqr_year"><option>---</option>
					<option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option>
					<option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option>
					<option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option>
					<option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option>
					<option>1993</option><option>1992</option><option>1991</option><option>1990</option>
				</select>
				
<label class="eventperson" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Person/Committee in Charge</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:'Segoe UI';" name="person">


				
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
	
	<!-- Logout button start-->
		<div class="wrap">
			<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font-family:Segoe UI; color: #fefcd7; position: fixed; right: 30px; top: 3px;z-index:101;" type="button">Logout</a>
			<div id="login-box" class="login-popup">
				<font color="#fefcd7" style="font-family:bebas">LOG OUT</font>
				<hr width="300" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Are you sure?</font>
				<br>
				<br>
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="fin2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	<bodyheader>Edit Financial Report</bodyheader>
	</div>
	
	<div class="head3" style="height:3000px; top:200px; background-color:#fefcd7;">
	<div class="editbar">
	
	<a href="#addresident-box" class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 888px; top: -13px;"><img src="images/addres.png"></a>	
	<a class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 888px; top: -21px;">ADD ITEM</a>	
	</div>
	
	

<div id="accordion">
	<h2><center>ITEMS</center></h2>
	<div class="pane" style="overflow:auto">
			<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);

		$result = mysql_query("SELECT * FROM fin");
		echo "<table class=\"hovertable\" border=\"0\" style=\"padding: 0px 92px 100px 92px\">
		<tr>
			<th width=\"270px\">Name</th><th width=\"50px\">Cost</th><th width=\"50px\">Denum</th><th>Total</th><th>Date</th><th>Person-In-Charge</th><th width=\"50px\">Edit</th><th width=\"50px\">Delete</th>
		</tr>";

		while($row = mysql_fetch_array($result)) {
			echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.background='rgba(255,255,255,0.1)';\">";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['cost'] . "</td>";

			echo "<td>" . $row['denum'] . "</td>";
			echo "<td>" . $row['total'] . "</td>";

			echo "<td>" . $row['acqr_month'] . ' ' . $row['acqr_day'] . ' ' .  $row['acqr_year'] ."</td>";
			echo "<td>" . $row['person'] . "</td>";
			echo "<td><a href=\"editfinitem.php?id=".$row['name']."&choice=".$row['choice']."\" style=\"position: relative;\"><img src=\"images/btn_edit.png\"></a></td>"
;
			echo "<td><form action=\"deletefinitem.php\" method=\"post\" onsubmit=\"return confirmDelete();\">
			<input type=\"hidden\" name=\"delete_id\" value=\"".$row['name']."\">
			<input type=\"image\" alt=\"submit\" src=\"images/btn_delete.png\" value=\"Delete\"></form></td></tr>";

		}

		echo "</table>";
		mysql_close($con);


		?>

	</div>

	<h2 class="current"><center>DIMS</center></h2>
	<div class="pane" style="overflow:auto">
		
		<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);

		$result1 = mysql_query("SELECT * FROM findims");
		echo "<table class=\"hovertable\" border=\"1\" style=\"padding: 0px 92px 100px 92px\">
		<tr>
			<th width=\"270px\">Name</th><th width=\"50px\">Cost</th><th width=\"50px\">Denum</th><th>Total</th><th>Date</th><th>Person-In-Charge</th><th width=\"50px\">Edit</th><th width=\"50px\">Delete</th>
		</tr>";

		while($row = mysql_fetch_array($result1)) {
			echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.background='rgba(255,255,255,0.1)';\">";
			echo "<td>" . $row['name'] . "</td>";
			echo "<td>" . $row['cost'] . "</td>";
			echo "<td>" . $row['denum'] . "</td>";
			echo "<td>" . $row['total'] . "</td>";

			echo "<td>" . $row['acqr_month'] . ' ' . $row['acqr_day'] . ' ' .  $row['acqr_year'] ."</td>";
			echo "<td>" . $row['person'] . "</td>";
			echo "<td><a href=\"editfinitem.php?id=".$row['name']."\" style=\"position: relative;\"><img src=\"images/btn_edit.png\"></a></td>";
			echo "<td><form action=\"deletefinitem.php\" method=\"post\" onsubmit=\"return confirmDelete();\">
			<input type=\"hidden\" name=\"delete_id\" value=\"".$row['name']."\">
			<input type=\"hidden\" name=\"delete_key\" value=\"".$row['choice']."\">
			<input type=\"image\" alt=\"submit\" src=\"images/btn_delete.png\" value=\"Delete\"></form></td></tr>";
		}

		echo "</table>";
		mysql_close($con);


		?>
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
	});
	</script>


	</div>
	
</BODY>

</HTML>
