<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>"Title of the document"</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php

    $array = array("Jose", "Manuel", "John", "Mariane");
    echo $array[0];

    $data1 = "Daniel";
    $data2 = "Juan";
    $data3 = "Panel";
    $data4 = "Var";
    $data5 = "Basic";


    foreach ($array as $loopdata) {
      echo "My name is ".$loopdata."<br>";
      echo "<br>"
    }

   ?>
  </body>
</html>
