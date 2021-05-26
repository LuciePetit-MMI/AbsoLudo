<?php
    require_once('../classe/class.Interagissant.php');
    // Création objet PDO
    include('../pdo.php');

    //Ordre SQL
    $sql = "SELECT * FROM interagit
            LEFT JOIN profil
            ON interagit.id_profil_PROFIL = profil.id_profil_PROFIL";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des interactions
    $Interactions = array();
    $listeInteractions = array();

    //Execution requete
    if ($requete->execute()) {
        while ($donnees = $requete->fetch()) {
            $interagit = new Interagissant(
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
                $donnees['date_INTERAGIT'],
                $donnees['possede_INTERAGIT'],
                $donnees['connait_INTERAGIT'],
                $donnees['souhaite_INTERAGIT'],
                $donnees['id_jeu_JEU_DE_SOCIETE']
            );

            //Ajouter intergit à listeIntreractions
            $Interactions[] = $interagit;
        }

//Création de la liste des jeux intégargit
        $i=0;
        while($i<count($Interactions)){
            //reinitialisation de la liste
            $listeJeux = array();

            //ordre liste jeux créés
            $sqlJeux = "SELECT * FROM jeu_de_societe
                        WHERE id_jeu_JEU_DE_SOCIETE = ".(string)$Interactions[$i]->idJeux;

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
            $Interactions[$i]->setSesJeux($listeJeux);
            //mise à jour de la liste des commentaire
            $listeInteractions[] = $Interactions;
            $i++;
        }
    }

    echo(json_encode($listeInteractions));

    //echo '<pre>';
    //print_r($listeInteractions);
    //echo '</pre>';
