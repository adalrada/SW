<?php
// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

	// put your email address here
	$youremail = 'shinningworld24@gmail.com';  

	// prepare message 
	$body = "Nuevo mensaje de Usuario de Company con la siguiente información de contacto:
	
	Name:  $_POST[name]
	Email:  $_POST[email]
	Phone:  $_POST[phone]
	Message:  $_POST[message]";

	if($_POST['email'] && !preg_match( "/[\r\n]/", $_POST['email']) ) {
	  $headers = "From: $_POST[email]";
	} else {
	  $headers = "From: $youremail";
	}

	mail($youremail, 'Company - Mensaje ', $body, $headers );

} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Thank you!</title>
</head>
<body>
<p> Thank you! We will reply you as soon as possible.</p>
</body>
</html>