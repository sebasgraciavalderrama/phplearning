<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="calc.php" method="POST">
      <input type="text" name="num1" >
      <input type="text" name="num2" >
      <select name="cal">
        <option value="add">Add</option>
        <option value="subs">Substract</option>
        <option value="mult">Multiply</option>
        <option value="divide">Divide</option>
      </select>
      <button type="submit">Calculate</button>
    </form>
  </body>
</html>
