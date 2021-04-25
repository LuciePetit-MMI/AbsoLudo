<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Ma Ludothèque | AbsoLudo</title>
    </head>
<body id="library">
    <header>
        <?php require "./html/nav.html"; ?>
    <h1>Ma Ludothèque</h1>
    </header>

    <?php require "./html/searchBar.html"; ?>

    <div class="titles">
        <h2 id="have_title" class="active">Je l'ai</h2>
        <h2 id="played_title">J'y ai joué</h2>
        <h2 id="want_title">Je le veux</h2>
    </div>

    <section id="have_section" class="show">
        <div>
            <?php require "./html/ludoGame.html"; ?>         
        </div>
    </section>

    <section id="played_section" class="hidden">
        <div>
            <?php require "./html/ludoGame.html"; ?>         
        </div>
    </section>

    <section id="want_section" class="hidden">
        <div>
            <?php require "./html/ludoGame.html"; ?>         
        </div>
    </section>


    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html>