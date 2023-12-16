<section id="accueil">
    <h1>Accueil</h1>
    <div class="contenu-accueil">
        <?php $data=yaml_parse_file('../data/accueil.yaml');
        echo '<div class="position-image">';
            echo '<img src="assets/images/'.$data["accueil"]["photo"].'" alt="">';
        echo '</div>';
        echo '<p>'.$data["accueil"]["accroche"].' '.$data["accueil"]["prenom"].' '.$data["accueil"]["nom"].'</p>';
        ?>
    </div>
    <footer>
        <a class="arrow-color-left" href="#contact">
            <span class="arrow-color-left">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#a-propos">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span></a>
    </footer>
</section>