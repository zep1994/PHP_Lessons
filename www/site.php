<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <!-- //CREATE A FORM -->
  <form action="site.php" method="post">
     <p>Your name: <input type="text" name="name" /></p>
     <p>Your age: <input type="text" name="age" /></p>
     <p><input type="submit" /></p>
  </form>

    <?php

      //echo htmlspecialchars($_POST['name']);
      echo $_POST["name"];

     ?>


</body>
</html>
