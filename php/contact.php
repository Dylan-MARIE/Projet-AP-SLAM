<?php
    $data=yaml_parse_file('data/contact.yaml');
    $formulaire=$data['formulaire'];
    $rgpd=$formulaire['rgpd'];
?>

<section id="contact">
    <h1><?= $data['titre'] ?></h1>
    <div class="contenu-contact">
        <form action="../index.php" method="post" id="contact-form" onsubmit="return validateForm()">
            <label for="nom"><?= $formulaire['nom']; ?></label>
            <input type="text" id="nom" name="nom" required>

            <label for="email"><?= $formulaire['email']; ?></label>
            <input type="email" id="email" name="email" required>

            <label for="objet"><?= $formulaire['objet']; ?></label>
            <input type="text" id="objet" name="objet" required>

            <label for="message"><?= $formulaire['message']; ?></label>
            <textarea id="message" name="message" required></textarea>

            <div class="g-recaptcha" data-sitekey="6LfqqzopAAAAAA1-KHPbW9pJdpsAFKuQVWY9JeT9"></div>

            <button type="submit"><?= $formulaire['bouton']; ?></button>

            <details class="rgpd">
                <summary class="rgpd_titre"><?= $formulaire['annexe']; ?></summary>
                <p><?= $rgpd['§1']; ?><a href="<?= $rgpd['lien'] ?>" class="cnil" target="_blank"><?= $rgpd['§2']; ?></a>.</p>
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