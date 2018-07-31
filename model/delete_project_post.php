<?php
//Connexion
require_once "connexion.php"

//Suppression
$request = $bdd->prepare("DELETE FROM steps WHERE id = ?");
$request->execute([$_POST["id"]]);

//Redirige l'utilisateur
header("Location: ../view/indexView.php");

?>
