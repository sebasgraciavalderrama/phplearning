<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>"Title of the document"</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php

      function newCalc($x){
        $newnr = $x * 0.75;
        echo "Here is 75% of what you wrote: ".$newnr;
      }
      $x = 100;
      newCalc($x);
   ?>
  </body>
</html>
