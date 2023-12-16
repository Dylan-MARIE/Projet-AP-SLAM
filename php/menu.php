<nav>
    <ul>    
        <li class="deroulant">
            <a href="#accueil"><i class="fa-solid fa-bars"></i></a>
            <ul class="sous">
                <?php $data=yaml_parse_file('../data/menu.yaml');
                foreach($data["menu"] AS $ancre => $page){
                    if(is_string($page)){
                        echo ' <li><a href="#'.$ancre.'">'.$page.'</a></li>';
                    }
                    else {
                        echo '<li><a href="'.$page["url"].'" target="_blank"><i class="fa-brands '.$page["icone"].'"></i></a></li>';
                    }
                }
                ?>
            </ul>
        </li>
    </ul> 
</nav>