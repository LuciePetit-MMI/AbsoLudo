<?php
    require_once ('./php/classe/class.Commentant.php')  ;
    // Création objet PDO
    include('./php/pdo.php');

    //Ordre SQL
    $sql = "SELECT * FROM commente
            LEFT JOIN profil
            ON commente.id_profil_PROFIL = profil.id_profil_PROFIL";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des reponses
    $Commentaires = array();
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

            //Ajouter commentaire à listeCommentaires
            $Commentaires[] = $commentaire;
        }


//Création de la liste des jeux commentés
        $i=0;
        while($i<count($Commentaires)){
            //reinitialisation de la liste
            $listeJeux = array();

            //ordre liste jeux créés
            $sqlJeux = "SELECT * FROM jeu_de_societe
                        WHERE id_jeu_JEU_DE_SOCIETE = ".(string)$Commentaires[$i]->idJeux;

            //prepare la requete
            $requeteJeux = $pdo->prepare($sqlJeux);

            //execute la requete
            if($requeteJeux->execute()) {

                WHILE($donneesJeux = $requeteJeux->fetch()){
                    $jeu = new Game(
                        $donneesJeux['id_jeu_JEU_DE_SOCIETE'],
                        $donneesJeux['nom_JEU_DE_SOCIETE'],
                        $donneesJeux['photo_JEU_DE_SOCIETE'],
                        $donneesJeux['age_joueur_JEU_DE_SOCIETE'],
                        $donneesJeux['temps_jeu_JEU_DE_SOCIETE'],
                        $donneesJeux['categorie_JEU_DE_SOCIETE'],
                        $donneesJeux['theme_JEU_DE_SOCIETE'],
                        $donneesJeux['nombre_joueur_JEU_DE_SOCIETE'],
                        $donneesJeux['type_JEU_DE_SOCIETE'],
                        $donneesJeux['editeur_JEU_DE_SOCIETE'],
                        $donneesJeux['lien_fnac_JEU_DE_SOCIETE'],
                        $donneesJeux['lien_cultura_JEU_DE_SOCIETE'],
                        $donneesJeux['id_profil_PROFIL']
                    );

                    //liste des jeux créés
                    $listeJeux[] = $jeu;
                }
            }

            //ajout des jeux au profil
            $Commentaires[$i]->setSesJeux($listeJeux);
            //mise à jour de la liste des commentaire
            $listeCommentaires[] = $Commentaires;
            $i++;
        }
    }
//echo '<pre>';
//print_r($listeCommentaires);
//echo '</pre>';
