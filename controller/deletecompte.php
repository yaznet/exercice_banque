<?php

require ('db.php');

if (isset($_POST['delete'])) {

$compte = new Compte([
'id' => $_POST['compte_id']
]);

$CompteManager->suprCompte($compte);

}

header('location: ../views/index.php');

