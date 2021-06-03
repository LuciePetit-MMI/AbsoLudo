<?php
    require_once '../classe/class.Commentant.php';
    require_once '../classe/class.Game.php';
    // Création objet PDO
    include('../pdo.php');

    //Ordre SQL
    $sql = "SELECT * FROM commente, jeu_de_societe, profil
            WHERE jeu_de_societe.id_jeu_JEU_DE_SOCIETE = commente.id_jeu_JEU_DE_SOCIETE
            AND commente.id_profil_PROFIL = profil.id_profil_PROFIL";


    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des reponses 
    //$Commentaires = array();
    $listeCommentaires = array();

    //Execution requete
    if($requete->execute()){
        while($donnees = $requete->fetch()) {
            
            $commentaire = new Commentant(
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
                $donnees['id_jeu_JEU_DE_SOCIETE'],
                $donnees['date_COMMENTE'],
                $donnees['message_COMMENTE'],
                $donnees['note']
            );

//Création de la liste des jeux commentés
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

            $commentaire->setSesJeux($jeu);

            //Ajouter commentaire à listeCommentaires
            $listeCommentaires[] = $commentaire;
        }
    }   

    echo(json_encode($listeCommentaires));
    exit();

    echo '<pre>';
    print_r($listeCommentaires);
    echo '</pre>';
