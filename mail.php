<?php 
// include required phpmailer files
required 'forms/PHPMailer.php';
required 'forms/SMTP.php';
required 'forms/Exception.php';
// define name spaces
use 'PHPMailer\PHPMailer';
use 'PHPMailer\PHPMailer\SMTP';
use 'PHPMailer\PHPMailer\Exception';
// create instance of phpmailer
$mail = new PHPMailer();
//set mailer to use smtp
$mail->isSMTP();
//define smtp host
$mail->Host = "smtp.gmail.com";
//enable smtp authentication
$mail->SMTPAuth = "true";
// set type of encryption (ssl/tls)
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail username
$mail->username = "ronofelix008@gmail.com";
//set gmail password
$mail->Password = "33912118rono?";
//set email subject
$mail->Subject = "You have received email from portfolio"
//set sender email
$mail->setFrom("ronodennis580@gmail.com");
//email body
$mail->Body = "This is your email"
//add recipient email
$mail->addAddress("langatgilbert2013@gmail.com");
//Finally send email

if($mail->Send()){
    echo "email sent..!";
}
else{
    echo "Error...!";
}
$mail->Send()
//closing smtp connection
$mail->smtpClose();
?>