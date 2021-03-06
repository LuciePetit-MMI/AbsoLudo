<?php
    require_once '../classe/class.Category.php';
    // Création objet PDO
    include('../pdo.php');


    //Ordre SQL
    $sql = "SELECT * FROM categorie_forum";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des categories
    $Categories = array();
    $listeCategories = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $categorie = new Category(
                $donnees['id_categorie_CATEGORIE'],
                $donnees['nom_CATEGORIE_FORUM'],
                $donnees['description_CATEGORIE_FORUM']
            );

            //Ajouter categorie à listeCategories
            $Categories[] = $categorie;
        }

//Ajout des topics
        $i=0;
        while($i<count($Categories)){
            //reinitialisation de la liste
            $listeTopics = array();

            //ordre liste topics
            $sqlTopics = "SELECT * FROM topic_forum
                        WHERE id_categorie_CATEGORIE = ".(string)$Categories[$i]->id;

            //prepare la requete
            $requeteTopics = $pdo->prepare($sqlTopics);

            //execute la requete
            if($requeteTopics->execute()) {

                WHILE($donneesTopics = $requeteTopics->fetch()){
                    $topics = new Topic(
                        $donnees['id_topic_TOPIC'],
                        $donnees['titre_TOPIC_FORUM'],
                        $donnees['dateheure_TOPIC_FORUM'],
                        $donnees['message_TOPIC_FORUM'],
                        $donnees['id_categorie_CATEGORIE'],
                        $donnees['id_profil_PROFIL']
                    );

                    //liste des topics
                    $listeTopics[] = $topic;
                }
            }

            //ajout des topics a categorie
            $Categories[$i]->setLesTopics($listeTopics);
            //mise à jour de la liste des categories
            $listeCategories[] = $Categories[$i];
            $i++;
        }

    }

    echo(json_encode($listeCatégories));
