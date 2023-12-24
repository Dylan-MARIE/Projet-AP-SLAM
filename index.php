<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site professionnel de Dylan MARIE</title>
    <link rel="stylesheet" href="assets/css/site.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php 
        include_once 'vendor/autoload.php';
        include("lib/yaml/yaml.php"); 
    ?>
    <?php
    if (isset($_GET['message'])) {
        $messageType = $_GET['message'];
    
        if ($messageType === 'success') {
            $message = "Le formulaire a été soumis avec succès !";
            $messageClass = "success";
        } elseif ($messageType === 'error') {
            $message = "Une erreur s'est produite lors de la soumission du formulaire.";
            $messageClass = "error";
        } elseif ($messageType === 'captcha-error') {
            $message = "Erreur de vérification reCAPTCHA. Veuillez réessayer.";
            $messageClass = "error";
        }
    }
    ?>
</head>
<body>
    <!--MENU DE NAVIGATION-->
    <?php include("php/menu.php"); ?>
    <!--FIN MENU DE NAVIGATION-->


    <!--SECTION ACCUEIL-->
    <?php include("php/accueil.php"); ?>
    <!--FIN SECTION ACCUEIL-->


    <!--SECTION A PROPOS-->
    <?php include("php/a-propos.php"); ?>
    <!--FIN SECTION A PROPOS-->


    <!--SECTION COMPETENCES-->
    <?php include ("php/competences.php"); ?>
    <!--FIN SECTION COMPETENCES-->


    <!--SECTION EXPERIENCE-->
    <?php include ("php/experience.php"); ?>
    <!--FIN SECTION EXPERIENCE-->


    <!--SECTION FORMATION-->
    <?php include ("php/formation.php"); ?>
    <!--FIN SECTION FORMATION-->


    <!--SECTION CONTACT-->
    <?php include ("php/contact.php"); ?>
    <!--FIN SECTION CONTACT-->
    
    <?php if (isset($message)): ?>
        <div class="message <?php echo $messageClass; ?>"><?php echo $message; ?></div>
    <?php endif; ?>

    <script src="https://kit.fontawesome.com/9dc810df0d.js" crossorigin="anonymous"></script>
    <script src="assets/js/site.js"></script> 
</body>
</html>