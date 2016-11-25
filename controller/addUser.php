<?php

require ('db.php');

if(isset($_POST['pseudo']) && !empty($_POST['pseudo']) && isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['email']) && !empty($_POST['email'])){

$user = new user([
  'pseudo' => $_POST['pseudo'],
  'password' => $_POST['password'],
  'email' => $_POST['email']
]);

$UserManager->addUser($user);

}


header('location: ../views/inscription.php');