<?php include("./php/process/listeUtilisateurs.php");?>

<nav class="nav">

    <a href="index%20.php"><img src="./dist/img/svg/logo_absoludo.svg" alt="Logo Absoludo" class="nav_logo"></a>
    <div class="nav_profil_change">
        <img src="./dist/img/profil.jpg" alt="Photo" class="nav_profil_change_show">
    </div>
    <div class="nav_profil_change_items">
        <p class="triangle">Changer de profil ? </p>
        <div class="nav_profil_change_item"><img src="./dist/img/<?= $profil->avatar;?>" alt="Photo Profil 1" class="nav_profil_change_item"><p><?php echo $profil->pseudo;?></p></div>
        <div class="nav_profil_change_item"><img src="./dist/img/profil.jpg" alt="Photo Profil 2" class="nav_profil_change_item"><p>Nom Prénom 2</p></div>
        <div class="nav_profil_change_item"><img src="./dist/img/profil.jpg" alt="Photo Profil 3" class="nav_profil_change_item"><p>Nom Prénom 3</p></div>
        <a href="">Déconnexion</a>
    </div>

    <div class="nav_ham"> 
        <div class="nav_ham_item"></div>
    </div>

    <ul class="nav_menu user_menu">
        <li class="nav_menu_link home"><a href="index%20.php" class="link">Accueil</a></li>
        <li class="nav_menu_link library"><a href="ludotheque.php" class="link">Ma Ludothèque</a></li>
        <li class="nav_menu_link selection"><a href="selection.php" class="link">Sélection du mois</a></li>
        <li class="nav_menu_link topj"><a href="top.php" class="link">Tops Jeux</a></li>
        <li class="nav_menu_link wishlist"><a href="ludotheque.php#want" class="link">Wishlist</a></li>
        <li class="nav_menu_link calendar"><a href="event.php" class="link">Événements</a></li>
        <li class="nav_menu_link map"><a href="map.php" class="link">Carte</a></li>
        <li class="nav_menu_link forum"><a href="forum.php" class="link">Forum</a></li>
        <li class="nav_menu_link account"><a href="account.php" class="link">Mon Compte</a></li>
    </ul>

    <ul class="nav_menu pro_menu">
        <li class="nav_menu_link home"><a href="index%20.php" class="link">Accueil</a></li>
        <li class="nav_menu_link event"><a href="newEvent.php" class="link">Créer un événements</a></li>
        <li class="nav_menu_link topj"><a href="top.php" class="link">Tops Jeux</a></li>
        <li class="nav_menu_link calendar"><a href="event.php" class="link">Événements</a></li>
        <li class="nav_menu_link map"><a href="map.php" class="link">Carte</a></li>
        <li class="nav_menu_link forum"><a href="forum.php" class="link">Forum</a></li>
        <li class="nav_menu_link account"><a href="account.php" class="link">Mon Compte</a></li>
    </ul>
</nav>