
<?php
function ajouterUser($email, $motdepasse)
{
    if (require("connexion.php")) {
        $req = $access->prepare("INSERT INTO utilisateurs ( username, `password`) VALUES ( ?, ?)");

        $req->execute(array($email, $motdepasse));

        return true;

        $req->closeCursor();
    }
}
function ajouterCode($code)
{
    if (require("connexion.php")) {
        $req = $access->prepare("INSERT INTO code ( code ) VALUES ( ?)");

        $req->execute(array($code));

        return true;

        $req->closeCursor();
    }
}
?>