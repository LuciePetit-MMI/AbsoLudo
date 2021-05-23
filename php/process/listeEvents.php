<?php
    require_once './php/classe/class.Event.php';
    require_once './php/classe/class.Participant.php';
    // Création objet PDO
    include('./php/pdo.php');


    //Ordre SQL
    $sql = "SELECT * FROM evenement";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des evenements
    $Events = array();
    $listeEvents = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $evenement = new Event(
                $donnees['id_evenement_EVENEMENT'],
                $donnees['nom_EVENEMENT'],
                $donnees['debut'],
                $donnees['fin'],
                $donnees['type_activite_EVENEMENT'],
                $donnees['adresse_EVENEMENT'],
                $donnees['prix_entree_EVENEMENT'],
                $donnees['description_EVENEMENT'],
                $donnees['nombre_participants_EVENEMENT'],
                $donnees['id_profil_PROFIL']
            );

            //Ajouter evenement à listeEvents
            $Events[] = $evenement;
        }

//Création de la liste des participants
        $i=0;
        while($i<count($Events)){
            //reinitialisation de la liste
            $listeParticipants = array();

            //ordre liste jeux créés
            $sqlParticipants = "SELECT * FROM participe
                                LEFT JOIN profil
                                ON profil.id_profil_PROFIL = participe.id_profil_PROFIL 
                                AND participe.id_evenement_EVENEMENT = ".(string)$Events[$i]->id;

            //prepare la requete
            $requeteParticipants = $pdo->prepare($sqlParticipants);

            //execute la requete
            if($requeteParticipants->execute()) {

                WHILE($donneesParticipants = $requeteParticipants->fetch()){
                    $participant = new Participant(
                        $donneesParticipants['id_profil_PROFIL'],
                        $donneesParticipants['pseudo_PROFIL'],
                        $donneesParticipants['nom_PROFIL'],
                        $donneesParticipants['prenom_PROFIL'],
                        $donneesParticipants['age_PROFIL'],
                        $donneesParticipants['avatar_PROFIL'],
                        $donneesParticipants['jeu_prefere_PROFIL'],
                        $donneesParticipants['centre_interet_PROFIL'],
                        $donneesParticipants['nom_entreprise_PROFIL'],
                        $donneesParticipants['adresse_PROFIL'],
                        $donneesParticipants['type_PROFIL'],
                        $donneesParticipants['id_utilisateur_COMPTE_UTILISATEUR'],
                        $donneesParticipants['dateheure'],
                        $donneesParticipants['participe']
                    );

                    //liste des particiapnts
                    $listeParticipants[] = $participant;
                }
            }

            //ajout des participants à l'event
            $Events[$i]->setLesParticipants($listeParticipants);
            $i++;
        }

//Création de la liste des profils createurs
        $i=0;
        while($i<count($Events)){
            //reinitialisation de la liste
            $listeProfils = array();

            //ordre liste jeux créés
            $sqlProfils = "SELECT * FROM profil
                        WHERE id_profil_PROFIL = ".(string)$Events[$i]->idProfil;

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

            //ajout des profils à l'event
            $Events[$i]->setLesProfessionnels($listeProfils);
            //mise à jour de la liste de envents
            $listeEvents[] = $Events[$i];
            $i++;
        }
}

    //echo '<pre>';
    //print_r($listeEvents);
    //echo '</pre>';