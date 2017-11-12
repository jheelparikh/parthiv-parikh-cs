<?php
require 'PHPMailer/src/PHPMailer.php';

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactno = $_POST['contactno'];
	$message = $_POST['message'];


	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
	$headers .= 'From: jheel_parikh@yahoo.com' . "\r\n";

	$msg = '<html><body>
<div class="box-skills">
<div class="col-xs-12">
<table>
<tr>
<th>Name</th>
<td>' . $name . '</td>
</tr>
<tr>
<th>Email</th>
<td>' . $email . '</td>
</tr>
<tr>
<th>Contact No.</th>
<td>' . $contactno . '</td>
</tr>
<tr>
<th>Message</th>
<td>' . $message . '</td>
</tr>
</table>
</div>
</div>
</body></html>';

	$mail = new PHPMailer\PHPMailer\PHPMailer;


	$mail->SMTPDebug = 0;
	$mail->isSMTP();                            // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                     // Enable SMTP authentication
	$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
	$mail->Username = 'jheel.parikh2412@gmail.com';          // SMTP username
	$mail->Password = 'jheel2412'; // SMTP password
	$mail->Port = 25;

	$mail->setFrom('jheel.parikh2412@gmail.com', 'Jheel Parikh');
	$mail->addReplyTo('jheel.parikh2412@gmail.com', 'Jheel Parikh');
	$mail->addAddress('jheel_parikh@yahoo.com', 'Jheel Parikh');   // Add a recipient

	$mail->isHTML(true);  // Set email format to HTML

	$bodyContent = $msg;
	//$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';

	$mail->Subject = 'New Message from : '.$name;
	//$mail->Body = $bodyContent;
	$mail->msgHTML($bodyContent);

	if (!$mail->send()) {
		echo "ASAS"; die;
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo; ;
	} else {
		echo "done"; die;
		echo 'Message has been sent';
	}
	echo 'Thank you so much';
}
*/
	/*
	$to = "jheel_parikh@yahoo.com";
	$subject = "HTML email";

	$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
	$headers .= 'From: <jheel_parikh@yahoo.com>' . "\r\n";
	$headers .= 'Cc: jheel_parikh@yahoo.com' . "\r\n";

	mail($to, $subject, $message, $headers);
	echo 'Thank you so much';
//var_dump($msg);
//$test = mail("jheel_parikh@yahoo.com","My subject",$msg,$headers);
//var_dump($test);
}
	*/

?>
