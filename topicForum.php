<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Un topic | AbsoLudo</title>
    </head>
<body id="forum">
    <header>
        <?php require "./html/nav.html"; ?>
        <h1 class="comment_h1">Sujet : Nom du topic</h1>
    </header>

    <div class="comment">
        <div class="comment_head">
            <img src="./dist/img/profil.jpg" class="comment_head_img" alt="photo profil">
            <div class="comment_head_text">
                <p class="comment_head_name">Nom Prénom</p>
                <p class="comment_head_badge">Statut</p>
                <p class="comment_head_date">le date</p>
            </div>
        </div>
        <p class="comment_body">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Debitis molestiae praesentium modi quam itaque harum.</p>
    </div>
    <button class="comment_btn secondary_btn"><i class="fas fa-user-edit fa-3x"></i>Ecrire une réponse</button>
    <div class="comment">
        <div class="comment_head">
            <img src="./dist/img/profil.jpg" class="comment_head_img" alt="photo profil">
            <div class="comment_head_text">
                <p class="comment_head_name">Nom Prénom</p>
                <p class="comment_head_badge">Statut</p>
                <p class="comment_head_date">le date</p>
            </div>
        </div>
        <p class="comment_body">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, vero?</p>
    </div>
    <div class="comment">
        <div class="comment_head">
            <img src="./dist/img/profil.jpg" class="comment_head_img" alt="photo profil">
            <div class="comment_head_text">
                <p class="comment_head_name">Nom Prénom</p>
                <p class="comment_head_badge">Statut</p>
                <p class="comment_head_date">le date</p>
            </div>
        </div>
        <p class="comment_body">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Totam, amet reiciendis omnis reprehenderit repudiandae magnam ut adipisci aliquam praesentium dolorem dolore placeat obcaecati aliquid dolores, provident, iste veniam natus facilis?</p>
    </div>

    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html>