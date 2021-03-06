<?php include("./php/process/listeJeux.php");?>

<div class="game">
    <section class="game_elements">
        <img src="./dist/img/profil.jpg" alt="" class="game_img">
        <div class="game_items">
            <h2 class="game_items_title"><?= $jeu->name;?></h2>
            <div class="wrap">  
                <div class="game_items_info">
                    <p class="game_items_info_players"><i class="fas fa-users"></i><?= $jeu->player;?></p>
                    <p class="game_items_info_age"><i class="fas fa-birthday-cake"></i><?= $jeu->age;?></p>
                    <p class="game_items_info_time"><i class="fas fa-hourglass-half"></i><?= $jeu->playTime;?></p>
                </div>
                <div class="game_items_note">
                    <p class="game_items_note_mark">4,8<i class="icon-de"></i></p>
                    <p class="game_items_note_notice">12 avis</p>
                </div>
            </div>
        </div> 
    </section>
    <section class="game_charac">
        <div class="game_cross"></div>
        <div class="game_charac_img"></div>
        <div class="game_charac_items">
            <h2 class="game_items_title"><?= $jeu->name;?></h2>
            <div class="line">
                <p class="game_charac_items_players"><i class="fas fa-users"></i><?= $jeu->player;?></p>
                <p class="game_charac_items_age"><i class="fas fa-birthday-cake"></i><?= $jeu->age;?></p>
                <p class="game_charac_items_time"><i class="fas fa-hourglass-half"></i><?= $jeu->playTime;?></p>
            </div>
            <p class="game_charac_items_category"><?= $jeu->category;?></p>
        </div>
        <div class="game_charac_items_note">
            <p class="game_charac_items_note_mark">4,8<i class="icon-de"></i></p>
            <p class="game_charac_items_note_notice">12 avis</p>
        </div>
        <section class="game_interact">
            <div class="game_interact_ludo">
                <button class="game_interact_ludo_have secondary_btn"><i class="fas fa-chess-king"></i> Je l'ai</button>
                <button class="game_interact_ludo_played secondary_btn"><i class="fas fa-check"></i> J'y ai jou??</button>
                <button class="game_interact_ludo_want secondary_btn"><i class="far fa-heart"></i> Je veux</button>
            </div>
            <div class="game_interact_notice">
                <p class="game_interact_notice_mark">Noter : <i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i><i class="icon-de-outline"></i></p>
                <button class="game_interact_notice_notice secondary_btn"><i class="fas fa-user-edit"></i> Avis</button>
            </div>
            <button class="game_interact_want primary_btn"><i class="far fa-heart fa-2x"></i> Ajouter ?? ma Wishlist</button>
        </section>
        <h2 class="game_affiliation_title">Achetez-le chez eux !</h2>
        <section class="game_affiliation">
            <a href="<?= $jeu->fnac;?>" class="game_affiliation_fnac"><img src="./dist/img/fnac.png" alt=""></a>
            <a href="<?= $jeu->cultura;?>" class="game_affiliation_cultura"><img src="./dist/img/cultura.png" alt=""></a>
        </section>
        <h3 class="game_notice_title">Les avis des joueurs</h3>
        <section class="game_notice">
            <div class="game_notice_items">
                <img src="./dist/img/profil.jpg" alt="" class="game_notice_img">
                <div class="game_notice_text">
                    <h4 class="game_notice_name">Nom Pr??nom</h4>
                    <p class="game_notice_badge">Nom badge</p>
                    <p class="game_notice_text">ceci est un avis</p>
                </div>
            </div>
            <div class="game_notice_items">
                <img src="./dist/img/profil.jpg" alt="" class="game_notice_img">
                <div class="game_notice_text">
                    <h4 class="game_notice_name">Nom2 Pr??nom3</h4>
                    <p class="game_notice_badge">Autre badge</p>
                    <p class="game_notice_text">ceci est un autre avis</p>
                </div>
            </div>
        </section>  
    </section>
</div>