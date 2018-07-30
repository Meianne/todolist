<?php

require "connexion.php";

if (isset($_POST['name'])) {
  $name = $_POST['name'];

  if (!empty($name)) {
    $addedQuery = $bdd->prepare("
      INSERT INTO projects (name, user, done, created)
      VALUES (:name, :user, 0, NOW())
    ");

    $addedQuery->execute([
      'name' => $name,
      'user' => $_SESSION['user_id']
    ]);
  }
}

header('Location: indexView.php');
