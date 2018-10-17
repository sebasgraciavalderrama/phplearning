<!--//https://www.w3schools.com/php/php_sessions.asp
When you work with an application, you open it, do some changes, and then you close it. This is much like a Session.
The computer knows who you are. It knows when you start the application and when you end.
But on the internet there is one problem: the web server does not know who you are or what you do, because the HTTP address doesn't maintain state.
Session variables solve this problem by storing user information to be used across multiple pages (e.g. username, favorite color, etc).
By default, session variables last until the user closes the browser.
So; Session variables hold information about one single user, and are available to all pages in one application.
Tip: If you need a permanent storage, you may want to store the data in a database.
-->
<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>"Title of the document"</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <ul>
        <li><a href="sessions.php">HOME</a></li>
        <li><a href="contact.php">CONTACT</a></li>
    </ul>

  <?php
  $_SESSION['username'] = "sebasgracia94";//REMOVE COMMENTS TO TEST THAT YOU ARE NOT LOGGED IN!!!
  echo $_SESSION['username']."<br>";
  if(!isset($_SESSION['username'])){
    echo "You are not logged in!";
  }else{
    echo "You are now logged in!";
  }

   ?>
  </body>
</html>
