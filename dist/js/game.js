  /* Aggrandir un jeu */ 
    /*Déclaration des variables*/
    var toggles = document.querySelectorAll(".game_elements");
    var crosses = document.querySelectorAll(".game_cross");
    
        

    for(let i=0; i<toggles.length; i++){
        let toggle = toggles[i];
            /* Quand on click sur le toggle */
        toggle.addEventListener("click", function() {
            /*Affiche les détails du jeu*/
        var details = toggle.nextElementSibling;
            details.classList.add("show");

            /*Cache les détails du jeu*/
            for(let i=0; i<crosses.length; i++){
                let cross = crosses[i];
                    cross.addEventListener("click", function() {
                    details.classList.remove("show");
                });
            }
        });
     }
    