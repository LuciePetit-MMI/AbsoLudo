<?php
    require_once('../classe/class.Interagissant.php');
    require_once('../classe/class.Game.php');
    // Création objet PDO
    include('../pdo.php');

    //Ordre SQL
    $sql = "SELECT * FROM interagit, jeu_de_societe, profil
            WHERE jeu_de_societe.id_jeu_JEU_DE_SOCIETE = interagit.id_jeu_JEU_DE_SOCIETE
            AND interagit.id_profil_PROFIL = profil.id_profil_PROFIL";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des interactions
    $listeInteractions = array();

    //Execution requete
    if ($requete->execute()) {
        while ($donnees = $requete->fetch()) {
            $interagit = new Interagissant(
                $donnees['id_profil_PROFIL'],
                $donnees['pseudo_PROFIL'],
                $donnees['nom_PROFIL'],
                $donnees['prenom_PROFIL'],
                $donnees['age_PROFIL'],
                $donnees['avatar_PROFIL'],
                $donnees['jeu_prefere_PROFIL'],
                $donnees['centre_interet_PROFIL'],
                $donnees['nom_entreprise_PROFIL'],
                $donnees['adresse_PROFIL'],
                $donnees['type_PROFIL'],
                $donnees['id_utilisateur_COMPTE_UTILISATEUR'],
                $donnees['date_INTERAGIT'],
                $donnees['possede_INTERAGIT'],
                $donnees['connait_INTERAGIT'],
                $donnees['souhaite_INTERAGIT'],
                $donnees['id_jeu_JEU_DE_SOCIETE']
            );

            $jeu = new Game(
                $donnees['id_jeu_JEU_DE_SOCIETE'],
                $donnees['nom_JEU_DE_SOCIETE'],
                $donnees['photo_JEU_DE_SOCIETE'],
                $donnees['age_joueur_JEU_DE_SOCIETE'],
                $donnees['temps_jeu_JEU_DE_SOCIETE'],
                $donnees['categorie_JEU_DE_SOCIETE'],
                $donnees['theme_JEU_DE_SOCIETE'],
                $donnees['nombre_joueur_JEU_DE_SOCIETE'],
                $donnees['type_JEU_DE_SOCIETE'],
                $donnees['editeur_JEU_DE_SOCIETE'],
                $donnees['lien_fnac_JEU_DE_SOCIETE'],
                $donnees['lien_cultura_JEU_DE_SOCIETE'],
                $donnees['id_profil_PROFIL']
            );

            //ajout des jeux au profil
            $interagit->setSesJeux($jeu);


            //Ajouter intergit à listeIntreractions
            $listeInteractions[] = $interagit;
        }

    }

    echo(json_encode($listeInteractions));
    exit();
    //echo '<pre>';
    //print_r($listeInteractions);
    //echo '</pre>';
