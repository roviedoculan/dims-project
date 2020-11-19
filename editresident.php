<HTML>

<HEAD>
<TITLE>Edit Registered Residents - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript">
	function validateForm(form) {
		if (form.rid.value=="") {
			alert('Please enter CEDULA NUMBER of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (/^[^0-9]+$/.test(form.rid.value)) {
			alert('Please enter exactly 8 numeric characters in CEDULA NUMBER.');
			form.rid.focus();
			return false;
		}
		if (form.lastname.value=="") {
			alert('Please enter LAST NAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.lastname.value)) {
			alert('Numeric characters and symbols are not allowed in LAST NAME.');
			form.lastname.focus();
			return false;
		}
		if (form.firstname.value=="") {
			alert('Please enter FIRST NAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.firstname.value)) {
			alert('Numeric characters and symbols are not allowed in FIRST NAME.');
			form.firstname.focus();
			return false;
		}
		if (form.middlename.value=="") {
			alert('Please enter MIDDLENAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.middlename.value)) {
			alert('Numeric characters and symbols are not allowed in MIDDLE NAME.');
			form.middlename.focus();
			return false;
		}
		if (form.gender.selectedIndex == 1) {
			alert('Please select GENDER of resident to be added.');
			form.gender.focus();
			return false;
		}
		if (form.stat.selectedIndex == 1) {
			alert('Please select CIVIL STATUS of resident to be added.');
			form.stat.focus();
			return false;
		}
		if (form.housenum.value=="") {
			alert('Please enter HOUSE NUMBER of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (form.streetname.value=="") {
			alert('Please enter STREET NAME of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (form.brgy.value=="") {
			alert('Please enter BARANGAY of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (form.district.value=="") {
			alert('Please enter DISTRICT of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (form.city.value=="") {
			alert('Please enter CITY of resident to be added.');
			form.rid.focus();
			return false;
		}	
		if (!/^[a-zA-Z]*$/.test(form.city.value)) {
			alert('Numeric characters and symbols are not allowed in CITY.');
			form.city.focus();
			return false;
		}	
		if (form.birthmonth.selectedIndex == 1) {
			alert('Please select BIRTH MONTH of resident to be added.');
			form.birthmonth.focus();
			return false;
		}	
		if (form.birthday.selectedIndex == 1) {
			alert('Please select BIRTH DAY of resident to be added.');
			form.birthmonth.focus();
			return false;
		}	
		if (form.birthyear.selectedIndex == 1) {
			alert('Please select BIRTH YEAR of resident to be added.');
			form.birthmonth.focus();
			return false;
		}	
		return true;
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
			<li><a href="edit2.php" class="slowhover" style="position: fixed; left: 54px; top: 30px;">Basic Information</a></li>
            <li><a href="calendar2.php" class="slowhover" style="position: fixed; left: 202px; top: 30px;">Calendar of Activities</a></li>
            <li><a href="events2.php" class="slowhover" style="position: fixed; left: 362px; top: 30px;">Barangay Events</a></li>
			<li><a href="fin2.php" class="slowhover" style="position: fixed; left: 497px; top: 30px;">Financial Report</a></li>
			
			<table style="position: relative; left: 570px; top: 95px;"><tr><td>
			<ul class="dropv">
				<li><a href="#" class="slowhover" style="position: fixed; left: 632px; top: 30px;">Inventory</a>
				<ul><li><a href="inventory2_assets.php" class="slowhover">Assets</a></li>
				<li><a href="inventory2_materials.php" class="slowhover">Materials</a></li>
				</ul>
				</li>
			</ul>
			</tr></td></table>
			
			<li><a href="comments2.php" class="slowhover" style="position: fixed; left: 1154px; top: 30px;">Comments and Suggestions</a></li>
			<li><a href="residents2.php" class="slowhover" style="position: fixed; left: 733px; top: 30px;">Registered Residents</a></li>
			<li><a href="evac2.php" class="slowhover" style="position: fixed; left: 890px; top: 30px;">Evacuation Centers and Temporary Shelters</a></li>
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
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="resident2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	<bodyheader>Edit Registered Residents</bodyheader>
	</div>
	
	<div class="head3" style="height:275px; top:200px;">
	

	<?
	$con = mysql_connect("localhost","root","");

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dims", $con);

	$res_id = $_GET['id'];
	$res = mysql_query("select * from residents where rid = '".$res_id."'");
	$row = mysql_fetch_assoc($res);

	echo"<form method=\"post\" action=\"saveresident.php?id=".$res_id."\" onsubmit=\"return validateForm(this);\">
		<fieldset class=\"textbox\">
				
				<label class=\"rid\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Cedula Number (Enter 8-digit Number - ex. 01234567)</span>
				</label>	
				<input type=\"text\" value=".$row['rid']." style=\"width:126px;background-color:white;color:black;font-family:verdana\"maxlength=\"8\" name=\"rid\">
				<br>
				<label class=\"lastname\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Last Name</span>
				</label>			
				<input type=\"text\" value=".$row['lastname']." style=\"width:226px;background-color:white;color:black;font-family:verdana\"name=\"lastname\">
				<label class=\"firstname\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>First Name</span>
				</label>		
				<input type=\"text\" value=".$row['firstname']." style=\"width:226px;background-color:white;color:black;font-family:verdana\"name=\"firstname\">
				<label class=\"middlename\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Middle Name</span>
				</label>	
				<input type=\"text\" value=".$row['middlename']." style=\"width:226px;background-color:white;color:black;font-family:verdana\"name=\"middlename\">
				<br>
				<label class=\"gend\" style=\"float:left;padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Gender</span>
				</label>
				<select name=\"gender\" id=\"gender\" style=\"position:relative;left:18px;\">
					<option selected=\"selected\">".$row['gender']."</option><option>---</option>
					<option>M</option><option>F</option><option>Unspecified</option>
				</select>
				<br>
				<label class=\"sta\" style=\"float:left;padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Civil Status</span>
				</label>
				<select name=\"stat\" id=\"stat\">
					<option selected=\"selected\">".$row['stat']."</option><option>---</option>
					<option>Single</option><option>Married</option><option>Divorced</option><option>Widowed</option><option>Unspecified</option>
				</select>
				<br>
				<label class=\"birth\" style=\"float:left;padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Birth Date (Month, Day, Year)</span>
				</label>
				<select name=\"birthmonth\" id=\"birthmonth\" value=".$row['birthmonth'].">
					<option selected=\"selected\">".$row['birthmonth']."</option><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option>
				</select>
				
				<select name=\"birthday\" id=\"birthday\" value=".$row['birthday'].">
					<option selected=\"selected\">".$row['birthday']."</option><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				
				<select name=\"birthyear\" id=\"birthyear\" value=".$row['birthyear'].">
					<option selected=\"selected\">".$row['birthyear']."</option><option>---</option>
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
				<label class=\"te\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Telephone Number</span>
				</label>
				<input type=\"text\" value=\"".$row['tel']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"tel\">
				<br>
				<label class=\"c\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Mobile Number</span>
				</label>
				<input type=\"text\" value=\"".$row['cp']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"cp\">
				<br>
				<label class=\"housenumber\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>House Number</span>
				</label>
				<input type=\"text\" value=".$row['housenum']." style=\"width:50px;background-color:white;color:black;font-family:verdana\" name=\"housenum\">
				<br>
				<label class=\"streetname\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Street Name</span>
				</label>
				<input type=\"text\" value=\"".$row['streetname']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"streetname\">
				<br>
				<label class=\"brgy\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Barangay</span>
				</label>
				<input type=\"text\" value=\"".$row['brgy']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"brgy\">
				<br>
				<label class=\"district\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>District</span>
				</label>
				<input type=\"text\" value=\"".$row['district']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"district\">
				<br>
				<label class=\"city\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>City</span>
				</label>
				<input type=\"text\" value=\"".$row['city']."\" style=\"width:326px;background-color:white;color:black;font-family:verdana\" name=\"city\">
				<br></br>
				<center><input type=\"submit\" value=\"Save\">
				<a href=\"residents2.php\"><input type=\"button\" name=\"cancel\" value=\"Cancel\" /></a>
				</center>
				</center>
				
				</fieldset>
		</form>";
	
	mysql_close($con);
	
?>
	
</div>

</body>
</html>