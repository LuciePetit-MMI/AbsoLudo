<?php
    require_once('./php/classe/class.Participant.php');
    require_once('./php/classe/class.Event.php');
    // Création objet PDO
    include('./php/pdo.php');

    //Ordre SQL
    $sql = "SELECT * FROM participe
            LEFT JOIN profil
            ON participe.id_profil_PROFIL = profil.id_profil_PROFIL";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des participants
    $Participants = array();
    $listeParticipants = array();

    //Execution requete
    if ($requete->execute()) {
        while ($donnees = $requete->fetch()) {
            $participant = new Participant(
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
                $donnees['dateheure'],
                $donnees['participe'],
                $donnees['id_evenement_EVENEMENT']
            );

            //Ajouter participe à listeParticipants
            $Participants[] = $participant;
        }

//Création de la liste des événements
        $i=0;
        while($i<count($Participants)){
            //reinitialisation de la liste
            $listeEvents = array();

            //ordre liste evenement créé
            $sqlEvents = "SELECT * FROM evenement
                          WHERE id_evenement_EVENEMENT = ".(string)$Participants[$i]->idEvent;

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

                    //liste des evenements
                    $listeEvents[] = $event;
                }
            }

            //ajout des evenements au participant
            $Participants[$i]->setSesEvenements($listeEvents);
            //mise à jour de la liste de participants
            $listeParticipants[] = $Participants[$i];
            $i++;
        }
    }

    //echo '<pre>';
    //print_r($listeParticipants);
    //echo '</pre>';
