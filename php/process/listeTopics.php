<?php
    require_once './php/classe/class.Topic.php';
    require_once './php/classe/class.Category.php';
    require_once './php/classe/class.Repondant.php';
    require_once './php/classe/class.Profil.php';
    // Création objet PDO
    include('./php/pdo.php');


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
                             WHERE id_categorie_CATEGORIE = ".(string)$Topics[$i]->id;

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

//Création de la liste des profils créés
        $i=0;
        while($i<count($Topics)){
            //reinitialisation de la liste
            $listeProfils = array();

            //ordre liste categorie
            $sqlProfils = "SELECT * FROM profil
                           WHERE id_profil_PROFIL = ".(string)$Topics[$i]->idProfil;

            //prepare la requete
            $requeteProfils = $pdo->prepare($sqlProfils);

            //execute la requete
            if($requeteProfils->execute()) {

                WHILE($donneesProfils = $requeteProfils->fetch()){
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

                    //liste des categorie
                    $listeProfils[] = $profil;
                }
            }

            //ajout des categorie au topic
            $Topics[$i]->setLeProfilCree($listeProfils);
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

    echo '<pre>';
    print_r($listeTopics);
    echo '</pre>';