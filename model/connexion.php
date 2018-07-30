<?php

session_start();

$_SESSION['user_id'] = 1;
$bdd = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

if (!isset($_SESSION['user_id'])) {
  die('Vous n\'êtes pas connecté.');
}



// try
// {
//   $bdd = new PDO('mysql:host=localhost;dbname=todolist;charset=utf8', 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
// }
// catch (Exception $e)
// {
//         die('Erreur : ' . $e->getMessage());
// }
