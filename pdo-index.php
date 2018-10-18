<?php
include 'includes/dbh.pdo.inc.php';
include 'includes/user.pdo.inc.php'; // both controller and view in this excercise

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $object = new User;
      echo $object->getUsersWithCountCheck();
     ?>

  </body>
</html>
