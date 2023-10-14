const menuItems = document.querySelectorAll('.sous a'); //Sélectionne tous les éléments du sous-menu
        const burgerMenu = document.querySelector('.deroulant a'); //Sélectionne l'élément du menu burger
        const titre = document.querySelector('.titre'); //Sélectionne le conteneur du titre
        //Gère le clic sur un élément de menu
        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                //Application du texte de l'élément de menu cliqué
                const menuText = item.textContent;
                //Met à jour le titre avec le texte du menu
                titre.textContent = menuText;
            });
        });
        //Gère le clic sur le menu burger
        burgerMenu.addEventListener('click', () => {
        //Efface le titre
        titre.textContent = '';
        });