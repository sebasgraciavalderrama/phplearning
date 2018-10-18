<?php
include 'includes/parentclass.inc.php';
include 'includes/newclass.inc.php';
$object = new NewClass;

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo $object->name;

     ?>

  </body>
</html>
