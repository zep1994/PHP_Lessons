<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
      //create a variable
      $characterName = "Thomas";
      $characterAge = 35;

      //Echo will write out to page
      echo "<h1>$characterName's site</h1>";
      //can change variable in the middle of script
      $characterAge = 5;
      echo "<p>Here is his age: $characterAge<br />";

      //DATA TYPES
      $phrase = "";

      //MANIPULATE STRING
      $phrase = "Tom is a man who says a lot of things";
      // echo strtolower($phrase);
      // echo strlen("Tom is a man who s");
      echo substr($phrase, 17);

     ?>
</body>
</html>
