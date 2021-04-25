<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Accueil | AbsoLudo</title>
    </head>
<body id="home">
    <header>
        <?php require "./html/nav.html"; ?>
    </header>
    <?php require "./html/searchBar.html"; ?>
    <div class="grid user">
        <a href="ludotheque.php" class="user_library grid_item"><h1>Ma Ludothèque</h1></a>
        <a href="selection.php" class="user_selection grid_item">Sélection du mois</a>
        <a href="top.php" class="user_top grid_item">Top jeux</a>
        <a href="ludotheque.php#want" class="user_wishlist grid_item">Wishlist</a>
        <a href="event.php" class="user_calendar grid_item">Agenda</a>
        <a href="map.php" class="user_map grid_item">Carte</a>
        <a href="forum.php" class="user_forum grid_item">Forum</a>
    </div>

    <div class="grid2 pro">
        <a href="newEvent.php" class="pro_event grid_item"><h2>Créer un évènement</h2></a>
        <a href="top.php" class="pro_top grid_item">Top jeux</a>
        <a href="event.php" class="pro_calendar grid_item">Agenda</a>
        <a href="map.php" class="pro_map grid_item">Carte</a>
        <a href="forum.php" class="pro_forum grid_item">Forum</a>
    </div>


    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html> 