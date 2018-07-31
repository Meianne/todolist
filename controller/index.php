<?php
//Récupère les données du model
require "../model/connexion.php";
require "../model/project.php";

//Déclare la variable projects (via la connexion)
$projects = getProjects($bdd);
// var_dump($projects);

//Affiche la vue
require "../view/indexView.php";

?>
