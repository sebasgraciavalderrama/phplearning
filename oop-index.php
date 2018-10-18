<?php
include 'includes/newclass.inc.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $object = new NewClass;
      $object2 = new NewClass;


      $object->getProperty();
      echo "<br>";
      $object->setNewProperty("This is new data!");
      echo "<br>";
      $object->getProperty();
      echo "<br>";


      $object2->getProperty();
      echo "<br>";
      $object2->setNewProperty("This is new data for object 2!");
      echo "<br>";
      $object2->getProperty();
      echo "<br>";
     ?>

  </body>
</html>
