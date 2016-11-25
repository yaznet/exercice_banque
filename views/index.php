
<?php  

require ('../controller/db.php');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>TP : Compte Bancaire</title>

  <link rel="stylesheet" href="style.css">
</head>
  <body>

    <h1>Mes comptes</h1>

    <?php

    $comptes=$CompteManager->getCompte(1);
    foreach($comptes as $compte){

    ?>

    <div class="compte">

      <fieldset>
        <legend>Compte n°<?php echo $compte->getId(); ?><strong> <?php echo $compte->getNomDuCompte(); ?></strong></legend>
        <p>Somme disponible : <br>
        <?php echo $compte->getSomme(); ?> €</p>
      </fieldset>

      <!-- FORMULAIRE VERSEMENT/RETRAIT -->
      <form action="../controller/ajout_somme.php" method="post">
        <input type="text" class="sum" name="sum" placeholder="Entrez une somme">
        <input type="hidden" name="id" value="<?php echo $compte->getId();?>">
        <input type="submit" name="add" value="Créditer">
        <input type="submit" name="take" value="Débiter">
      </form>
      <!-- END FORMULAIRE VERSEMENT/RETRAIT -->

      <!-- FORMULAIRE SUPPRESSION COMPTE -->
      <form action="../controller/deletecompte.php" method="post">
        <input type="hidden" name="compte_id" value="<?php echo $compte->getId();?>">
        <input type="submit" name="delete" value="Supprimer le compte">
      </form>
      <!-- END FORMULAIRE SUPPRESSION COMPTE -->

    </div>

    <?php
    }
    ?>

    <hr>

    <h2>Effectuer un virement</h2>

    <!-- FORMULAIRE POUR VIREMENT -->
    <form action="../controller/virement.php" method="post">
      <p>
      <label for="sum">Somme à transférer</label><br>
      <input type="text" id="sum" name="sum" placeholder="Somme à transférer"> €<br>
      <label for="account1">Compte à débiter</label><br>
      <input type="text" id="account1" name="account1" placeholder="N° du compte à débiter"><br>
      <label for="account2">Compte à créditer</label><br>
      <input type="text" id="account2" name="account2" placeholder="N° du compte à créditer"><br>
      <input type="submit" value="Effectuer le virement">
      </p>
    </form>
    <!-- END FORMULAIRE POUR VIREMENT -->

    <h2>Crier un compte</h2>

    <!-- FORMULAIRE CREATION DE COMPTE -->
    <form action="../controller/addCompte.php" method="post">
      <input type="text" name="name" placeholder="Entrez un nom de compte">
      <input type="submit" value="Créer un compte">
    </form>
    <!-- END FORMULAIRE CREATION DE COMPTE -->

  </body>
</html>