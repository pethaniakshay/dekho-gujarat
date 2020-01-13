<?php 
			ini_set('display_errors', 1);
			error_reporting(~0);
 
			$toemailaddress = "";
			$subjectline = "";
			$body ="Your Password is : ";
			
			ob_start();
			require_once('./class.phpmailer.php');
			$mail = new PHPMailer();
			$mail->IsSMTP();
			$mail->CharSet="UTF-8";
			$mail->SMTPSecure = 'ssl';
			$mail->Host = 'smtp.gmail.com';
			$mail->Port = 465;
			$mail->Username = 'you@gmail.com';
			$mail->Password = 'gmailpassword';
			$mail->SMTPAuth = true;
			
			$mail->From = 'From Email Address';
			$mail->FromName = 'From Name';
			//$mail->AddAddress($email);
			$mail->AddAddress("$toemailaddress");
			
			$mail->IsHTML(true);
			$mail->Subject    = "$subjectline";
			$mail->AltBody    = "To Read Email use HTML View";
			$mail->Body    = "$body";
			
			$t = $mail->Send();
			echo $t;