<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';


$mail = new PHPMailer(true);

$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'salvadordiosdado711@gmail.com';                     // SMTP username
    $mail->Password   = 'Jesus1234567890';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('salvadordiosdado711@gmail.com', 'Certificaciones Mexdevelopers');
    $mail->addAddress('carlosrifa654@gmail.com', 'Juan CaCastian');     // Add a recipient


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Certificaciones Mexdevelopers';
    $mail->Body    = 'Su calificación es de 5 viejo baboso</b>';


    $mail->send();
    echo 'El mensaje se envio a su corrreo';
} catch (Exception $e) {
    echo "Hubo un error wapo: {$mail->ErrorInfo}";
}

?>