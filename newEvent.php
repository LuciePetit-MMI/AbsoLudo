<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Créer un Evénement | AbsoLudo</title>
    </head>
<body id="event">
    <header>
        <?php require "./html/nav.html"; ?>
        <h1>Créer un événement</h1>
    </header>

    <form action="">
        <input type="text" placeholder="Nom (obligatoire)">
        <input type="text" placeholder="Date (obligatoire)">
        <input type="text" placeholder="Heure (obligatoire)">
        <input type="text" placeholder="Lieu (obligatoire)">
        <input type="text" placeholder="Nombre de participants (obligatoire)">
        <input type="text" placeholder="Tarif (obligatoire)">
        <input type="text" placeholder="Détails (obligatoire)">
        <input type="submit" class="form-btn secondary_btn" value="Créer">
    </form>

    <?php require "./html/scripts.html"; ?>
</body>
</html>