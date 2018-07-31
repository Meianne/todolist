<?php
      // Protéger par mot de passe

//Connexion à la BDD
require "connexion.php";
require "../model/step.php";

//Déclare la variable d'ajout d'étape
$addStep = addStep($bdd);


//Redirige l'utilisateur
header("Location: ../controller/index.php");
?>
