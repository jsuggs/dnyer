<?php

$absolute_url = "http://www.dnyer.com/";


switch ($_POST['dsd_direct']) {
	case 'contact':
		$name = $_POST["name"];
		$email = $_POST["email"];
		$comments = $_POST["comments"];
		
		$admin_email = "info@dnyer.com";
		$to = $admin_email;
		$subject = "Dnyer Site Development - Contact Request Submission from ".$name." (".$email.")";
		$message = "Dnyer Site Development - Contact Request Submission\n\n";
		$message .= $name . "\n";
		$message .= $email . "\n";
		$message .= $comments . "\n\n";
		$headers = "From: dnyer11@gmail.com" . "\r\n";
		
		
		mail("dnyer11@gmail.com", $subject, $message, $headers);
		
		if ($_POST['is_quick_contact'])
			header('Location: '.$_POST['is_quick_contact']);
		else
			header('Location: '.$absolute_url.'thankyou.html');
	break;
}

?>