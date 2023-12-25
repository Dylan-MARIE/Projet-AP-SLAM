<?php
    $data=yaml_parse_file('data/a-propos.yaml');
?>

<section id="a-propos">
    <h1><?= $data['titre'] ?></h1>
    <div class="contenu-a-propos">
        <?php
            echo '<div class="position-image">';
                echo '<img src="assets/images/'.$data['a-propos']['photo'].'" alt="logo">';
            echo '</div>';
            echo '<p>'.$data['a-propos']['accroche'].'</p>';
                
            foreach ($data['a-propos']['paragraphes'] as $paragraphe){
                echo '<p>'.$paragraphe.'</p>';
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