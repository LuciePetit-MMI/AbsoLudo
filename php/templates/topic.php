<?php require_once ("./config.php"); ?>
<?php include(BASEPATH."/php/process/listeReponses.php");?>

<div class="comment">
        <div class="comment_head">
            <img src="./dist/img/profil.jpg" class="comment_head_img" alt="photo profil">
            <div class="comment_head_text">
                <p class="comment_head_name"><?= $profil->name?></p>
                <p class="comment_head_badge"><?= $profil->sesBadges?></p>
                <p class="comment_head_date"><?= $reponse->date?></p>
            </div>
        </div>
        <p class="comment_body"><?= $reponse->name?></p>
    </div>
