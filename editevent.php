<HTML>

<HEAD>
<TITLE>Edit Barangay Events - Barangay 455 DIMS</TITLE>
<link rel="stylesheet" type="text/css" href="scripts/format.css">
<script type="text/javascript">
		function validateForm(form) {
		if (form.name.value=="") {
			alert('Please enter NAME of event to be added.');
			form.name.focus();
			return false;
		}	
		if (form.start_month.selectedIndex == 1) {
			alert('Please enter START MONTH of event to be added.');
			form.start_month.focus();
			return false;
		}	
		if (form.start_day.selectedIndex == 1) {
			alert('Please enter START DAY of event to be added.');
			form.start_day.focus();
			return false;
		}	
		if (form.start_year.selectedIndex == 1) {
			alert('Please enter START YEAR of event to be added.');
			form.start_year.focus();
			return false;
		}	
		if (form.start_hour.selectedIndex == 1) {
			alert('Please enter START HOUR of event to be added.');
			form.start_hr.focus();
			return false;
		}	
		if (form.start_min.selectedIndex == 1) {
			alert('Please enter START MINUTE of event to be added.');
			form.start_min.focus();
			return false;
		}	
		if (form.end_month.selectedIndex == 1) {
			alert('Please enter END MONTH of event to be added.');
			form.end_month.focus();
			return false;
		}	
		if (form.end_month.selectedIndex == 1) {
			alert('Please enter END MINUTE of event to be added.');
			form.end_min.focus();
			return false;
		}	
		if (form.end_month.selectedIndex == 1) {
			alert('Please enter END AM/PM of event to be added.');
			form.end_apm.focus();
			return false;
		}	
		if (form.venue.value=="") {
			alert('Please select VENUE of event to be added.');
			form.venue.focus();
			return false;
		}	
		if (form.person.value=="") {
			alert('Please select NAME OF PERSON/COMMITTEE IN CHARGE of event to be added.');
			form.person.focus();
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
				<center><a href="main1.php"><img src="images/yes.png" style="padding:0 50px 0 50px"/></a></input></a><a href="event2.php"><img src="images/no.png" style="padding:0 50px 0 50px"/></a></input></a>
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
	<bodyheader>Edit Barangay Events</bodyheader>
	</div>
	
	<div class="head3" style="height:360px; top:200px;">
	

	<?
	$con = mysql_connect("localhost","root","");

	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("dims", $con);

	$res_id = $_GET['id'];
	$res = mysql_query("select * from events where eid = '".$res_id."'");
	$row = mysql_fetch_assoc($res);

	echo"<form method=\"post\" action=\"saveevent.php?id=".$res_id."\" onsubmit=\"return validateForm(this);\">
		<fieldset class=\"textbox\">
				
				<label class=\"eventname\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Event Name</span>
				</label>
				<input type=\"text\" value=\"".$row['name']."\" style=\"width:326px;background-color:white;color:black;\"name=\"name\">
				<br>
				<label class=\"eventstart\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>From</span>
				</label>
				<select name=\"start_month\" id=\"start_month\">
					<option selected=\"selected\">".$row['start_month']."</option><option>---</option>
					<option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option>
					<option>Jun</option><option>Jul</option><option>Aug</option><option>Sep</option><option>Oct</option>
					<option>Nov</option><option>Dec</option>
				</select>
				
				<select name=\"start_day\" id=\"start_day\">
					<option selected=\"selected\">".$row['start_day']."</option><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				
				<select name=\"start_year\" id=\"start_year\">
					<option selected=\"selected\">".$row['start_year']."</option><option>---</option>
					<option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option>
					<option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option>
					<option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option>
					<option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option>
					<option>1993</option><option>1992</option><option>1991</option><option>1990</option>
				</select>
				
				<select name=\"start_hr\" id=\"start_hr\">
					<option selected=\"selected\">".$row['start_hr']."</option><option>---</option>
					<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option>
					<option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
				</select>
				
				<select name=\"start_min\" id=\"start_min\">
					<option selected=\"selected\">".$row['start_min']."</option><option>---</option>
					<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option>
					<option>05</option><option>06</option><option>07</option><option>08</option><option>09</option>
					<option>10</option><option>11</option><option>12</option><option>13</option><option>14</option>
					<option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
					<option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
					<option>25</option><option>26</option><option>27</option><option>28</option><option>29</option>
					<option>30</option><option>31</option><option>32</option><option>33</option><option>34</option>
					<option>35</option><option>36</option><option>37</option><option>38</option><option>39</option>
					<option>40</option><option>41</option><option>42</option><option>43</option><option>44</option>
					<option>45</option><option>46</option><option>47</option><option>48</option><option>49</option>
					<option>50</option><option>51</option><option>52</option><option>53</option><option>54</option>
					<option>55</option><option>56</option><option>57</option><option>58</option><option>59</option>
				</select>
				
				<select name=\"start_apm\" id=\"start_apm\">
					<option selected=\"selected\">".$row['start_apm']."</option><option>---</option>
					<option>AM</option>
					<option>PM</option>
					
				</select>
				<br>
				<label class=\"eventend\" style=\"padding:1px 1px 1px; font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>To</span>
				</label>
				<select name=\"end_month\" id=\"end_month\">
					<option selected=\"selected\">".$row['end_month']."</option><option>---</option>
					<option>Jan</option><option>Feb</option><option>Mar</option><option>Apr</option><option>May</option>
					<option>Jun</option><option>Jul</option><option>Aug</option><option>Sep</option><option>Oct</option>
					<option>Nov</option><option>Dec</option>
				</select>
				
				<select name=\"end_day\" id=\"end_day\">
					<option selected=\"selected\">".$row['end_day']."</option><option>---</option>
					<option>1</option><option>2</option><option>3</option><option>4</option><option>5</option>
					<option>6</option><option>7</option><option>8</option><option>9</option><option>10</option>
					<option>11</option><option>12</option><option>13</option><option>14</option><option>15</option>
					<option>16</option><option>17</option><option>18</option><option>19</option><option>20</option>
					<option>21</option><option>22</option><option>23</option><option>24</option><option>25</option>
					<option>26</option><option>27</option><option>28</option><option>29</option><option>30</option><option>31</option>
				</select>
				
				<select name=\"end_year\" id=\"end_year\">
					<option selected=\"selected\">".$row['end_year']."</option><option>---</option>
					<option>2013</option><option>2012</option><option>2011</option><option>2010</option><option>2009</option>
					<option>2008</option><option>2007</option><option>2006</option><option>2005</option><option>2004</option>
					<option>2003</option><option>2002</option><option>2001</option><option>2000</option><option>1999</option>
					<option>1998</option><option>1997</option><option>1996</option><option>1995</option><option>1994</option>
					<option>1993</option><option>1992</option><option>1991</option><option>1990</option>
				</select>
				
				<select name=\"end_hr\" id=\"end_hr\">
					<option selected=\"selected\">".$row['end_hr']."</option><option>---</option>
					<option>01</option><option>02</option><option>03</option><option>04</option><option>05</option><option>06</option>
					<option>07</option><option>08</option><option>09</option><option>10</option><option>11</option><option>12</option>
				</select>
				
				<select name=\"end_min\" id=\"end_min\">
					<option selected=\"selected\">".$row['end_min']."</option><option>---</option>
					<option>00</option><option>01</option><option>02</option><option>03</option><option>04</option>
					<option>05</option><option>06</option><option>07</option><option>08</option><option>09</option>
					<option>10</option><option>11</option><option>12</option><option>13</option><option>14</option>
					<option>15</option><option>16</option><option>17</option><option>18</option><option>19</option>
					<option>20</option><option>21</option><option>22</option><option>23</option><option>24</option>
					<option>25</option><option>26</option><option>27</option><option>28</option><option>29</option>
					<option>30</option><option>31</option><option>32</option><option>33</option><option>34</option>
					<option>35</option><option>36</option><option>37</option><option>38</option><option>39</option>
					<option>40</option><option>41</option><option>42</option><option>43</option><option>44</option>
					<option>45</option><option>46</option><option>47</option><option>48</option><option>49</option>
					<option>50</option><option>51</option><option>52</option><option>53</option><option>54</option>
					<option>55</option><option>56</option><option>57</option><option>58</option><option>59</option>
				</select>
				
				<select name=\"end_apm\" id=\"end_apm\">
					<option selected=\"selected\">".$row['end_apm']."</option><option>---</option>
					<option>AM</option>
					<option>PM</option>
					
				</select>
				<br>
				<label class=\"eventvenue\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Venue</span>
				</label>
				<input type=\"text\"  value=\"".$row['venue']."\" style=\"width:326px;background-color:white;color:black;\" name=\"venue\">
				<br>
				<label class=\"eventdesc\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Description</span>
				</label>
				<br>
				<textarea name=\"description\" style=\"width:326px;height:150px;color:black;font-family:Arial\">".$row['description']."</textarea>
				<br>
				<label class=\"eventperson\" style=\"padding:1px 1px 1px;font-color:'#FFFFFF'; font-family:'Segoe UI';\">
					<span>Person/Committee in Charge</span>
				</label>
				<input type=\"text\"  value=\"".$row['person']."\" style=\"width:226px;background-color:white;color:black;\" name=\"person\">
				<br></br>
				<center><input type=\"submit\" value=\"Save\">
				<a href=\"events2.php\"><input type=\"button\" name=\"cancel\" value=\"Cancel\" /></a>
				</center>
				
				</fieldset>
		</form>";
	
	mysql_close($con);
	
?>
	
</div>

</body>
</html>