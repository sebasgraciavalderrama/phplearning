<?php
include 'includes/dbh.pdo.inc.php';

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $object = new Dbh;
      $object->connect();
     ?>

  </body>
</html>
