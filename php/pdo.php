<?php
    
    // Création objet PDO
    $pdo = new PDO(
        'mysql:host=localhost;dbname=absoludo_data_base',
        'root',
        'root'
    );

    $request = $pdo->prepare("select * from compte_utilisateur");

    $request->execute();

    $comptes = $request->fetchAll();

    print_r($comptes);
?>