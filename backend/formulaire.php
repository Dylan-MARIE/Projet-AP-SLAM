<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

// Vérification reCAPTCHA
$recaptcha_secret_key = '6LfqqzopAAAAAImz_I94495ymri7oU0nP4RTvSDy';
$recaptcha_response = $_POST['g-recaptcha-response'];
$recaptcha_url = "https://www.google.com/recaptcha/api/siteverify?secret={$recaptcha_secret_key}&response={$recaptcha_response}";
$recaptcha = json_decode(file_get_contents($recaptcha_url));

if (!$recaptcha->success) {
    // Échec de la vérification reCAPTCHA, traitement de l'erreur
    $error = "Échec de la vérification reCAPTCHA. Veuillez confirmer que vous n'êtes pas un robot.";
} else {
    // Si la vérification reCAPTCHA est réussie, traiter le formulaire
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
    }
}

// Afficher l'erreur si elle existe
if (isset($error)) {
    echo "<div class='erreur'>$error</div>";
}
?>