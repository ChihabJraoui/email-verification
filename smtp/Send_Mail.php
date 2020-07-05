<?php
function sendEmail($host, $port, $user, $pass, $fromName, $to, $subject, $body)
{
	require 'class.phpmailer.php';
	// $from = "from@gmail.com";
	
	$mail = new PHPMailer();
	// $mail->IsSMTP(true);            				// use SMTP
	$mail->IsHTML(true);
	$mail->SMTPAuth = true;                  	// enable SMTP authentication
	$mail->SMTPSecure = "tls";
	$mail->Host = $host; 		// Amazon SES server, note "tls://" protocol
	$mail->Port = $port;                    		// set the SMTP port
	$mail->Username = $user;	// SMTP  username
	$mail->Password = $pass;  				// SMTP password
	
	$mail->SetFrom($user, $fromName);
	$mail->AddReplyTo($user,$fromName);
	$mail->AddAddress($to);
	$mail->Subject = $subject;
	$mail->Body = $body;

	return $mail->Send();
}
?>