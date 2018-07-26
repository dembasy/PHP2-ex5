<?php
$genderM = false;
$genderW = true;
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>exercice</title>
  </head>
  <body>
    <p><?php
    if ($genderM === true) {
      echo  'C\'est un développeur !!!';
    } else {
      echo 'C\'est une développeuse !!!';
    }
      ?></p>
  </body>
</html>
