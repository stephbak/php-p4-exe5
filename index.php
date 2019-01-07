<?php
$string = ' ans.';
$age = 37;
$string2 = ' c\'est mon chiffre porte bonheur';
function concatNumberText($number, $text){
  return $number . $text;
}
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <title>php partie4</title>
  </head>
  <body>
 <p><?= concatNumberText($age, $string) ?></p>
 <p><?= concatNumberText($age, $string2) ?></p>
  </body>
</html>
