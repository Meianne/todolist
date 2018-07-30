<?php

require "../model/connexion.php";

if (isset($_GET['as'], $_GET['item'])) {
  $as = $_GET['as'];
  $item = $_GET['item'];

  switch ($as) {
    case 'done':
      $doneQuery = $bdd->prepare("
        UPDATE items
        SET done = 1
        WHERE id = :item
        AND user = :user
      ");

      $doneQuery->execute([
        'item' => $item,
        'user' => $_SESSION['user_id']
      ]);
      break;
    case 'notdone':
    $doneQuery = $bdd->prepare("
      UPDATE items
      SET done = 0
      WHERE id = :item
      AND user = :user
    ");

    $doneQuery->execute([
      'item' => $item,
      'user' => $_SESSION['user_id']
    ]);
      break;
  }
}

header('Location: indexView.php');
