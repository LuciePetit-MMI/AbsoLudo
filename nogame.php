<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Pas de jeu | AbsoLudo</title>
    </head>
<body id="nogame">
    <header>
        <?php require "./html/nav.html"; ?>
    </header>
    <h1>Ce jeu n'existe pas ? Demandez nous de l'ajouter</h1>
    <form action="">
        <input type="text" placeholder="Nom du jeu (obligatoire)">
        <input type="text" placeholder="Editeur (obligatoire)">
        <input type="text" placeholder="Version">
        <input type="submit" value="Demander" class="secondary_btn">
    </form>
    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html> 