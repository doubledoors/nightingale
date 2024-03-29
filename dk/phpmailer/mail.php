<?php

	if(isset($_POST['submit'])){

		$name = $_POST['name'];
		$age = $_POST['age'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$idea = $_POST['idea'];

		// Error reporting for debug
		// ini_set('display_errors',  true); 
		// error_reporting(1); 
		
		//SMTP needs accurate times, and the PHP time zone MUST be set
		//This should be done in your php.ini, but this is how to do it if you don't have access to that
		date_default_timezone_set('Etc/UTC');

		require 'PHPMailerAutoload.php';

		//Create a new PHPMailer instance
		$mail = new PHPMailer;

		//Tell PHPMailer to use SMTP
		$mail->isSMTP();

		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 0;

		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';

		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		// use
		// $mail->Host = gethostbyname('smtp.gmail.com');
		// if your network does not support SMTP over IPv6

		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;

		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';

		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;

		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "libratonecasting@gmail.com";

		//Password to use for SMTP authentication
		$mail->Password = "libratone123";

		//Set who the message is to be sent from
		$mail->setFrom('libratonecasting@gmail.com', 'Libratone Casting');

		//Set who the message is to be sent to
		$mail->addAddress('libratonecasting@gmail.com', 'Libratone Casting');

		//Set the subject line
		$mail->Subject = 'Nightingale 360 | Idea Submission from '.$name;

		$mail->Body = "<html><h2>Nightingale 360 | Idea Submission</h2><p>From: ".$name."<br/><br/>Age:  ".$age."<br/><br/>Email: ".$email."<br/><br/>Country: ".$country."<br/><br/>Idea submission:<br/><br/> ".$idea."</p></html>";

		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';

		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    header('Location: thank_you.php');
		}
	}
?>