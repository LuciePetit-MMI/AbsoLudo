<?php
    require_once './php/classe/class.Obtenu.php';
    // Création objet PDO
    include('./php/pdo.php');


    //Ordre SQL
    $sql = "SELECT * FROM obtient
            LEFT JOIN badge
            ON badge.id_badge_BADGE = obtient.id_badge_BADGE";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des badges
    $listeBadgesObtenus = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $badge = new Obtenu(
                $donnees['id_badge_BADGE'],
                $donnees['nom_BADGE'],
                $donnees['condition_obtention_BADGE'],
                $donnees['obtenu']
            );
        
            //Ajouter badge à listeBadges
            $listeBadgesObtenus[] = $badge;
        }
    }

    //echo '<pre>';
    //print_r($listeBadgesObtenus);
    //echo '</pre>';