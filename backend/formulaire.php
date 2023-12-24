<?php
require_once 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaSecretKey = "6LfqqzopAAAAAImz_I94495ymri7oU0nP4RTvSDy";
    $recaptchaResponse = $_POST["g-recaptcha-response"];

    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        "secret" => $recaptchaSecretKey,
        "response" => $recaptchaResponse,
    ];

    $options = [
        "http" => [
            "header" => "Content-type: application/x-www-form-urlencoded\r\n",
            "method" => "POST",
            "content" => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if ($response["success"] == true) {
        $mail = new PHPMailer(true);

        try {
            // Configuration du serveur de messagerie
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dylan.marie.test@gmail.com'; // Remplacez par votre adresse email
            $mail->Password = 'test.smtp'; // Remplacez par votre mot de passe
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = 465;

            // Destinataire
            $mail->setFrom('dylan.marie.test@gmail.com', 'Mailer');
            $mail->addAddress('dylan.marie.test@gmail.com'); // Remplacez par l'adresse de votre destinataire

            // Contenu du mail
            $mail->isHTML(true);
            $mail->Subject = $_POST['objet'] ?? 'Objet';
            $mail->Body = $_POST['message'] ?? 'This is the HTML message body <b>in bold!</b>';

            $mail->send();
            echo 'Le message a été envoyé.';
        } catch (Exception $e) {
            $error = "Le message n'a pas été envoyé ! Mailer Error: {$mail->ErrorInfo}";
        }

        if (isset($error)) {
            echo "<div class='erreur'>$error</div>";
        }
    } else {
        echo "reCAPTCHA verification failed.";
    }
}
?>