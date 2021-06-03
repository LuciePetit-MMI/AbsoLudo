<?php include("./php/process/listeTopics.php");?>

<div class="topic">
    <i class="topic_icon fas fa-scroll fa-2x"></i>
    <div class="topic_text">
        <a href="topicForum.php"><h2 class="topic_title"><?= $topic->title?></h2></a>
        <p class="topic_name">par Nom Prénom</p>
        <p class="topic_date"><?= $topic->datetime?></p>
    </div>
</div>