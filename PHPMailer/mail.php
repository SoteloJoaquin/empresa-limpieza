<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$nombre = $_POST['name'];
$correo = $_POST['email'];
$asunto = $_POST['subject'];
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.example.com';                //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                  //Enable SMTP authentication
    $mail->Username   = 'yourmail@example.com';        //SMTP username
    $mail->Password   = 'yourpassword';                           //SMTP password
    $mail->SMTPSecure = 'STARTTLS';                            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('yourmail@example.com', 'Your Name');
    $mail->addAddress($correo, $nombre);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = 'Hemos recibido su consulta con éxito. Nuestro personal se pondrá en contacto a la brevedad.';

    $mail->send();
    echo 'El mensaje ha sido enviado';
} catch (Exception $e) {
    echo "No se pudo enviar el mensaje. Error de correo: {$mail->ErrorInfo}";
}