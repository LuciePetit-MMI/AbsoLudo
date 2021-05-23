<?php 
    require_once './php/classe/class.Game.php';
    require_once './php/classe/class.Commentant.php';
    require_once './php/classe/class.Interagissant.php';
    // Création objet PDO
    include('./php/pdo.php');


//Ordre SQL
    $sql = "SELECT * FROM jeu_de_societe";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des jeux
    $Jeux = array();
    $listeJeux = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
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

            //Ajouter jeu à listeJeux
            $Jeux[] = $jeu;
        }

//Création de la liste des commentaires
        $i=0;
        while($i<count($Jeux)){
            //reinitialisation de la liste
            $listeCommentaires = array();

            //ordre liste commentaires
            $sqlCommentaires = "SELECT * FROM commente
                                LEFT JOIN profil
                                ON profil.id_profil_PROFIL = commente.id_profil_PROFIL
                                WHERE commente.id_jeu_JEU_DE_SOCIETE = ".(string)$Jeux[$i]->id;

            //prepare la requete
            $requeteCommentaires = $pdo->prepare($sqlCommentaires);

            //execute la requete
            if($requeteCommentaires->execute()) {

                WHILE($donneesCommentaires = $requeteCommentaires->fetch()){
                    $commentaire = new Commentant(
                        $donneesCommentaires['id_profil_PROFIL'],
                        $donneesCommentaires['pseudo_PROFIL'],
                        $donneesCommentaires['nom_PROFIL'],
                        $donneesCommentaires['prenom_PROFIL'],
                        $donneesCommentaires['age_PROFIL'],
                        $donneesCommentaires['avatar_PROFIL'],
                        $donneesCommentaires['jeu_prefere_PROFIL'],
                        $donneesCommentaires['centre_interet_PROFIL'],
                        $donneesCommentaires['nom_entreprise_PROFIL'],
                        $donneesCommentaires['adresse_PROFIL'],
                        $donneesCommentaires['type_PROFIL'],
                        $donneesCommentaires['id_utilisateur_COMPTE_UTILISATEUR'],
                        $donneesCommentaires['id_jeu_JEU_DE_SOCIETE'],
                        $donneesCommentaires['date_COMMENTE'],
                        $donneesCommentaires['message_COMMENTE'],
                        $donneesCommentaires['note']
                    );

                    //liste des profils
                    $listeCommentaires[] = $commentaire;
                }
            }

            //ajout des profils au jeu
            $Jeux[$i]->setLesCommentaires($listeCommentaires);
            $i++;
        }

//Création de la liste des interactions
        $i=0;
        while($i<count($Jeux)){
            //reinitialisation de la liste
            $listeInteractions = array();

            //ordre liste commentaires
            $sqlInteractions = "SELECT * FROM interagit
                                LEFT JOIN profil
                                ON profil.id_profil_PROFIL = interagit.id_profil_PROFIL
                                WHERE interagit.id_jeu_JEU_DE_SOCIETE = ".(string)$Jeux[$i]->id;

            //prepare la requete
            $requeteInteractions = $pdo->prepare($sqlInteractions);

            //execute la requete
            if($requeteInteractions->execute()) {

                WHILE($donneesInteractions = $requeteInteractions->fetch()){
                    $interaction = new Interagissant(
                        $donneesInteractions['id_profil_PROFIL'],
                        $donneesInteractions['pseudo_PROFIL'],
                        $donneesInteractions['nom_PROFIL'],
                        $donneesInteractions['prenom_PROFIL'],
                        $donneesInteractions['age_PROFIL'],
                        $donneesInteractions['avatar_PROFIL'],
                        $donneesInteractions['jeu_prefere_PROFIL'],
                        $donneesInteractions['centre_interet_PROFIL'],
                        $donneesInteractions['nom_entreprise_PROFIL'],
                        $donneesInteractions['adresse_PROFIL'],
                        $donneesInteractions['type_PROFIL'],
                        $donneesInteractions['id_utilisateur_COMPTE_UTILISATEUR'],
                        $donneesInteractions['date_INTERAGIT'],
                        $donneesInteractions['possede_INTERAGIT'],
                        $donneesInteractions['connait_INTERAGIT'],
                        $donneesInteractions['souhaite_INTERAGIT'],
                        $donneesInteractions['id_jeu_JEU_DE_SOCIETE']
                    );

                    //liste des profils
                    $listeInteractions[] = $interaction;
                }
            }

            //ajout des profils au jeu
            $Jeux[$i]->setLesInteractions($listeInteractions);
            $i++;
        }


//Création de la liste des profils créateurs
        $i=0;
        while($i<count($Jeux)){
            //reinitialisation de la liste
            $listeProfils = array();

            //ordre liste profils créateur
            $sqlProfils = "SELECT * FROM profil
                           WHERE id_profil_PROFIL = ".(string)$Jeux[$i]->idProfil;

            //prepare la requete
            $requeteProfils = $pdo->prepare($sqlProfils);

            //execute la requete
            if($requeteProfils->execute()) {

                WHILE($donneesProfils = $requeteProfils->fetch()){
                    $profil = new Profil(
                        $donneesProfils['id_profil_PROFIL'],
                        $donneesProfils['pseudo_PROFIL'],
                        $donneesProfils['nom_PROFIL'],
                        $donneesProfils['prenom_PROFIL'],
                        $donneesProfils['age_PROFIL'],
                        $donneesProfils['avatar_PROFIL'],
                        $donneesProfils['jeu_prefere_PROFIL'],
                        $donneesProfils['centre_interet_PROFIL'],
                        $donneesProfils['nom_entreprise_PROFIL'],
                        $donneesProfils['adresse_PROFIL'],
                        $donneesProfils['type_PROFIL'],
                        $donneesProfils['id_utilisateur_COMPTE_UTILISATEUR']
                    );

                    //liste des profils
                    $listeProfils[] = $profil;
                }
            }

            //ajout des profils au jeu
            $Jeux[$i]->setLesProfils($listeProfils);
            //mise à jour de la liste des jeux
            $listeJeux[] = $Jeux[$i];
            $i++;
        }

    }

    //echo '<pre>';
    //print_r($listeJeux);
    //echo '</pre>';