<?php
try
{
  $db = new PDO('mysql:host=localhost;dbname=exo_banque;charset=utf8', 'root', '');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

function chargerClasse($classname){

  require '../model/' . $classname . '.php';
}
spl_autoload_register('chargerClasse');

$CompteManager = new CompteManager($db);

$UserManager = new UserManager($db);