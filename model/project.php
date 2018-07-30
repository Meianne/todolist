<?php
require "../model/connexion.php";

$itemsQuery = $bdd->prepare("
  SELECT id, name, done
  FROM items
  WHERE user = :user
");

$itemsQuery->execute([
  'user' => $_SESSION['user_id']
]);

$items = $itemsQuery->rowCount() ? $itemsQuery : [];


$projectsQuery = $bdd->prepare('
  SELECT id
  FROM projects
  WHERE user = :user
');

$projectsQuery->execute('
  'user'=> $_SESSION['user_id']
');

$projects = $projectsQuery->rowCount() ? $projectsQuery : [];

foreach ($projects as $project) {
  echo $projects['name'], '</br>';
}

// function getProjects($bdd) {
//   //Requête la base de données
//   $request = $bdd->query('SELECT * FROM projects');
//   //Extraction des informations
//   $projects = $request->fetchall(PDO::FETCH_ASSOC);
//   //Retourne les données
//   return $projects;
// }
//
//
// //Supprime un projet
// function deleteProject() {
//
// }
//
// //Enregistre (ajoute) un projet
// function insertProject() {
//
// }
