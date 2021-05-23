<?php
    require_once './php/classe/class.Badge.php';
    // Création objet PDO
    include('./php/pdo.php');


    //Ordre SQL
    $sql = "SELECT * FROM badge";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des badges
    $listeBadges = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $badge = new Badge(
                $donnees['id_badge_BADGE'],
                $donnees['nom_BADGE'],
                $donnees['condition_obtention_BADGE']
            );

            //Ajouter badge à listeBadges
            $listeBadges[] = $badge;
        }
    }

    //echo '<pre>';
    //print_r($listeBadges);
    //echo '</pre>';