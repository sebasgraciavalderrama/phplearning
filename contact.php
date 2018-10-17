<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>"Contact.php"</title>
  </head>
  <body>
    <ul>
        <li><a href="sessions.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>

    <?php
    echo $_SESSION['username']."<br>";
    ?>

  </body>
</html>
