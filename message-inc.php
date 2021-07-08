<?php
	require('../PHPMailer/PHPMailer.php');
	require('../PHPMailer/SMTP.php');
	require('../PHPMailer/Exception.php');

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	function SendMail($senderEmail, $userName, $subject, $msg){
		$mail = new PHPMailer(true);
		try {
			$mail->isSMTP();                                                  //Send using SMTP
			$mail->Host       = 'tls://smtp.gmail.com:587';                  //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                       //Enable SMTP authentication
			$mail->Username   = "jamesidagames@gmail.com";                  //SMTP username
			$mail->Password   = 'osasere1';                               //SMTP password
			$mail->SMTPSecure = "TLS";                                   //Enable implicit TLS encryption
			$mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

			//Recipients
			$mail->setFrom($senderEmail, "MyWebsite from: " . $userName);
			$mail ->addAddress('oidahosa@bell.net', 'James');

			$mail->Subject = $subject;
			$mail->Body    = $msg;
			$mail->AltBody = $msg;
			$mail->send();
			echo 'Message has been sent' . $msg;
		} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];
	$username = $fname . " " . $lname;

	if(empty($email) || empty($message)){
		echo "Email and Message field is required!";
	}else{
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$reciever = "oidahosa@bell.net"; 
			$subject = "Job Contact"; 
			$body = "Name:" . $username . "\nEmail:" . $email . "\nPhone:" . $phone . "\nMessage:" . $message . "\n\nRegards,\n" . $username;
			$sender = "From: $email";
			SendMail($email, $username, $subject, $message);
		}else{
			echo "Please enter a valid email address!";
		}
	}
	
?>