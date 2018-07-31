<?php
require "../model/connexion.php";

// Lire des projets
function getProjects($bdd) {
  $reponse = $bdd->query('SELECT * FROM projects');
  $projects = $reponse->fetchall(PDO::FETCH_ASSOC);
  return $projects;
}

// Lire un projet
function getProject($bdd, $id) {
  $reponse = $bdd->prepare('SELECT * FROM projects WHERE id=?');
  $reponse->execute([$id]);
  $project = $reponse->fetch(PDO::FETCH_ASSOC);
  return $project;
}

// Ajouter un projet
function addProject($bdd) {
  $reponse = $bdd->prepare('INSERT INTO projects (name, done, created) VALUES(:name, 0, now())');
  $request->execute([
    "name"=>$_POST["name"],
  ]);
}



// Modifier un projet
function updateProject($bdd) {

}

// Supprimer un projet
function deleteProject($bdd) {
  $reponse = $bdd->prepare('DELETE FROM projects WHERE id=?');
  $request->execute([$_POST["id"]]);
}
