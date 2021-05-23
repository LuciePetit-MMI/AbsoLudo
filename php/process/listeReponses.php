<?php
    require_once('./php/classe/class.Repondant.php');
    require_once('./php/classe/class.Topic.php');
    // Création objet PDO
    include('./php/pdo.php');

    //Ordre SQL
    $sql = "SELECT * FROM repond
            LEFT JOIN profil
            ON repond.id_profil_PROFIL = profil.id_profil_PROFIL";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des reponses
    $Reponses = array();
    $listeReponses = array();

    //Execution requete
    if($requete->execute()){
        while($donnees = $requete->fetch()) {
            $reponse = new Repondant(
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
                $donnees['id_topic_TOPIC'],
                $donnees['commentaire_REPOND'],
                $donnees['date_REPOND'],
                $donnees['id_topic_TOPIC']
            );

            //Ajouter reponse à listeReponse
            $Reponses[] = $reponse;
        }

//Création de la liste des topics
        $i=0;
        while($i<count($Reponses)){
            //reinitialisation de la liste
            $listeTopics = array();

            //ordre liste jeux créés
            $sqlTopics = "SELECT * FROM topic_forum
                        WHERE id_topic_TOPIC = ".(string)$Reponses[$i]->idTopic;

            //prepare la requete
            $requeteTopics = $pdo->prepare($sqlTopics);

            //execute la requete
            if($requeteTopics->execute()) {

                WHILE($donneesTopics = $requeteTopics->fetch()){
                    $topic = new Topic(
                        $donneesTopics['id_topic_TOPIC'],
                        $donneesTopics['titre_TOPIC_FORUM'],
                        $donneesTopics['dateheure_TOPIC_FORUM'],
                        $donneesTopics['message_TOPIC_FORUM']
                    );

                    //liste des jeux créés
                    $listeTopics[] = $topic;
                }
            }

            //ajout des jeux au profil
            $Reponses[$i]->setLesTopics($listeTopics);
            //mise à jour de la liste des commentaire
            $listeReponses[] = $Reponses;
            $i++;
        }

    }

    echo '<pre>';
    print_r($listeReponses);
    echo '</pre>';
