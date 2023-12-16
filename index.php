<?php
    include("lib/yaml/yaml.php");
?>

<!doctype html>
<html lang="fr">
<head>
    <title>Site professionnel de Dylan MARIE</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/site.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
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
    <section id="contact">
        <h1>Contact</h1>
        <p>Formulaire de contact : Nom de l'expéditeur / Adresse de courriel de l'expéditeur / Objet du message / Contenu du message / Captcha pour éviter les robots / Envoi d'un mail vers mon adresse email</p>
            
        <footer>
            <a class="arrow-color-left" href="#formation">
                <span class="arrow-color-right">Page précédente</span>
                <i class="fa-solid fa-arrow-left-long"></i>
            </a>
            <a class="arrow-color-right" href="#accueil">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span class="arrow-color-right">Page suivante</span>
            </a>
        </footer>      
    </section>
<!--FIN SECTION CONTACT-->

    <script src="https://kit.fontawesome.com/9dc810df0d.js" crossorigin="anonymous"></script>
    <script src="assets/js/site.js"></script> 
</body>
</html>