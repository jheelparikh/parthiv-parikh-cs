<?php
require 'Libraries/vendor/autoload.php';

if (isset($_POST['name'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$contactno = $_POST['contactno'];
	$message = $_POST['message'];

	$msg = '
<html>
	<head>
		<style>
			.box-skills {
				padding: 7px 7px 7px 7px;
				background: #fff;
				color: #000;
				text-align: left;
				cursor: pointer;
				box-shadow: 0 0 5px #367588;
				font-size: 14px;
				width: 100%;
			}
			td,th{
				padding: 1% !important;
			}
        </style>
   </head>
<body>
	<div class="box-skills">
	 	<div id="outer" style="width: 100%;">
	 	<div  style="display: table; margin: 0 auto;">
					<table border="1" style="width: 60%;" cellpadding="5px">
						<tr>
							<th>name</th>
							<td>' . $name . '</td>
						</tr>
						<tr>
							<th>email</th>
							<td>' . $email . '</td>
						</tr>
						<tr>
							<th>contact No.</th>
							<td>' . $contactno . '</td>
						</tr>
						<tr>
							<th>message</th>
							<td>' . $message . '</td>
						</tr>
					</table>
			</div>
		</div>
	</div>
</body>
</html>';
	try {
		$mail = new PHPMailer\PHPMailer\PHPMailer();
		$mail->SMTPDebug = 4;
		$mail->isSMTP();                            // Set mailer to use SMTP
		$mail->Host = 'tls://smtp.gmail.com:587';             // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                     // Enable SMTP authentication
		$mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
		$mail->Username = 'default.sender11@gmail.com';          // SMTP username
		$mail->Password = 'defaultsender'; // SMTP password
		$mail->Port = 587;

		$mail->setFrom($email);
		$mail->addReplyTo('pparikhcs@gmail.com', 'Parthiv Parikh');
		$mail->addAddress('pparikhcs@gmail.com', 'Parthiv Parikh');   // Add a recipient
		//$mail->addReplyTo('jheel.parikh2412@gmail.com');
		//$mail->addAddress('jheel.parikh2412@gmail.com');   // Add a recipient

		$mail->isHTML(true);  // Set email format to HTML

		$bodyContent = $msg;

		$mail->Subject = 'New Message from : ' . $name;
		$mail->msgHTML($bodyContent);

		if($mail->send()){
			echo 'success';
		}else {
			echo "error";
		}
	} catch (\PHPMailer\PHPMailer\Exception $e) {
		echo($e->errorMessage());
		die;
	} catch (ErrorException $e) {
		echo($e->getMessage());
		die; //Boring error messages from anything else!
	}
}
?>
