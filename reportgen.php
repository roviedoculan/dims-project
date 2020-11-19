<html>

<head>
	<title>Report Generator - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
	<link rel="stylesheet" type="text/css" href="scripts/reportgen.css">
</head>

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
	</div>
	
	<div class="head2" style="height:1000px">
	
	</div>
	
	<div class="head4">
	<bodyheader style="position:relative;top:17px;">Report Generator</bodyheader>
	<desc style="position:relative;top:36px;left:-3.5%;">Select a report template to download in .pdf format. Data will be generated from respective modules on an annual basis.</desc>
	</div>
	
	<div class="head3" style="position:relative;top:220px;height:500px;background-color:#fefcd7;">
	
	<ul class="ch-grid">
		<li>
			<div class="ch-item ch-img-1">
				<div class="ch-info">
					<h3>Barangay Profile</h3>
					<p>Basic information, mission, vision and objectives <a href="#">download</a></p>
				</div>
			</div>
		</li>
	<li>
        <div class="ch-item ch-img-2">
            <div class="ch-info">
                <h3 style="font-size:14px;">Brgy Officials and Committees Report</h3>
                <p>Current officials and committees <a href="#">download</a></p>
            </div>
        </div>
    </li>
	<li>
        <div class="ch-item ch-img-3">
            <div class="ch-info">
                <h3>Financial Report</h3>
                <p>Disaster & non-disaster related expenses<a href="fin_gen.php">download</a></p>
            </div>
        </div>
    </li>
	<li>
        <div class="ch-item ch-img-4">
            <div class="ch-info">
                <h3>Inventory Report</h3>
                <p><a href="assets_gen.php">download assets report</a><a href="mat_gen.php">download materials report</a></p>
            </div>
        </div>
    </li>
	<li>
        <div class="ch-item ch-img-5">
            <div class="ch-info">
                <h3>Events Report</h3>
                <p>Interbarangay and intrabarangay events<a href="events_gen.php">download</a></p>
            </div>
        </div>
    </li>
	<li>
        <div class="ch-item ch-img-6">
            <div class="ch-info">
                <h3>Directory of Residents</h3>
                <p>Updated list of residents and personal info<a href="report_directory.php">generate</a></p>
            </div>
        </div>
    </li>
	<li>
        <div class="ch-item ch-img-7">
            <div class="ch-info">
                <h3>Barangay Demographic Profile</h3>
                <p>Description of resident statistics<a href="report_demo.php">generate</a></p>
            </div>
        </div>
    </li>
    
	</ul>
	</div>
	

</BODY>

</HTML>   