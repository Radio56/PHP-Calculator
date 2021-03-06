<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Number Cruncher</title>
  </head>
  <body style="background-color:lightblue;">
<p style="font-size:50px;">Number Cruncher</p>
    <!--This is the calculater we see on the website-->
    <form method="get">
      <input type="text" name="num1" placeholder="Number 1">
      <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
      </select>
      <input type="text" name="num2" placeholder="Number 2">
      <br>
      <button type="submit" name="submit">Crunch</button>
    </form>

    <p>The answer is:</p>
    <?php
      //This is the PHP script that calculates in the background

      //First we check if the button has been clicked
      if (isset($_GET['submit'])) {
        //Then we get all the data from the form
        $result1 = $_GET['num1'];
        $result2 = $_GET['num2'];
        $operator = $_GET['operator'];

        //Here we check which operator the user chose, and we perform the calculation
        switch ($operator) {
          case "None":
            echo "You need to select an operator!";
            break;
          case "Add":
            echo $result1 + $result2;
            break;
          case "Subtract":
            echo $result1 - $result2;
            break;
          case "Multiply":
            echo $result1 * $result2;
            break;
          case "Divide":
            echo $result1 / $result2;
            break;
          default:
            echo "Error!";
            break;
        }
      }
    ?>
  </body>
</html>
