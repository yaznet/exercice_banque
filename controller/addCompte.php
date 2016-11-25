<?php

require ('db.php');

if(isset($_POST['name']) && !empty($_POST['name'])){

$compte = new compte([
  'nomDuCompte' => $_POST['name'],
  'user_id' => 1,  
  'somme' => 80
]);

$CompteManager->ajoutCompte($compte);

}

header('location: ../views/index.php');