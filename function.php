<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User designed functions</title>
  </head>
  <body>
    <?php
    //user defined functions
    //avoid making functions do more than one thing
    $x = 100;
    function newCalc($x){
      $newnr = $x * 0.75;
      echo "Here is 75 percent of what you wrote: ".$newnr;
    }
    newCalc($x);
    //Here we can create other variables and use the same function on them
    echo "<br>";
    echo "<br>";
    $y = 10;
    newCalc($y);
     ?>
  </body>
</html>
