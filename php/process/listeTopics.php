<?php
    require_once '../classe/class.Topic.php';
    require_once '../classe/class.Category.php';
    require_once '../classe/class.Repondant.php';
    require_once '../classe/class.Profil.php';
    // Création objet PDO
    include('../pdo.php');


    //Ordre SQL
    $sql = "SELECT * FROM topic_forum";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des topics
    $Topics = array();
    $listeTopics = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $topic = new Topic(
                $donnees['id_topic_TOPIC'],
                $donnees['titre_TOPIC_FORUM'],
                $donnees['dateheure_TOPIC_FORUM'],
                $donnees['message_TOPIC_FORUM'],
                $donnees['id_categorie_CATEGORIE'],
                $donnees['id_profil_PROFIL']
            );

            //Ajouter topic à listeTopics
            $Topics[] = $topic;
        }

//Création de la liste des catégories
        $i=0;
        while($i<count($Topics)){
            //reinitialisation de la liste
            $listeCategorie = array();

            //ordre liste categorie
            $sqlCategorie = "SELECT * FROM categorie_forum
                             WHERE id_categorie_CATEGORIE = ".(string)$Topics[$i]->idCat;

            //prepare la requete
            $requeteCategorie = $pdo->prepare($sqlCategorie);

            //execute la requete
            if($requeteCategorie->execute()) {

                WHILE($donneesCategorie = $requeteCategorie->fetch()){
                    $categorie = new Category(
                        $donneesCategorie['id_categorie_CATEGORIE'],
                        $donneesCategorie['nom_CATEGORIE_FORUM'],
                        $donneesCategorie['description_CATEGORIE_FORUM']
                    );

                    //liste des categorie
                    $listeCategorie[] = $categorie;
                }
            }

            //ajout des categorie au topic
            $Topics[$i]->setLaCategorie($listeCategorie);
            $i++;
        }


//Création de la liste des profils
    $i=0;
    while($i<count($Topics)){
        //reinitialisation de la liste
        $listeProfil = array();

        //ordre liste Profil
        $sqlProfil = "SELECT * FROM profil
                      WHERE id_profil_PROFIL = ".(string)$Topics[$i]->idProfil;

        //prepare la requete
        $requeteProfil = $pdo->prepare($sqlProfil);

        //execute la requete
        if($requeteProfil->execute()) {

            WHILE($donneesProfil = $requeteProfil->fetch()){
                $profil = new Profil(
                    $donneesProfil['id_profil_PROFIL'],
                    $donneesProfil['pseudo_PROFIL'],
                    $donneesProfil['nom_PROFIL'],
                    $donneesProfil['prenom_PROFIL'],
                    $donneesProfil['age_PROFIL'],
                    $donneesProfil['avatar_PROFIL'],
                    $donneesProfil['jeu_prefere_PROFIL'],
                    $donneesProfil['centre_interet_PROFIL'],
                    $donneesProfil['nom_entreprise_PROFIL'],
                    $donneesProfil['adresse_PROFIL'],
                    $donneesProfil['type_PROFIL'],
                    $donneesProfil['id_utilisateur_COMPTE_UTILISATEUR']
                );

                //liste des categorie
                $listeProfil[] = $profil;
            }
        }

        //ajout des Profil au topic
        $Topics[$i]->setLeProfilCree($listeProfil);
        $i++;
    }

//Création de la liste des repondants
        $i=0;
        while($i<count($Topics)){
            //reinitialisation de la liste
            $listeRepondants = array();

            //ordre liste repondants
            $sqlRepondants = "SELECT * FROM repond
                              LEFT JOIN profil
                              ON repond.id_profil_PROFIL = profil.id_profil_PROFIL
                              WHERE id_topic_TOPIC = ".(string)$Topics[$i]->id;

            //prepare la requete
            $requeteRepondants = $pdo->prepare($sqlRepondants);

            //execute la requete
            if($requeteRepondants->execute()) {

                WHILE($donneesRepondants = $requeteRepondants->fetch()){
                    $repondant = new Repondant(
                        $donneesRepondants['id_profil_PROFIL'],
                        $donneesRepondants['pseudo_PROFIL'],
                        $donneesRepondants['nom_PROFIL'],
                        $donneesRepondants['prenom_PROFIL'],
                        $donneesRepondants['age_PROFIL'],
                        $donneesRepondants['avatar_PROFIL'],
                        $donneesRepondants['jeu_prefere_PROFIL'],
                        $donneesRepondants['centre_interet_PROFIL'],
                        $donneesRepondants['nom_entreprise_PROFIL'],
                        $donneesRepondants['adresse_PROFIL'],
                        $donneesRepondants['type_PROFIL'],
                        $donneesRepondants['id_utilisateur_COMPTE_UTILISATEUR'],
                        $donneesRepondants['id_topic_TOPIC'],
                        $donneesRepondants['commentaire_REPOND'],
                        $donneesRepondants['date_REPOND'],
                        $donneesRepondants['id_topic_TOPIC']
                    );

                    //liste des repondants
                    $listeRepondants[] = $repondant;
                }
            }

            //ajout des repondants au topic
            $Topics[$i]->setLesProfilsRepondent($listeRepondants);
            //mise à jour de la liste de topics
            $listeTopics[] = $Topics[$i];
            $i++;
        }
    }

    echo(json_encode($listeTopics));

    //echo '<pre>';
    //print_r($listeTopics);
    //echo '</pre>';