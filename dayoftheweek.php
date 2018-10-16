<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>"Title of the document"</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
  <?php
  $dayOfWeek = date("w");
  switch ($dayOfWeek) {
    case 0:
      echo "It is Sunday!";
    break;
    case 1:
      echo "It is Monday!";
    break;
    case 2:
      echo "It is Tuesday!";
    break;
    case 3:
      echo "<p> It is Wednesday! </p>";
    break;
    case 4:
      echo "It is Thursday!";
    break;
    case 5:
      echo "It is Friday!";
    break;
    case 6:
      echo "It is Saturday!";
    break;
    default:
      echo "ERROR";
    break;
  }



   ?>
  </body>
</html>
