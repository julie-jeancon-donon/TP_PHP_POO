<?php

require '../entities/Character.php';
require '../model/CharacterManager.php';
require '../model/Database.php';


if (isset($_POST['creer']) && isset($_POST['nom'])) 
{
  $perso = new Character(['name' => $_POST['nom']]); 
}

include "../views/indexVue.php";
 ?>
