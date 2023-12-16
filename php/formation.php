<section id="formation">
    <h1>Formation</h1>
    <a href="./../assets/images/cv.pdf" class="cv" target="_blank"><img src="./../assets/images/cv.png" alt="Curriculum Vitæ"></a>        
    <div class="contenu-formation"> 
    <?php $data=yaml_parse_file('../data/formation.yaml');
        foreach ($data['formation'] as $formation) {
            echo "<details>";
            echo "<summary class='titre'>{$formation['domaine']}</summary>";

            foreach ($formation['contenu'] as $contenu) {
                echo "<div class='contenu-couleur'>".$contenu['lieu']."</div>";

                foreach ($contenu['description'] as $description){
                    echo "<div class='contenu'><ul><li>$description</li></ul></div>";
                }
            }
            echo "</details>";
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