<?php
  include("template/header.php")
 ?>

<p>This is the index view</p>

 <?php
   include("template/footer.php")
  ?>


  <!DOCTYPE html>
<html>
  <head>
    <title>TP : Mini jeu de combat</title>
    
    <meta charset="utf-8" />
  </head>
  <body>
    <form action="" method="post">
      <p>
        Nom : <input type="text" name="nom" maxlength="50" />
        <input type="submit" value="Créer ce personnage" name="creer" />
        <input type="submit" value="Utiliser ce personnage" name="utiliser" />
      </p>
    </form>
  </body>
</html>