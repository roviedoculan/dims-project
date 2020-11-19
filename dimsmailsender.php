<html>

<head>
	<title>DIMS Account Manager - Barangay 455 DIMS</title>
	<link rel="stylesheet" type="text/css" href="scripts/format.css">
</head>

<body>

	<div class="head3">
		<font size="6" style="font-family:verdana">Confirmation email sent!</font><br><br>
		<font size="3" style="font-family:verdana">Thank you for signing up! An email was sent to your email ad. Please check your email and click on the link in the email.</font>
	
		<?php
		$email = 'rovie.doculan@gmail.com';
		$subj = 'DIMS Confirmation Email';
		$message = 'Click the link to....';
		$header = 'From: chabroncano@gmail.com' . "\r\n" .
'Reply-To: chabroncano@gmail.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();
		if (mail($email,$subj,$message,$header)) {
			echo "success";
		} else {
			echo "fail!!! PI!!!!!";
		}
		?>
	</div>

	<div class="head" style="top:0%"> 
		<a href="main1.php" style="position: fixed; left: 17px; top: 18px;"><img src="images/logo.jpg" ></a>
		
	<div>
	
	
</html>