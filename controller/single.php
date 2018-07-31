<?php
//Récupère les données du model
require "../model/connexion.php";
require "../model/project.php";
require "../model/step.php";

//Déclare la variable id
$id = $_GET['id'];

//Déclare la variable project
$project = getProject($bdd, $id);

//Déclare la variable étape
$step = getSteps($bdd);

//Affiche la vue
require "../view/singleView.php";

?>
