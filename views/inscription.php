
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

    <!-- FORMULAIRE INSCRIPTION -->
    <h1>Formulaire d'inscription</h1>

    <form action="../controller/addUser.php" method="post">
        <p>
            <label for="pseudo">Pseudo :</label><br>
            <input type="text" name="pseudo" id="pseudo" required="required" autofocus placeholder="ex : Youcef" /><br>

            <label for="pass">Mot de passe :</label><br>
            <input type="password" name="password" id="pass" /><br>

<!--             <label for="passverifie">Retapez votre mot de passe :</label><br>
            <input type="password" name="passverifie" id="passverifie" /><br> -->

            <label for="email">Adresse e-mail :</label><br>
            <input type="email" name="email" id="email" placeholder="exemple@mail.fr" /><br>

            <input type="submit" value="Inscription">
        </p>
    </form>
    <!-- END FORMULAIRE INSCRIPTION -->
  </body>
</html>