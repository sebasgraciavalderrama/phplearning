<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="num1" placeholder="Number 1">
      <input type="text" name="num2" placeholder="Number 2">
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Substract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <br>
      <button type="submit" value="submit" name="submit">Calculate</button>
    </form>
    <p>The answer is: </p>
    <?php
      if (isset($_GET['submit'])) {
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];
        switch ($operator) {
          case "None":
            echo "Error, you didn't select an operator";
            break;
          case "Add":
          echo $result1+$result2;
            break;
          case "Substract":
            echo $result1-$result2;
            break;
          case "Multiply":
            echo $result1*$result2;
            break;
          case "Divide":
            echo $result1/$result2;
            break;
        }
      }
     ?>

  </body>
</html>
