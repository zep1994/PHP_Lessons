<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <!-- //CREATE A FORM -->
  <form action="site.php" method="get">
     Num1: <input type="number" name="num1" />
     Num2: <input type="number" name="num2" />
     <p><input type="submit" /></p>
  </form>

    <?php

      Answer: echo $_GET["num1"] + $_GET["num2"];

     ?>


</body>
</html>
