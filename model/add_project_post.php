<?php
//Connexion à la BDD
require_once "connexion.php";

//Requete en BDD
$request = $bdd->prepare("INSERT INTO projects(name) VALUES(:name)");
$request->execute(["name"=>$_POST["name"]]);

//Redirige l'utilisateur
header("Location: ../controller/index.php");
?>
