<?php
require "template/header.php";
require "template/nav.php"
?>

<div class="container text-center my-2">
  <h2><?php echo $project['name']; ?></h2>
  <p><?php echo $project['created']; ?></p>

  <form action="../model/add_step_post.php" method="post">
    <p><i class="fas fa-plus-circle"></i> Ajouter une étape :</p>
      <p><input type="text" name="name" required></p>
      <p><input type="submit" name="ajoutetape" value="Ajouter"></p>
  </form>
</div>
