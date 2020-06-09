<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($send_to_mail, $send_to_name, $subject, $content)
{
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    global $config_name;
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = $config_name['host'];                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = $config_name['username'];                     // SMTP username
        $mail->Password   = $config_name['password'];                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = $config_name['port'];                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom($config_name['username'], $config_name['fullname']);
        $mail->addAddress($send_to_mail, $send_to_name);     // Add a recipient
        // $mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($config_name['username'], $config_name['fullname']);
        //  $mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
       // $mail->addAttachment(5.jpg);         // Add attachments
        //  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        //   $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Gui thanh cong';
    } catch (Exception $e) {
        echo "Email khong gui duoc. Chi tiet loi: {$mail->ErrorInfo}";
    }
}
