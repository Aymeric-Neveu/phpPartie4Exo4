<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $firstNumber = rand(1,10);
    $secondNumber = rand(1,10);
    function TwoVariable($firstNumber,$secondNumber)
    {
    switch(true){
      case $firstNumber > $secondNumber:
      return 'Le premier nombre est plus grand';
      break;
      case $firstNumber < $secondNumber:
      return 'Le premier nombre est plus petit';
      break;
      case $firstNumber == $secondNumber:
      return 'Les deux nombres sont identiques';
      break;
    }
    }
    ?>
    <p><?php
    echo TwoVariable($firstNumber,$secondNumber);
    ?></p>
    <p><?php
    echo $firstNumber .' '. $secondNumber;
    ?></p>
  </body>
</html>
