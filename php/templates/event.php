<?php include("./php/process/listeEvents.php");?>

<li class="event_list_item">
    <p class="event_list_date">date</p>
    <div class="event_list_infos">
        <p class="event_list_name"><?= $evenement->name;?></p>
        <p class="event_list_place">Lieu par Organisateur</p>
        <p class="event_list_time">heures</p>
    </div>
    <div class="event_list_details">
        <p class="event_list_type"><span>Type :</span> <?= $evenement->activity;?></p>
        <p class="event_list_adress"><span>Lieu :</span> <?= $evenement->address;?></p>
        <p class="event_list_members"><span>Participants :</span> <?= $evenement->members;?></p>
        <p class="event_list_price"><span>Tarif :</span> <?= $evenement->price;?></p>
        <p class="event_list_description"><span>Détails :</span> <?= $evenement->description;?></p>
        <button class="event_list_btn primary_btn">Je participe</button>
    </div>
</li>

<?php include("./php/process/listeParticipants.php");?>
