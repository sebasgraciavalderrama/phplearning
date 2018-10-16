<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> Pruebas PHP</title>
  </head>
  <body>
    <form acion="site.php" method="post">
      <input type="text" name="student"><br>
      <input type="submit">
    </form>
    <?php
      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
      //echo $grades[$_POST["student"]];
      function cubo($num){
        return $num*$num*$num;
      }
      function getMax($a, $b){
        if($a>$b){
          return $a;
        }elseif($b>$a){
            return $b;
        }elseif($a==$b){
          return 0;
        }
      }
      include "header.html"?>
      <p> Hello world </p>
      <?php include "footer.html"?>

  </body>
</html>
