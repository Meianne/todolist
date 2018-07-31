<?php require "template/header.php" ?>
<?php require "template/nav.php" ?>

   <div class="container text-center my-2">
     <h2>To do</h2>
       <?php if (!empty($projects)) : ?>
       <ul>
         <div class="d-flex flex-wrap justify-content-around py-5">
            <?php
             // Affiche les produits récupérés en BDD
               foreach ($projects as $key => $project) {
                 echo "<article>
                 <h3>" . $project['name'] ."</h3> <br>" .
                 $project['created'] . "<br>";
                 //Lien qui transfère l'id de l'objet vers single.php
                echo "<a href='single.php?id=" . $project['id'] . "'>Voir le projet</a> " . '</article> ';
                // echo "<a href='single.php?id=" . $project['id'] . '><i class="fas fa-search-plus"></i> Voir le projet</a>' . "</article>";
                // echo '<form action="delete_project_post.php" method="post">
                //   <input type="hidden" name="id" value='. $project['id'] . '>
                //   <input type="submit" name="deleteproduit" value="Supprimer">
                // </form>'
               }
            ?>
          </div>
       </ul>
       <?php else: ?>
          <p>Vous n'avez pas de projets en cours.</p>
       <?php endif; ?>

   <form action="../model/add_project_post.php" method="post">
    <p><i class="fas fa-plus-circle"></i> Ajouter un projet :</p>
     <p><input type="text" name="name" required></p>
     <p><input type="submit" name="ajoutprojet" value="Enregistrer"></p>
   </form>
  </div>

  <?php require "template/footer.php" ?>
