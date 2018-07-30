<?php

require_once '../controller/index.php';
require_once '../model/connexion.php'

 ?>

 <div class="list">
   <h1 class="header">To do</h1>

   <?php if (!empty($items)) : ?>
   <ul>
     <?php foreach ($items as $item): ?>
     <li>
       <span><?php echo $item['name']; ?></span>
       <?php if (!$item['done']): ?>
         <a href="../model/mark.php?as=done&item=<?php echo $item['id']; ?>">Terminé</a>
         <a href="../model/mark.php?as=notdone&item=<?php echo $item['id']; ?>">Pas terminé</a>
       <?php endif; ?>
     </li>
   <?php endforeach; ?>
   </ul>
 <?php else: ?>
   <p>Vous n'avez pas de projets en cours.</p>
 <?php endif; ?>

   <form class="item-add" action="add.php" method="post">
     <input type="text" name="name" placeholder="Ajouter la tâche ici." class="input" autocomplete="off" required>
     <input type="submit" value="Ajouter" class="">
   </form>

 </div>
