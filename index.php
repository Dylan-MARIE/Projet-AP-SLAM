<?php
    include("lib/yaml/yaml.php");
    $data=yaml_parse_file('config/index.yaml');
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

<?php include("php/menu.php"); ?>

<!--SECTION ACCUEIL-->
    <section id="accueil">
        <h1>Accueil</h1>
        <div class="contenu-accueil">
            <?php
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
<!--FIN SECTION ACCUEIL-->

<!--SECTION A PROPOS-->
    <section id="a-propos">
        <h1>à propos</h1>
        <div class="contenu-a-propos">
        <?php
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
<!--FIN SECTION A PROPOS-->

<!--SECTION COMPETENCES-->
    <section id="competences">
        <h1>Compétences</h1>
        <div class="contenu-competences">
           <?php 
                foreach ($data['competences'] as $competence) {
                    echo '<details>';
                    echo "<summary class='titre'>{$competence['domaine']}</summary>";

                    foreach ($competence['contenu'] as $item) {
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
<!--FIN SECTION COMPETENCES-->

<!--SECTION EXPERIENCE-->
    <section id="experience">
        <h1>Expérience</h1>
        <a href="assets/images/cv.pdf" class="cv" target="_blank"><img src="assets/images/cv.png" alt="Curriculum Vitæ"></a>
        <div class="contenu-experience">
            <details>
                <summary class="titre">Manutentionnaire</summary>
                <div class="contenu-couleur">Vire Normandie | 2017 - 2023</div>
                <div class="contenu"><ul><li>Conducteur de machines</li></ul></div>
                <div class="contenu"><ul><li>Manutention et conditionnement</li></ul></div>
            </details>

            <details>
                <summary class="titre">Sous-officier de l'armée de l'air</summary>
                <div class="contenu-couleur">BA 721 Rochefort | 2022</div>
                <div class="contenu"><ul><li>Encadrement d’équipes de quelques personnes et lien avec la hiérarchie dans le cadre de missions : assigner et coordonner les tâches au sein de l'équipe et en assurer le suivi</li></ul></div>
            </details>

            <details>
                <summary class="titre">équipier polyvalent</summary>
                <div class="contenu-couleur">McDonald's Ifs | 2019</div>
                <div class="contenu"><ul><li>Prise de commandes au guichet et au drive, encaissement, préparation de commandes, service en salle</li></ul></div>
                <div class="contenu"><ul><li>Assistance à la clientèle en cas de problème ou de besoin</li></ul></div>
            </details>

            <details>
                <summary class="titre">Agent territorial</summary>
                <div class="contenu-couleur">Vire Normandie | 2018 - 2019</div>
                <div class="contenu"><ul><li>Ambassadeur du tri : sensibilisation des usagers au tri sélectif et à la gestion des déchets</li></ul></div>
                <div class="contenu"><ul><li>Agent de déchetterie : accueil des usagers et aide au tri</li></ul></div>
            </details>
        </div>
        <footer>
            <a class="arrow-color-left" href="#competences">
                <span class="arrow-color-right">Page précédente</span>
                <i class="fa-solid fa-arrow-left-long"></i>
            </a>
            <a class="arrow-color-right" href="#formation">
                <i class="fa-solid fa-arrow-right-long"></i>
                <span class="arrow-color-right">Page suivante</span>
            </a>
        </footer>
    </section>
<!--FIN SECTION EXPERIENCE-->

<!--SECTION FORMATION-->
    <section id="formation">
        <h1>Formation</h1>
        <a href="assets/images/cv.pdf" class="cv" target="_blank"><img src="assets/images/cv.png" alt="Curriculum Vitæ"></a>
        <div class="contenu-formation">
            <details>
                <summary class="titre">BTS SIO | Parcours SISR</summary>
                <div class="contenu-couleur">CaenSup Sainte-Ursule | Caen | 2023-2025</div>
                <div class="contenu"><ul><li>Installation, intégration, administration, sécurisation des équipements et des services informatiques</li></ul></div>
                <div class="contenu"><ul><li>Exploitation, supervision, maintenance d’une infrastructure systèmes et réseaux</li></ul></div>
                <div class="contenu"><ul><li>Choix et mise en œuvre de solutions d’hébergement</li></ul></div>
                <div class="contenu"><ul><li>Définition et configuration des postes clients, des serveurs et des équipements d’interconnexion, leur déploiement et leur maintenance</li></ul></div>
            </details>

            <details>
                <summary class="titre">Prévention et secours civiques de niveau 1</summary>
                <div class="contenu-couleur">Armée de l'Air | BA 721 Rochefort | 2022</div>
                <div class="contenu"><ul><li>Formation aux premiers soins et à l'assistance aux personnes en danger</li></ul></div>
                <div class="contenu"><ul><li>Sauvetage au combat</li></ul></div>
            </details>

            <details>
                <summary class="titre">Certificat d'aptitude militaire</summary>
                <div class="contenu-couleur">Armée de l'Air | BA 721 Rochefort | 2022</div>
                <div class="contenu">Formation militaire initiale</div>
                <div class="contenu"><ul><li>Tir militaire</li></ul></div>
                <div class="contenu"><ul><li>Stage de nomadisation</li></ul></div>
                <div class="contenu"><ul><li>Technique d'Intervention Opérationnelle Rapprochée</li></ul></div>
            </details>

            <details>
                <summary class="titre">Baccalauréat scientifique option SVT</summary>
                <div class="contenu-couleur">Institut Saint Jean-Eudes | Vire Normandie | 2017</div>
                <div class="contenu"><ul><li>Apprentissage approfondi des mathématiques</li></ul></div>
                <div class="contenu"><ul><li>Apprentissage approfondi de la physique et de la chimie</li></ul></div>
                <div class="contenu"><ul><li>Apprentissage approfondi des sciences de la Vie et de la Terre</li></ul></div>
            </details>
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