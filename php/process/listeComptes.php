<?php
    require_once './php/classe/class.Compte.php';
    // Création objet PDO
    include('./php/pdo.php');


    //Ordre SQL
    $sql = "SELECT * FROM compte_utilisateur";

    //Preparation de la requete
    $requete = $pdo->prepare($sql);

    //Tableau des comptes
    $Comptes = array();
    $listeComptes = array();

    //Execution requete
    if($requete->execute()){

        while($donnees = $requete->fetch()) {
            $compte = new Compte(
                $donnees['id_utilisateur_COMPTE_UTILISATEUR'],
                $donnees['email_COMPTE_UTILISATEUR'],
                $donnees['nom_COMPTE_UTILISATEUR'],
                $donnees['prenom_COMPTE_UTILISATEUR'],
                $donnees[""],
                $donnees['nsiret_COMPTE_UTILISATEUR'],
                $donnees['role_COMPTE_UTILISATEUR']
            );

            //Ajouter compte à Comptes
            $Comptes[] = $compte;
        }

//Création de la liste des profils
        $i=0;
        while($i<count($Comptes)){
            //reinitialisation de la liste
            $listeProfils = array();

            //ordre liste jeux créés
            $sqlProfils = "SELECT * FROM profil
                        WHERE id_utilisateur_COMPTE_UTILISATEUR = ".(string)$Comptes[$i]->id;

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

                    //liste des jeux créés
                    $listeProfils[] = $profil;
                }
            }

            //ajout des jeux au profil
            $Comptes[$i]->setSesProfils($listeProfils);
            //mise à jour de la liste de profils
            $listeComptes[] = $Comptes[$i];
            $i++;
        }
    }
