<?php
include_once '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (!empty($_POST)) {
    $mail = new PHPMailer(true);

    try {
        // Configuration du serveur de messagerie
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dylan.marie.test@gmail.com';
        $mail->Password = 'test.smtp';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 587;

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
        echo "Le message n'a pas été envoyé ! Mailer Error: {$mail->ErrorInfo}";
    }
}
?>