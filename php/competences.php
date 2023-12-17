<?php
    $data=yaml_parse_file('data/competences.yaml');
?>

<section id="competences">
    <h1><?= $data['titre'] ?></h1>
    <div class="contenu-competences">
        <?php
        foreach ($data['competences'] as $competence){
            echo '<details>';
            echo '<summary class="titre">'.$competence['domaine'].'</summary>';

            foreach ($competence['contenu'] as $item){
                echo "<div class='contenu'>".$item["nom"]."<div class='progress'><div style='width:".$item["niveau"]."%;' class='barre".(ceil($item["niveau"]/10)*10)."'></div></div></div>";
            }
            echo '</details>';
        }
        ?>
    </div>
    <footer>
        <a class="arrow-color-left" href="#a-propos">
            <span class="arrow-color-right">Page précédente</span>
            <i class="fa-solid fa-arrow-left-long"></i>
        </a>
        <a class="arrow-color-right" href="#experience">
            <i class="fa-solid fa-arrow-right-long"></i>
            <span class="arrow-color-right">Page suivante</span>
        </a>
    </footer>
</section>