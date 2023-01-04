<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

// Create a new PHPMailer object
$mail = new PHPMailer(true);

// Set up SMTP
$mail->isSMTP();
$mail->Host = 'SMTP Server';
$mail->SMTPAuth = true;
$mail->Username = 'Your Username';
$mail->Password = 'Your Password';
$mail->SMTPSecure = 'tls';
$mail->Port = 25;

// Set the sender and recipient
$mail->setFrom('Sender Email', 'Sender Name');
$mail->addAddress('Reciver Emaik', 'Recipient Name');

// Set the subject and body of the email
$mail->Subject = 'Email Subject';
$mail->Body = 'Email body';

// Send the email
if ($mail->send()) {
    echo 'Email was sent successfully';
} else {
    echo 'Error: ' . $mail->ErrorInfo;
}

