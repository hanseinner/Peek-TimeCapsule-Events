<?php

//retrieve variables from form

	$from_name = $_POST['name'];
	$contact_type = $_POST['contact_type'];
	$service_type = $_POST['service_type'];
	$message = $_POST['message'];
	$message = wordwrap($message, 70); //lines should not exceed 70 characters (PHP rule)
	$from_email = $_POST['email'];
	
	//Construct variables for email
	
	$to = "daniel.iskandar31@gmail.com";
	$subject = "$contact_type, $service_type for $from_name";
	
	$mailheader = "From: ".$from_email."\r\n";
	$mailheader .= "Reply-To: ".$from_email."\r\n";
	$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";
	
	$body = "
	
	Customer Name: $from_name
	Customer Email: $from_email
	
	Contact Type: $contact_type
	Service Type: $service_type
	
	Message: $message
	
	";

	
	/*
echo ('Subject: '.$subject);
	
	echo ('Body: '.$body);
*/
	
	mail($to,$subject,$body) or die ("Message not sent");

	echo "Message sent";


?>