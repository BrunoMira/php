<?php
	
	require 'PHPMailer/PHPMailerAutoload.php';
	
	$mail = new PHPMailer;

	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'user@example.com';                 // SMTP username
	$mail->Password = 'secret';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('from@example.com', 'Mailer');
	$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
	$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('info@example.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');

	$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
	
	
	
	
	
	/*
	$email = $_POST['email_txt'];
	$assunto = $_POST['assunto_txt'];
	$msg = $_POST['msg_txt'];
	
	if( mail($email,$assunto,$msg,) ){
		echo "Email Enviado";
	}else{
		echo "Erro ao Enviar";
	}
	*/
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
		<title>Aula 26 - Enviar</title>
	</head>
	<body>
		<br/> <br/> 
		<form name="email" method="post" action="26 - Email.php">
			<label >Email:</label> <br/>
			<input type="text" name="email_txt" /> <br/> 
			<label >Assunto:</label> <br/>
			<input type="text" name="assunto_txt" /> <br/> 
			<label >Mensagem:</label> <br/>
			<textarea name="msg_txt" rows="5" cols="50"></textarea> <br/> 
			
			<input type="submit" name="enviar" /> <br/>
		<form/>
	
	</body>
</html>
