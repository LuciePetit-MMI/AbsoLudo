<?php
    require_once '../classe/class.Profil.php';
    require_once '../classe/class.Compte.php';
    require_once '../classe/class.Obtenu.php';
    require_once '../classe/class.Event.php';
    require_once '../classe/class.Topic.php';
    require_once '../classe/class.Game.php';

// Création objet PDO
    include('../pdo.php');

//Création du profil
    //Ordre SQL
    $sql = "SELECT * FROM profil";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des profils
    $Profils = array();
    $listeProfils = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $profil = new Profil(
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
                $donnees['id_utilisateur_COMPTE_UTILISATEUR']
            );

            //Ajouter profil à listeProfils
            $Profils[] = $profil;
        }

//Ajout du compte utilisateur
        $i=0;
        while($i<count($Profils)){
            //reinitialisation de la liste
            $listeComptes = array();

            //ordre liste compte utilisateur
            $sqlCompte = "SELECT * FROM compte_utilisateur
                          WHERE id_utilisateur_COMPTE_UTILISATEUR = ".(string)$Profils[$i]->idCompte;

            //prepare la requete
            $requeteCompte = $pdo->prepare($sqlCompte);

            //execute la requete
            if($requeteCompte->execute()) {

                WHILE($donneesCompte = $requeteCompte->fetch()){
                    $compte = new Compte(
                        $donneesCompte['id_utilisateur_COMPTE_UTILISATEUR'],
                        $donneesCompte['email_COMPTE_UTILISATEUR'],
                        $donneesCompte['nom_COMPTE_UTILISATEUR'],
                        $donneesCompte['prenom_COMPTE_UTILISATEUR'],
                        $donneesCompte[''],
                        $donneesCompte['nsiret_COMPTE_UTILISATEUR'],
                        $donneesCompte['role_COMPTE_UTILISATEUR']
                    );

                    //liste des comtpes
                    $listeComptes[] = $compte;
                }
            }

            //ajout des compte au profil
            $Profils[$i]->setSonCompte($listeComptes);
            $i++;
        }

//Création de la liste des badges obtenus
        $i=0;
        while($i<count($Profils)){
            //reinitialisation de la liste
            $listeBadges = array();

            //ordre liste badges obtenus
            $sqlBadge = "SELECT * FROM obtient, badge
                         WHERE obtient.id_badge_BADGE = badge.id_badge_BADGE AND id_profil_PROFIL = ".(string)$Profils[$i]->id;

            //prepare la requete
            $requeteBadge = $pdo->prepare($sqlBadge);

            //execute la requete
            if($requeteBadge->execute()) {

                WHILE($donneesBadge = $requeteBadge->fetch()){
                    $badge = new Obtenu(
                        $donneesBadge['id_badge_BADGE'],
                        $donneesBadge['nom_BADGE'],
                        $donneesBadge['condition_obtention_BADGE'],
                        $donneesBadge['obtenu']
                    );

                    //liste des badges obtenus
                    $listeBadges[] = $badge;
                }
            }

            //ajout des badges au profil
            $Profils[$i]->setSesBadges($listeBadges);
            $i++;
        }

//Création de la liste des événements proposés
        $i=0;
        while($i<count($Profils)){
            //reinitialisation de la liste
            $listeEvents = array();

            //ordre liste evenement créé
            $sqlEvents = "SELECT * FROM evenement
                          WHERE id_profil_PROFIL = ".(string)$Profils[$i]->id;

            //prepare la requete
            $requeteEvents = $pdo->prepare($sqlEvents);

            //execute la requete
            if($requeteEvents->execute()) {

                WHILE($donneesEvent = $requeteEvents->fetch()){
                    $event = new Event(
                        $donneesEvent['id_evenement_EVENEMENT'],
                        $donneesEvent['nom_EVENEMENT'],
                        $donneesEvent['debut'],
                        $donneesEvent['fin'],
                        $donneesEvent['type_activite_EVENEMENT'],
                        $donneesEvent['adresse_EVENEMENT'],
                        $donneesEvent['prix_entree_EVENEMENT'],
                        $donneesEvent['description_EVENEMENT'],
                        $donneesEvent['nombre_participants_EVENEMENT'],
                        $donneesEvent['id_profil_PROFIL']
                    );

                    //liste des evenements proposé
                    $listeEvents[] = $event;
                }
            }

            //ajout des evenements au profil
            $Profils[$i]->setEvenementPropose($listeEvents);
            $i++;
        }

//Création de la liste des topics crées
        $i=0;
        while($i<count($Profils)){
            //reinitialisation de la liste
            $listeTopics = array();

            //ordre liste topics créés
            $sqlTopics = "SELECT * FROM topic_forum
                          WHERE id_profil_PROFIL = ".(string)$Profils[$i]->id;

            //prepare la requete
            $requeteTopics = $pdo->prepare($sqlTopics);

            //execute la requete
            if($requeteTopics->execute()) {

                WHILE($donneesTopics = $requeteTopics->fetch()){
                    $topic = new Topic(
                        $donnees['id_topic_TOPIC'],
                        $donnees['titre_TOPIC_FORUM'],
                        $donnees['dateheure_TOPIC_FORUM'],
                        $donnees['message_TOPIC_FORUM'],
                        $donnees['id_categorie_CATEGORIE'],
                        $donnees['id_profil_PROFIL']
                    );

                    //liste des topics créés
                    $listeTopics[] = $topic;
                }
            }

            //ajout des topics au profil
            $Profils[$i]->setSesTopics($listeTopics);
            $i++;
        }

//Création de la liste des jeux crées
        $i=0;
        while($i<count($Profils)){
            //reinitialisation de la liste
            $listeJeux = array();

            //ordre liste jeux créés
            $sqlJeux = "SELECT * FROM jeu_de_societe
                        WHERE id_profil_PROFIL = ".(string)$Profils[$i]->id;

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
            $Profils[$i]->setSesJeuxCrees($listeJeux);
            //mise à jour de la liste de profils
            $listeProfils[] = $Profils[$i];
            $i++;
        }
    }

    echo(json_encode($listeProfils));

    //echo '<pre>';
    //print_r($listeProfils);
    //echo '</pre>';