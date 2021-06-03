<?php

require_once '../pdo.php';

if(isset($_POST['play'])){

    $sql = "UPDATE interagit 
    SET possede_INTERAGIT = ?, 
        connait_INTERAGIT = ?, 
        souhaite_INTERAGIT = ?,
    WHERE id_jeu_JEU_DE_SOCIETE = ?
    AND id_profil_PROFIL = ?";    

    $requete = $pdo->prepare($sql);
    $requete->bindValue(1, $_POST["possede"]);
    $requete->bindValue(2, $_POST["connait"]);
    $requete->bindValue(3, $_POST["souhaite"]);
    $requete->bindValue(4, $_POST["idJeu"]);
    $requete->bindValue(5, $_POST["idProfil"]);
    $requete->execute();
}