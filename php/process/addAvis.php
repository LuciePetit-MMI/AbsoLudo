<?php
    require_once '../pdo.php';

    if(isset($_POST['avis'])){
        $sql = "INSERT INTO commente (id_profil_PROFIL, id_jeu_JEU_DE_SOCIETE, date_COMMENTE, message_COMMENT, note_COMMENTE"
                . "VALUES(?,?,?,?,?)";
        
        $requete = $pdo->prepare($sql);
        $requete->bindParam(1, $_POST['idProfil']);
        $requete->bindParam(2, $_POST['idJeu']);
        $requete->bindParam(3, date('d-m-y h-i'));
        $requete->bindParam(4, $_POST['message']);
        $requete->bindParam(5, $_POST['note']);

        echo $requete->execute();
    }else{
        echo -1;
    }