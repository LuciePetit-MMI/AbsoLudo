<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Tops Jeux | AbsoLudo</title>
    </head>
<body id="topj">
    <header>
        <?php require "./html/nav.html"; ?>
    </header>
    <h1>
        <div id="user_title" class="active top_btn">Top Utilisateurs</div>
        <div id="absoludo_title" class="top_btn">Top AbsoLudo</div>
    </h1>

    <section id="user_top" class="show">
        <?php require "./html/games.html"?>
    </section>

    <section id="absoludo_top" class="hidden">
        <?php require "./html/games.html"?>
    </section>

    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html>