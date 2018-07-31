<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>P6ex2</title>
  </head>
  <body>
    <?php
        if (isset($_GET['age']))//on verifie que 'age' existe
        {
            echo $_GET['age']. 'valide !';//si oui on l'affiche
        } else {
            echo 'renseigner votre age !';//si non il faut 'renseigner votre age'
        }
        ?>
  </body>
</html>
