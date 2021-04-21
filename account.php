<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Mon Compte | AbsoLudo</title>
    </head>
<body id="account">
    <header>
        <?php require "./html/nav.html"; ?>
        <h1>Paramètre du compte</h1>
    </header>
    <section id="particular">
        <div id="account_choice">
                <img src="./dist/img/profil.jpg" id="account_link" class="active"/>
                <img src="./dist/img/profil.jpg" id="profil1_link"/>
                <img src="./dist/img/profil.jpg" id="profil2_link"/>
        </div>
    
        <section id="account_settings">
            <form action="">
                <label for="">Nom : </label>
                <input type="text" value="nom">
                <label for="">Prénom : </label>
                <input type="text" value="prenom">
                <label for="">Mail : </label>
                <input type="text" value="email@email.com">
                <label for="">Mot de passe : </label>
                <input type="text" value="**********">
                <input type="submit" value="Modifier" class="secondary_btn">
            </form>
        </section>

        <section id="profil1_settings" class="hidden">
            <form action="">    
                <img src="./dist/img/profil.jpg" alt="image profil">
                <label for="">Nom : </label>
                <input type="text" value="nom">
                <label for="">Prénom : </label>
                <input type="text" value="prenom">
                <label for="">Âge : </label>
                <input type="text" value="X ans">
                <label for="">Jeu préféré : </label>
                <input type="text" value="nom jeu">
                <label for="">Centres d'intérêts : </label>
                <input type="text" value="cheval, foot">
                <label for="badge">Badge :</label>
                <div class="custom-select">
                    <select name="badge">
                        <option value="nom">Nom</option>
                        <option value="nom">Nom</option>
                        <option value="nom">Nom2</option>
                        <option value="nom">Nom3</option>
                        <option value="nom">Nom4</option>
                        <option value="nom">Nom5</option>
                        <option value="nom">Nom6</option>
                        <option value="nom">Nom7</option>
                        <option value="nom">Nom8</option>
                        <option value="nom">Nom9</option>
                    </select>
                </div>
                <input type="submit" value="Modifier" class="secondary_btn">
            </form>
        </section>

        <section id="profil2_settings" class="hidden">
            <form action="">    
                <img src="./dist/img/profil.jpg" alt="image profil">
                <label for="">Nom : </label>
                <input type="text" value="nom 2">
                <label for="">Prénom : </label>
                <input type="text" value="prenom 2">
                <label for="">Âge : </label>
                <input type="text" value="X ans">
                <label for="">Jeu préféré : </label>
                <input type="text" value="nom jeu">
                <label for="">Centres d'intérêts : </label>
                <input type="text" value="cheval, foot">
                <label for="badge">Badge :</label>
                <div class="custom-select">
                    <select name="badge">
                        <option value="nom">Nom</option>
                        <option value="nom">Nom</option>
                        <option value="nom">Nom2</option>
                        <option value="nom">Nom3</option>
                        <option value="nom">Nom4</option>
                        <option value="nom">Nom5</option>
                        <option value="nom">Nom6</option>
                        <option value="nom">Nom7</option>
                        <option value="nom">Nom8</option>
                        <option value="nom">Nom9</option>
                    </select>
                </div>
                <input type="submit" value="Modifier" class="secondary_btn">
            </form>
        </section>

    </section>

    <section id="pro">
        <form action="">    
        <img src="./dist/img/profil.jpg" alt="image profil">
            <label for="">Nom de la société : </label>
            <input type="text" value="nom societe">
            <label for="">Adresse : </label>
            <input type="text" value="adresse">
            <label for="">Mail : </label>
            <input type="text" value="email@email.com">
            <label for="">Mot de passe : </label>
            <input type="text" value="********">
            <label for="">Type :</label>
            <div class="custom-select">
                <select>
                    <option value="nom">Magasin spécialisé</option>
                    <option value="nom">Magasin spécialisé</option>
                    <option value="nom">Bar à jeux</option>
                    <option value="nom">Association</option>
                </select>
            </div>
            <label for="badge">Badge :</label>
            <div class="custom-select">
                <select name="badge">
                <option value="nom">Nom</option>
                        <option value="nom">Nom</option>
                        <option value="nom">Nom2</option>
                        <option value="nom">Nom3</option>
                        <option value="nom">Nom4</option>
                        <option value="nom">Nom5</option>
                        <option value="nom">Nom6</option>
                        <option value="nom">Nom7</option>
                        <option value="nom">Nom8</option>
                        <option value="nom">Nom9</option>
                </select>
            </div>
            <input type="submit" value="Modifier" class="secondary_btn">
        </form>
    </section>


    <?php require "./html/footer.html"; ?>
    <?php require "./html/scripts.html"; ?>
</body>
</html>