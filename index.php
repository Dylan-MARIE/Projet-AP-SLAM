<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Site professionnel de Dylan MARIE</title>
    <link rel="stylesheet" href="assets/css/site.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque&display=swap" rel="stylesheet">
    <?php include("lib/yaml/yaml.php"); ?>
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
        <div class="contenu-contact">
        <form action="backend/contact.php" method="post">
            <label for="nom">Nom de l'expéditeur :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Adresse de courriel de l'expéditeur :</label>
            <input type="email" id="email" name="email" required>

            <label for="objet">Objet du message :</label>
            <input type="text" id="objet" name="objet" required>

            <label for="message">Contenu du message :</label>
            <textarea id="message" name="message" required></textarea>

            <label for="captcha">Captcha → 2 + 2 =</label>
            <input type="number" id="captcha" name="captcha" required>

            <button type="submit">Envoyer le message</button>

            <details class="rgpd">
            <summary class="rgpd_titre">Règlement Général sur la Protection des Données</summary>
                Sur ce site, votre vie privée est respectée et le Règlement Général sur la Protection des Données est appliqué. 
                Les informations que vous fournissez via ce formulaire ne seront utilisées que dans le but spécifié et ne seront pas 
                conservées au-delà de la période nécessaire pour atteindre cet objectif. // La récupération des données ne sert qu'à l'envoi d'un mail et ces données ne sont pas stockées.
            </details>
        </form>
        </div>
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