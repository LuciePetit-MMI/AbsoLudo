<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Forum d'entraide | AbsoLudo</title>
    </head>
<body id="forum">
    <header>
        <?php require "./html/nav.html"; ?>
        <h1>Forum d'entraide</h1>
    </header>
    <?php require "./html/searchBar.html"; ?>
    <section class="listTopic">
            <div class="topic">
                <i class="topic_icon fas fa-scroll fa-2x"></i>
                <div class="topic_text">
                <a href="topicForum.php"><h2 class="topic_title">Titre du topic</h2></a>
                    <p class="topic_name">par Nom Prénom</p>
                    <p class="topic_date">le date</p>
                </div>
            </div>
            <div class="topic">
                <i class="topic_icon fas fa-comments fa-2x"></i>
                <div class="topic_text">
                    <a href="topicForum.php"><h2 class="topic_title">Titre du topic</h2></a>
                    <p class="topic_name">par Nom Prénom</p>
                    <p class="topic_date">le date</p>
                </div>
            </div>
            <div class="topic">
                <i class="topic_icon fas fa-dice fa-2x"></i>
                <div class="topic_text">
                    <a href="topicForum.php"><h2 class="topic_title">Titre du topic</h2></a>
                    <p class="topic_name">par Nom Prénom</p>
                    <p class="topic_date">le date</p>
                </div>
            </div>
            <div class="topic">
                <i class="topic_icon fas fa-dice fa-2x"></i>
                <div class="topic_text">
                    <a href="topicForum.php"><h2 class="topic_title">Titre du topic</h2></a>
                    <p class="topic_name">par Nom Prénom</p>
                    <p class="topic_date">le date</p>
                </div>
            </div><div class="topic">
                <i class="topic_icon fas fa-dice fa-2x"></i>
                <div class="topic_text">
                    <a href="topicForum.php"><h2 class="topic_title">Titre du topic</h2></a>
                    <p class="topic_name">par Nom Prénom</p>
                    <p class="topic_date">le date</p>
                </div>
            </div>
    </section>
    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html>