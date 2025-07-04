<?php
// Alleen POST toegestaan
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    die('Method Not Allowed');
}

// // reCAPTCHA validatie
// $secretKey = '6Lft82kqAAAAALTLF0n2mIsb-IfIjIsAsT4ESEKm'; // Zet hier je eigen reCAPTCHA secret key
// $responseKey = $_POST['g-recaptcha-response'] ?? '';
// $userIP = $_SERVER['REMOTE_ADDR'];

// if (empty($responseKey)) {
//     die("reCAPTCHA verificatie mislukt. Probeer het opnieuw.");
// }

// $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";
// $data = [
//     'secret' => $secretKey,
//     'response' => $responseKey,
//     'remoteip' => $userIP
// ];
// $options = [
//     'http' => [
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($data),
//     ]
// ];
// $context  = stream_context_create($options);
// $verify = file_get_contents($recaptcha_url, false, $context);
// $captcha_success = json_decode($verify);

// if (!$captcha_success->success) {
//     die("reCAPTCHA verificatie mislukt. Probeer het opnieuw.");
// }

// Input ophalen en valideren
$naam = trim($_POST['naam'] ?? '');
$email = trim($_POST['email'] ?? '');
$telefoon = trim($_POST['telefoon'] ?? '');
$bericht = trim($_POST['bericht'] ?? '');

if (!$naam || !filter_var($email, FILTER_VALIDATE_EMAIL) || !$bericht) {
    die("Vul alle verplichte velden correct in.");
}

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.transip.email';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'info@rijschoolparaat.nl';
    $mail->Password   = 'Nkaraman2002';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('info@rijschoolparaat.nl', "Rijschool Paraat");
    $mail->addAddress('info@rijschoolparaat.nl');
    $mail->addReplyTo($email, $naam);

    $mail->isHTML(true);
    $mail->Subject = 'Nieuwe contactaanvraag via de website';
    $mail->Body    = "
        <h2>Nieuwe contactaanvraag</h2>
        <p><strong>Naam:</strong> " . htmlspecialchars($naam) . "</p>
        <p><strong>E-mail:</strong> " . htmlspecialchars($email) . "</p>
        <p><strong>Telefoon:</strong> " . htmlspecialchars($telefoon) . "</p>
        <p><strong>Bericht:</strong><br>" . nl2br(htmlspecialchars($bericht)) . "</p>
    ";

    $mail->send();
    header('Location: ./bedankt.html'); // Of jouw bedankpagina
    exit;
} catch (Exception $e) {
    error_log("E-mail verzenden mislukt. Fout: {$mail->ErrorInfo}");
    die("Er is een probleem opgetreden bij het verzenden van de e-mail. Foutmelding: " . $mail->ErrorInfo);
}
