<?php

ob_start();
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Load Composer's autoloader
//require(__DIR__ . 'vendor/autoload.php');
//require(__DIR__ . 'vendor/phpmailer/phpmailer/src/Exception.php');
//require(__DIR__ . 'vendor/phpmailer/phpmailer/src/PHPMailer.php');
//require(__DIR__ . 'vendor/phpmailer/phpmailer/src/SMTP.php');


//require realpath(__DIR__ . '/vendor/autoload.php');
//require 'vendor/phpmailer/phpmailer/src/Exception.php';
//require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
//require 'vendor/phpmailer/phpmailer/src/SMTP.php';

//////////////
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__);
//$dotenv = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();
///////////////
$dotenv->required(['SMTP_USERNAME', 'SMTP_PASSWORD']);
//var_dump($_ENV);
//var_dump(getenv('SMTP_USERNAME'));
//var_dump(getenv('SMTP_PASSWORD'));



//  if(isset($_POST['name'] && isset($_POST['email'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $subject = $_POST['subject'];
//     $body = $_POST['body'];
//     //$message = $_POST['message'];

//     require_once "PHPMailer/PHPMailer.php";
//     require_once "PHPMailer/SMTP.php";
//     require_once "PHPMailer/Exception.php";


// /////////

// /////////
// } 


    //////////////

    $mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->SMTPDebug = 1;                      // Enable verbose debug output
    $mail->isSMTP();   
    $mail->CharSet = 'utf-8';                                         // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    //$mail->Username   = 'steffen.schafrik@googlemail.com';                     // SMTP username
    //$mail->Password   = 'vedsYv-jixxo8-bonbib';  
    $mail->Username   = getenv('SMTP_USERNAME'); 
    $mail->Password   = getenv('SMTP_PASSWORD');                            // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; 
    //$mail->SMTPSecure = 'ssl';        // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    ////////
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    ////////

    echo $mail->Username;
    echo $mail->Password;

    //Recipients
    //$mail->setFrom('steffen.schafrik@icloud.com', 'Mailer');
    $mail->setFrom($_POST['email'], $_POST['name']);
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    $mail->addAddress('steffen.schafrik@googlemail.com');   // Add a recipient
    //$mail->addAddress('steffen.schafrik@icloud.com');     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Handling Request';
    $mail->Body    = $_POST['body'];
    //$mail->Body = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
    header("Location: index.php?contacted=1");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    //////////////

?>