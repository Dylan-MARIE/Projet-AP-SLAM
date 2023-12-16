<section id="a-propos">
    <h1>à propos</h1>
    <div class="contenu-a-propos">
    <?php $data=yaml_parse_file('../data/a-propos.yaml');
        echo '<div class="position-image">';
            echo '<img src="assets/images/'.$data["accueil"]["photo"].'" alt="">';
        echo '</div>';
        echo '<p>'.$data["a-propos"]["accroche"].'</p>';
        foreach($data["a-propos"]["paragraphes"] AS $para) {
            echo '<p>'.$para.'</p>';
        }
    ?>
    </div>
    <footer>
        <a class="arrow-color-left" href="#accueil">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#competences">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>
</section>