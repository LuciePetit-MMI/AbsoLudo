<!DOCTYPE html>
<html lang="fr">
    <head>    
        <?php require "./html/head.html"; ?>
        <title>Contact | AbsoLudo</title>
    </head>
<body id="contact">
    <header>
        <?php require "./html/nav.html"; ?>
        <h1><span>Un problème ? Une question ?</span> Contactez-nous, on vous aidera !</h1>
    </header>

    <form action="">
        <input type="text" placeholder="Nom (obligatoire)">
        <input type="text" placeholder="Prénom (obligatoire)">
        <input type="text" placeholder="Mail (obligatoire)">
        <input type="message" placeholder="Message (obligatoire)">
        <p>Mettre un captcha</p>
        <input type="submit" class="form-btn secondary_btn" value="Envoyer">
    </form>

    <?php require "./html/scripts.html"; ?>
</body>
</html>