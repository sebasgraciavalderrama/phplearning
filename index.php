<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>"Title of the document"</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php
    $x= 1;
    while ($x < 5) {
      echo "Hi there while!<br>";
      $x++;
    }
    $x = 5;
    echo "<br> ------ <br>";
    do {
      echo "Hi there do-while!<br>";
      $x++;
    } while ($x < 10);
    echo "<br> ------ <br>";
    for ($i=0; $i < 5; $i++) {
      echo "Hi there for!<br>";
    }
    echo "<br> ------ <br>";
    $array = array("Jose", "Manuel", "John" );
    foreach ($array as $loopdata) {
      echo "My name is ".$loopdata."<br>";
      echo "<br>"
    }

   ?>
  </body>
</html>
