<?php
require "connexion.php";

// Lire des étapes
function getSteps($bdd) {
  $reponse = $bdd->query('SELECT * FROM steps');
  // $reponse = $bdd->query('SELECT s.name name_step, p.name name_project FROM projects p INNER JOIN steps s ON s.ID_project = p.id');
  $steps = $reponse->fetchall(PDO::FETCH_ASSOC);
  return $steps;
}

// Ajouter une étape
function addStep($bdd) {
  $request = $bdd->prepare('INSERT INTO steps (name) VALUES(:name)');
  $request->execute([
    "name"=>$_POST["name"],
  ]);
}

// Modifier une étape
function updateStep($bdd) {
  $request = $bdd->prepare('UPDATE INTO steps (name, done) VALUES(:name, 1)');
  $request->execute([
    "name"=>$_POST["name"],
  ]);
}

// Supprimer une étape
function deleteStep($bdd) {
  $request = $bdd->prepare('DELETE FROM steps WHERE id=?');
  $request->execute([$_POST["id"]]);
}
