<?php
    $data=yaml_parse_file('data/formation.yaml');
?>

<section id="formation">
    <h1><?= $data['titre'] ?></h1>
    <?php echo '<a href="assets/images/'.$data['cv']['pdf'].'" class="cv" target="_blank"><img src="assets/images/'.$data['cv']['image'].'" alt="Curriculum Vitæ"></a>' ?>
    <div class="contenu-formation">
        <?php
            foreach ($data['formation'] as $formation){
                echo '<details>';
                echo '<summary class="titre">'.$formation['domaine'].'</summary>';

                foreach ($formation['contenu'] as $contenu) {
                    echo '<div class="contenu-couleur">'.$contenu['lieu'].'</div>';

                    foreach ($contenu['description'] as $description){
                        echo '<div class="contenu"><ul><li>'.$description.'</li></ul></div>';
                    }
                }
                echo '</details>';
            }
        ?>
    </div>
    <footer>
        <a class="arrow-color-left" href="#experience">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#contact">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>
</section>