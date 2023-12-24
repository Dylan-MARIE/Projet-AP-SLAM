<?php
    $data=yaml_parse_file('data/contact.yaml');
?>

<section id="contact">
    <h1>Contact</h1>
    <div class="contenu-contact">
    <form action="index.php" method="post" id="contact-form">
        <label for="nom">Nom de l'expéditeur :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="email">Adresse de courriel de l'expéditeur :</label>
        <input type="email" id="email" name="email" required>

        <label for="objet">Objet du message :</label>
        <input type="text" id="objet" name="objet" required>

        <label for="message">Contenu du message :</label>
        <textarea id="message" name="message" required></textarea>

        <div class="g-recaptcha" data-sitekey="6LfqqzopAAAAAA1-KHPbW9pJdpsAFKuQVWY9JeT9"></div>

        <button type="submit" id="envoyerBtn">Envoyer le message</button>

        <details class="rgpd">
        <summary class="rgpd_titre">Règlement Général sur la Protection des Données</summary>
            Ce site respecte la vie privée des personnes conformément au Règlement Général sur la Protection des Données (RGPD). 
            Les données fournies via le formulaire sont utilisées uniquement pour l'envoi d'emails, sans conservation au-delà de l'objectif spécifié.
            Davantage d'informations concernant le RGPD et le traitement des données personnelles sont disponibles sur le site officiel de la 
            <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees" class="cnil" target="_blank">CNIL</a>.
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