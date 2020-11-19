<HTML>

<HEAD>
<TITLE>Edit Registered Residents - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript" src="scripts/formvalidate_res.js"></script>
</HEAD>

<BODY>

	<body scroll="no" style="overflow-y: scroll">

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

		<!--add resident popup-->
		<div id="addresident-box" class="addresident-popup">
		<a href="#" class="close"><img src="images/websover_x.jpg" class="btn_close" title="Close Window" alt="Close" /></a>
			<form method="post" class="signin" action="insertresident.php" onsubmit="return validateForm(this);">
				<fieldset class="textbox">
				
				<label class="rid" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Cedula Number (Enter 8-digit Number - ex. 01234567)</span>
				</label>	
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana;" name="rid" maxlength="8";>
				
				<label class="lastname" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Last Name</span>
				</label>	
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana"name="lastname">
				
				<label class="firstname" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>First Name</span>
				</label>		
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana"name="firstname">
				
				<label class="middlename" style="padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Middle Name</span>
				</label>	
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana"name="middlename">
				<br>
				<label class="gend" style="float:left;padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Gender</span>
				</label>
				<select name="gender" id="gender" style="position:relative;left:18px;">
					<option>---</option>
					<option>M</option><option>F</option><option>Unspecified</option>
				</select>
				<br>
				<label class="sta" style="float:left;padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Civil Status</span>
				</label>
				<select name="stat" id="stat">
					<option>---</option>
					<option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option><option>Unspecified</option>
				</select>
				<br>
				<label class="birth" style="float:left;padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Birth Date (Month, Day, Year)</span>
				</label>
				<select name="birthmonth" id="birthmonth">
					<option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option>
				</select>

				<select name="birthday" id="birthday"><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				
				<select name="birthyear" id="birthyear"><option>---</option>
					<option>1994</option><option>1993</option><option>1992</option><option>1991</option><option>1990</option>
					<option>1989</option><option>1988</option><option>1987</option><option>1986</option><option>1985</option>
					<option>1984</option><option>1983</option><option>1982</option><option>1981</option><option>1980</option>
					<option>1979</option><option>1978</option><option>1977</option><option>1976</option><option>1975</option>
					<option>1974</option><option>1973</option><option>1972</option><option>1971</option><option>1970</option>
					<option>1969</option><option>1968</option><option>1967</option><option>1966</option><option>1965</option>
					<option>1964</option><option>1963</option><option>1962</option><option>1961</option><option>1960</option>
					<option>1959</option><option>1958</option><option>1957</option><option>1956</option><option>1955</option>
					<option>1954</option><option>1953</option><option>1952</option><option>1951</option><option>1950</option>
					<option>1949</option><option>1948</option><option>1947</option><option>1946</option><option>1945</option>
					<option>1944</option><option>1943</option><option>1942</option><option>1941</option><option>1940</option>
					<option>1939</option><option>1938</option><option>1937</option><option>1936</option><option>1935</option>
					<option>1934</option><option>1933</option><option>1932</option><option>1931</option><option>1930</option>
					<option>1929</option><option>1928</option><option>1927</option><option>1926</option><option>1925</option>
					<option>1924</option><option>1923</option><option>1922</option><option>1921</option><option>1920</option>
					<option>1919</option><option>1918</option><option>1917</option><option>1916</option><option>1915</option>
					<option>1914</option><option>1913</option><option>1912</option><option>1911</option><option>1910</option>
				</select>
				<br>
				<label class="te" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Telephone Number</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="tel">
				
				<label class="c" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Mobile Number</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="cp">
				
				
				<label class="housenumber" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>House Number</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="housenum">
				<label class="streetname" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Street Name</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="streetname">
				<label class="brgy" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>Barangay</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="brgy" value="Barangay 455">
				<label class="district" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>District</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="district" value="District 5">
				<label class="city" style="padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';">
					<span>City</span>
				</label>
				<input type="text" style="width:326px;background-color:white;color:black;font-family:verdana" name="city" value="Manila">
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
	<!-- Log-out button start-->
		<div class="wrap">
		<a href="#login-box" class="login-window" style="font-size: 12px; text-decoration:none; font-family:Segoe UI; color: #fefcd7; position: fixed; right: 30px; top: 3px;z-index:101;" type="button">Logout</a>
			<div id="login-box" class="login-popup">
				<font color="#fefcd7" style="font-family:bebas">LOG OUT</font>
				<hr width="300" noshade color="71B238"></hr>
				<font size="2" color="#fefcd7" style="font-family:verdana; padding:5px">Are you sure?</font>
				<br>
				<br>
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="residents2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	
	<div class="head2" style="height:1000px;"></div>
	
	<div class="head4" style="left:-22px;top:140px;margin: -13px 0 -20px 0;">
	<bodyheader style="position:relative;left:6%;">Edit Registered Residents</bodyheader>
	</div>
	
	<div class="head3" style="height:100px; left:15px;top:190px; background-color:#fefcd7;">
	<div class="editbar">
	<a href="#" style="position:relative;top:-10px;left:8px;font-family:bebas;"><img src="images/search.png">
	<a href="residents1_a.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:13px;font-family:bebas;color:#000;padding:0 0 3px 0;">A</a>
	<a href="residents1_b.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:16px;font-family:bebas;color:#000;padding:0 0 3px 0;">B</a>
	<a href="residents1_c.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:19px;font-family:bebas;color:#000;padding:0 0 3px 0;">C</a>
	<a href="residents1_d.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:22px;font-family:bebas;color:#000;padding:0 0 3px 0;">D</a>
	<a href="residents1_e.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:25px;font-family:bebas;color:#000;padding:0 0 3px 0;">E</a>
	<a href="residents1_f.php" style="position:relative;top: -16px;text-decoration:none;font-size:15.5px;left:28px;font-family:bebas;color:#000;padding:0 0 3px 0;">F</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:31px;font-family:bebas;color:#000;padding:0 0 3px 0;">G</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:34px;font-family:bebas;color:#000;padding:0 0 3px 0;">H</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:37px;font-family:bebas;color:#000;padding:0 0 3px 0;">I</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:40px;font-family:bebas;color:#000;padding:0 0 3px 0;">J</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:43px;font-family:bebas;color:#000;padding:0 0 3px 0;">K</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:46px;font-family:bebas;color:#000;padding:0 0 3px 0;">L</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:49px;font-family:bebas;color:#000;padding:0 0 3px 0;">M</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:52px;font-family:bebas;color:#000;padding:0 0 3px 0;">N</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:55px;font-family:bebas;color:#000;padding:0 0 3px 0;">O</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:58px;font-family:bebas;color:#000;padding:0 0 3px 0;">P</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:61px;font-family:bebas;color:#000;padding:0 0 3px 0;">Q</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:64px;font-family:bebas;color:#000;padding:0 0 3px 0;">R</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:67px;font-family:bebas;color:#000;padding:0 0 3px 0;">S</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:70px;font-family:bebas;color:#000;padding:0 0 3px 0;">T</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:73px;font-family:bebas;color:#000;padding:0 0 3px 0;">U</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:76px;font-family:bebas;color:#000;padding:0 0 3px 0;">V</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:79px;font-family:bebas;color:#000;padding:0 0 3px 0;">W</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:82px;font-family:bebas;color:#000;padding:0 0 3px 0;">X</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:85px;font-family:bebas;color:#000;padding:0 0 3px 0;">Y</a>
	<a href="#" style="position:relative;top:-16px;text-decoration:none;font-size:15.5px;left:88px;font-family:bebas;color:#000;padding:0 0 3px 0;">Z</a>
	
	<a href="#addresident-box" class="addresident-window addeventbutton" style="height: 30px; width: 30px; position: relative; left: 915px; top: -13px;"><img src="images/addres.png"></a>	
	</div>
	
	<?php
		$con = mysql_connect("localhost","root","");
		if (!$con) {
			die('Could not connect: ' . mysql_error());
		}

		mysql_select_db("dims", $con);

		$result = mysql_query("SELECT * FROM residents ORDER BY lastname ASC");

		echo "<table class=\"hovertable\" border=\"1\" id=\"table\">
		<tr>
			<th width=\"100px\">Cedula Number</th><th width=\"180px\">Last Name</th><th width=\"190px\">First Name</th><th width=\"180px\">Middle Name</th><th width=\"90px\">Gender</th><th>Civil Status</th><th width=\"85px\">Birth Date</th><th>Telephone Number</th><th>Mobile Number</th><th width=\"100px\">House Num</th><th width=\"210px\">Street Name</th><th width=\"170px\">Brgy</th><th width=\"140px\">District</th><th width=\"150px\">City</th><th colspan=\"2\">OPTIONS</th>
		</tr>";

		while($row = mysql_fetch_array($result)) {
			echo "<tr onmouseover=\"this.style.backgroundColor='#a7dc6b';\" onmouseout=\"this.style.background='rgba(255,255,255,1)';\">";
			echo "<td>" . $row['rid'] . "</td>";
			echo "<td>" . $row['lastname'] . "</td>";
			echo "<td>" . $row['firstname'] . "</td>";
			echo "<td>" . $row['middlename'] . "</td>";
			echo "<td>" . $row['gender'] . "</td>";
			echo "<td>" . $row['stat'] . "</td>";
			echo "<td>" . $row['birthmonth'] . "/" . $row['birthday']. "/" . $row['birthyear'] ."</td>";
			echo "<td>" . $row['tel'] . "</td>";
			echo "<td>" . $row['cp'] . "</td>";
			echo "<td>" . $row['housenum'] . "</td>";
			echo "<td>" . $row['streetname'] . "</td>";
			echo "<td>" . $row['brgy'] . "</td>";
			echo "<td>" . $row['district'] . "</td>";
			echo "<td>" . $row['city'] . "</td>";
			echo "<td><a href=\"editresident.php?id=".$row['rid']."\" style=\"position: relative;\"><img src=\"images/btn_edit.png\"></a></td>";
			echo "<td><form action=\"deleteresident.php\" method=\"post\" onsubmit=\"return confirmDelete();\">
			<input type=\"hidden\" name=\"delete_id\" value=\"".$row['rid']."\">
			<input type=\"image\" alt=\"submit\" src=\"images/btn_delete.png\" value=\"Delete\"></form></td></tr>";
		}

		echo "</table>";
		mysql_close($con);
	?>
	</div>
	
</BODY>

</HTML>