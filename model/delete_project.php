<?php
//Connexion basse de donnée
require_once "connexion.php";

//Requête la base de données
$request = $bdd->query('SELECT id, name FROM projects');
//Extraction des informations
$projects = $request ->fetchall(PDO::FETCH_ASSOC);
// var_dump($products);


// Template loading
require "../view/template/header.php";
require "../view/template/nav.php";
?>

<!-- Main content -->
<main class="container my-5">
  <h2>Supprimer un projet</h2>
  <ul>
    <?php
      // Affiche les produits récupérés en BDD
        foreach ($projects as $key => $project)
        {
          echo "<li>" . $project["name"] . "</li>";
      ?>

      <form action="delete_project_post.php" method="post">
        <p><input type="hidden" name="id" value=<?php echo $project['id']; ?>></p>
        <p><input type="submit" name="deleteproduit" value="Supprimer"></p>
      </form>

      <?php
      }
      ?>
  </ul>
</main>

<?php
// Footer loading
require "../view/template/footer.php"
?>
