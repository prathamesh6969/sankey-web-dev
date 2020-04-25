<?php
// require 'PHPMailer/PHPMailerAutoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master\src\Exception.php';
require 'PHPMailer-master\src\PHPMailer.php';
require 'PHPMailer-master\src\SMTP.php';
$mail = new PHPMailer;

// $mail->isSMTP();
// // $mail->SMTPDebug = 2;
// $mail->SMTPAuth = true;
// $mail->Host = 'smtp.gmail.com';
// $mail->Username = 'kunalmahajan2013@gmail.com';
// $mail->Password = 'kunal2808';
// $mail->SMTPSecure = 'tls';
// $mail->Port = 587;
// $mail->From = 'kunalmahajan2013@gmail.com';
// $mail->addAddress('kunal@evxmail.net', 'Raj Amal W');
// $mail->isHTML(true);

// $mail->Subject = 'Task Update - website';
// $mail->Body    = 'Hi suhas';

// if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//    exit;
// }

// echo 'Message has been sent';

$name = $_POST['name'];
$email = $_POST['email'];
$description = $_POST['comment'];
$contact = $_POST['contact'];
$mail = new PHPMailer;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = 'kunalmahajan2013@gmail.com';
$mail->Password = 'kunal2808';
$mail->From = 'kunalmahajan2013@gmail.com';
$mail->addAddress($email);
$mail->isHTML(true);

$mail->Subject = 'Application for new joinee';
$mail->Body    = "Name : " . $name . "<br />" . "Email ID : " . $email . "<br />" . "Comment : " . $description . "<br />" . "Contact No.: " . $contact;
if (!$mail->send()) {
$error = "Mailer Error: " . $mail->ErrorInfo;
echo '<p id="para">'.$error.'</p>';
}
else {
echo '<p id="para">Message sent!</p>';
}
?>