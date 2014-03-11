<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	$name = $_POST['names'];
	$email = $_POST['email'];
	$tel = $_POST['tele'];
	$mail = new PHPMailer();
	$mail->IsHTML(true);                  // Set email format to HTML
	$mail->From = 'contact@mobile-scout';
	$mail->FromName ='http://www.concept-academy.co.il/lnd/mob/step2/index.php';
	$mail->addAddress('web@concept-academy.co.il', 'Qualified Leads');
	$mail->Subject = 'A new Lead from'.$name;
	$mail->Body    = 'A new lead from: <br> Name :'.$name.' <br> Email:'.$email.'<br>Mobile:'.$tel;
	$mail->AltBody = 'A new lead from: <br> Name :'.$name.' <br> Email:'.$email.'<br>Mobile:'.$tel;
	if(!$mail->Send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}else{
		$mail->ClearAddresses();
		$mail->addAddress('leadsbackup@conce.pt', 'Qualified Leads');
		if(!$mail->Send()) {
		   session_start();
		   $_SESSION['error'] ='error';
		   header("Location: http://www.concept-academy.co.il/lnd/mob/step2/index.php");
		}else{
			session_start();
			$_SESSION['error'] = 'success';
			header("Location: http://www.concept-academy.co.il/lnd/mob/step2/index.php");
		}
	}
?>