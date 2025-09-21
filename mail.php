<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// Load Composer's autoloader
require_once __DIR__ . '/vendor/autoload.php';


require_once 'config.php';

function sendWelcomeEmail($recipientEmail, $recipientName) {
    global $conf;

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = $conf['smtp_host'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $conf['smtp_user'];
        $mail->Password   = $conf['smtp_pass'];
        $mail->SMTPSecure = $conf['smtp_secure'];
        $mail->Port       = $conf['smtp_port'];

        // Recipients
        $mail->setFrom($conf['smtp_user'], $conf['site_name']);
        $mail->addAddress($recipientEmail, $recipientName);

        // Content
        $mail->isHTML(true);
        $mail->Subject = "Welcome to {$conf['site_name']}!";
        $mail->Body    = "<h1>Hi {$recipientName}!</h1><p>Welcome to Househunt. We're thrilled to have you!</p>";
        $mail->AltBody = "Hi {$recipientName}, Welcome to Househunt!";

        $mail->send();
        echo "Welcome email sent to {$recipientName}";
    } catch (Exception $e) {
        echo "Email failed. Error: " . $mail->ErrorInfo;
    }
}
?>