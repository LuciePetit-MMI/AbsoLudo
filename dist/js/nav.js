/* Menu hamburger */
  /*Déclaration des variables*/
  var toggle = document.querySelector(".nav_ham");
  var toggle_elem = document.querySelectorAll(".nav_ham_item");
  var menu = document.querySelector(".nav_menu");
  
  /* Quand on click sur le toggle */
  toggle.addEventListener("click", function() {
    /*Affiche ou cache le menu*/
    menu.classList.toggle("open");
    /*Anime le hamburger*/
    for (var i = 0; i < toggle_elem.length; i++) {
      toggle_elem[i].classList.toggle("open")
    }
  });
  
  
  /* Afficher le lien de la page active en .current */
    /*Déclaration des variables*/
  var id_page = document.querySelector('body').id;
  var li_class = document.querySelectorAll(".nav_menu_link");
  var a = document.querySelectorAll(".link");
  
  for (var i = 0; i < li_class.length; i++) {
    /*Verifie si la page correspond au lien du menu*/
    if(li_class[i].matches(".nav_menu_link." + id_page)) {
      /* Ajoute .current au a correspondant*/
      a[i].classList.add("current");
    }
  }
  

  /* Changer de profil */ 
    /*Déclaration des variables*/
    var toggle = document.querySelector(".nav_profil_change");
    var profils = document.querySelector(".nav_profil_change_items");
    
    /* Quand on click sur le toggle */
    toggle.addEventListener("click", function() {
      /*Affiche ou cache le menu*/
      profils.classList.toggle("open");
    });