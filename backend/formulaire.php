<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use ReCaptcha\ReCaptcha;

// Vérification reCAPTCHA
$recaptcha_secret_key = '6LfqqzopAAAAAImz_I94495ymri7oU0nP4RTvSDy';
$recaptcha = new ReCaptcha($recaptcha_secret_key);

$gRecaptchaResponse = $_POST['g-recaptcha-response'];
$remoteIp = $_SERVER['REMOTE_ADDR'];
$resp = $recaptcha->setExpectedHostname('srv1-vm-1137.sts-sio-caen.info')
                  ->verify($gRecaptchaResponse, $remoteIp);

if ($resp->isSuccess()) {
    // Si la vérification reCAPTCHA est réussie, traiter le reste du formulaire
    if (!empty($_POST)) {
        $mail = new PHPMailer(true);
        try {
            // Configuration du serveur de messagerie
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'dylan.marie.test@gmail.com';
            $mail->Password = 'test.smtp';
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
    }
} else {
    $errors = $resp->getErrorCodes();
    var_dump($errors);
}
?>
