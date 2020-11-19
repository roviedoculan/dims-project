<HTML>

<HEAD>
<TITLE>Edit Financial Report - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
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
	
	<div class="head3" style="height:275px; top:200px;">
	

	<?
	$con = mysql_connect("localhost","root","");

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dims", $con);

	$item_id = $_GET['id'];
	$item_choice = $_GET['choice'];


	if($item_choice == 'Assets'){
	$fintem = mysql_query("select * from fin where name = '".$item_id."'");

	}else{
	
	$fintem = mysql_query("select * from findims where name = '".$item_id."'");

	}
	$row = mysql_fetch_assoc($fintem);
	echo"<form method=\"post\" action=\"savefinitem.php?id=".$item_id."&choice=".$item_choice."\" onsubmit=\"return validateForm(this);\">
		<fieldset class=\"textbox\">
				


				
				<label class=\"dimschoice\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Add to:</span>
				</label><br>
				<select name=\"choice\" id=\"choice\" value='".$row['choice']."'>
					<option selected=\"selected\">".$row['choice']."</option><option>---</option>
					<option>Assets</option><option>DIMS</option>
				</select>
				<br><br>
				
				<label class=\"itemname\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Item Name</span>
				</label><br>
				<input type=\"text\" value='".$row['name']."' style=\"width:326px;background-color:white;color:black;\"name=\"name\">
				<br><br>
				<label class=\"itemdenum\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Denomination</span>
				</label><br>
				<input type=\"text\" value='".$row['denum']."' style=\"width:326px;background-color:white;color:black;\" name=\"denum\">
				
				<br><br>
				<label class=\"itemcost\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Cost per Item</span>
				</label><br>
				<input type=\"text\" value='".$row['cost']."' style=\"width:326px;background-color:white;color:black;\" name=\"cost\">
				
				<label class=\"eventstart\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Date</span>
				</label>
				<select name=\"acqr_month\" id=\"acqr_month\">
					<option selected=\"selected\">".$row['acqr_month']."</option><option>---</option>
					<option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option>
					<option>Jun</option><option>Jul</option><option>Aug</option><option>Sep</option><option>Oct</option>
					<option>Nov</option><option>Dec</option>
				</select>
				
				<select name=\"acqr_day\" id=\"acqr_day\">
					<option selected=\"selected\">".$row['acqr_day']."</option><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				
				<select name=\"acqr_year\" id=\"acqr_year\">
					<option selected=\"selected\">".$row['acqr_year']."</option><option>---</option>
					<option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option>
					<option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option>
					<option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option>
					<option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option>
					<option>1993</option><option>1992</option><option>1991</option><option>1990</option>
				</select>

				<label class=\"eventperson\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Person/Committee in Charge</span>
				</label>
				<input type=\"text\"  value=\"".$row['person']."\" style=\"width:226px;background-color:white;color:black;\" name=\"person\">


				<br></br>
				<center><input type=\"submit\" value=\"Save\"></center>
				
				</fieldset>
		</form>";
	
	mysql_close($con);
	
?>
	
</div>

</body>
</html>
