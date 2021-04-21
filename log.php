<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Inscription - Connection | AbsoLudo</title>
    </head>
<body id="logs">
    <header>
        <h1>Bienvenu sur <img src="./dist/img/svg/logo_absoludo_grand.svg" alt="AbsoLudo"></h1>
    </header>
    <form action="" id="form-signin" class="form">
        <h2>Connectez-vous</h2>
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Mot de passe">
        <input type="submit" class="form-btn primary_btn" value="Se connecter">
        <p>Pas encore de compte ? <a href="#particulier">Inscrivez-vous</a></p>
    </form>

    <form action="" id="form-particulier" class="form hidden">
        <h2>Inscrivez-vous</h2>
        <input type="text" placeholder="Nom">
        <input type="text" placeholder="Prénom">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Mot de passe">    
        <div class="checkbox">
            <label for="cg">J'accepte les <a href=''>conditions générales d'utilisation</a></label>
            <input type="checkbox" id="cg">
        </div>
        <input type="submit" class="form-btn primary_btn" value="Se connecter">
        <p>Déjà un compte ? <a href="#signin">Connectez-vous</a></p>
        <p>Vous êtes un professionnel ? <a href="#pro">Inscrivez-vous ici</a></p>
    </form>

    <form action="" id="form-pro" class="form hidden">
        <h2>Inscrivez-vous</h2>
        <input type="text" placeholder="Nom société">
        <input type="text" placeholder="N° Siret">
        <input type="text" placeholder="Email">
        <input type="text" placeholder="Mot de passe">
        <div class="checkbox">
            <label for="cg">J'accepte les <a href=''>conditions générales d'utilisation</a></label>
            <input type="checkbox" id="cg">
        </div>
        <input type="submit" class="form-btn primary_btn" value="Se connecter">
        <p>Déjà un compte ? <a href="#signin">Connectez-vous</a></p>
        <p>Vous êtes un particulier ? <a href="#particulier">Inscrivez-vous ici</a></p>
    </form>

    <?php require "./html/scripts.html"; ?>
</body>
</html>