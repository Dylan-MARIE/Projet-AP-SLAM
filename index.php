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
        include_once "vendor/autoload.php";
        include("lib/yaml/yaml.php"); 
    ?>
</head>
<body>
    <?php include("php/menu.php"); ?>

    <?php include("php/accueil.php"); ?>

    <?php include("php/a-propos.php"); ?>

    <?php include("php/competences.php"); ?>

    <?php include("php/experience.php"); ?>

    <?php include("php/formation.php"); ?>

    <?php include("php/contact.php"); ?>

    
    <?php
    if(!empty($_POST)){
        include("backend/formulaire.php");
        if(isset($error)){
            echo "<div class='erreur'>$error</div>";
        }
    }
    ?>

    <script src="https://kit.fontawesome.com/9dc810df0d.js" crossorigin="anonymous"></script>
    <script src="assets/js/site.js"></script> 
</body>
</html>