<?php include("./php/process/listeJeux.php");?>

<div class="ludo_game">
    <img src="./dist/img/profil.jpg" alt="" class="ludo_game_img">
    <div class="ludo_game_text">
        <h3 class="ludo_game_title"><?= $jeu->name;?></h3>
        <div class="ludo_game_btns">
            <button class="ludo_game_have secondary_btn have_section hidden"><i class="fas fa-chess-king"></i> Je l'ai</button>
            <button class="ludo_game_played secondary_btn played_section"><i class="fas fa-check"></i> J'y ai joué</button>
            <button class="ludo_game_want secondary_btn want_section"><i class="far fa-heart"></i> Je le veux</button>
        </div>
    </div>
</div>
