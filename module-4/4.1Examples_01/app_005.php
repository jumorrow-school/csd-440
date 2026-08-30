<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> strpos() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # strpos() - returns position of the first occurrence
      $stringValue = '987659873214563';
      $breakLine = '<br />';

      echo('987659873214563' . $breakLine . $breakLine);
      echo('First Pos - 987 = ' . strpos($stringValue, '987', 0) . $breakLine);
      echo('Second Pos - 987 = ' . strpos($stringValue, '987', 5) . $breakLine);
      echo('First Pos - 321 = ' . strpos($stringValue, '321', 0) . $breakLine);
      echo('First Pos - 777 = ' . strpos($stringValue, '777', 0) . $breakLine);
      echo('First Pos - 214 = ' . strpos($stringValue, '214', 0) . $breakLine);

    ?>

  </body>

</html>