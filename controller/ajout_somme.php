<?php

require ('db.php');

if(isset($_POST['sum']) && !empty($_POST['sum'])){

$compte1 = $CompteManager->get($_POST['id']);

} 

if(isset($_POST['add']) && !empty($_POST['add'])){

$compte1->diminuer($_POST['sum']);

}

if(isset($_POST['take']) && !empty($_POST['take'])){

$compte1->augmenter($_POST['sum']);

}

$CompteManager->updateCompte($compte1);


header('location: ../views/index.php');