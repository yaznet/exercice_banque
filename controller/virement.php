<?php

require ('db.php');

if(isset($_POST['sum']) && !empty($_POST['sum'])){

$compte1 = $CompteManager->get($_POST['account1']);

$compte2 = $CompteManager->get($_POST['account2']);

}

if(isset($_POST['account1']) && !empty($_POST['account1'])){

$compte1->diminuer($_POST['sum']);

}

if(isset($_POST['account2']) && !empty($_POST['account2'])){

$compte2->augmenter($_POST['sum']);

}

$CompteManager->updateCompte($compte1);
$CompteManager->updateCompte($compte2);

header('location: ../views/index.php');