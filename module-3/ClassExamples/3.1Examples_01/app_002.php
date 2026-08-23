<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 002 </title>
    <meta charset='utf-8'>

    <?php
      require('fun_001.php');
    ?>

  </head>

  <body>

    <?php

      # Function output
      $firstString1 = 'St. Louis ';
      $secondString1 = 'Browns';

      $firstString2 = 'Washington ';
      $secondString2 = 'Senators';

      $firstString3 = 'Cincinnati ';
      $secondString3 = 'Reds';

      $firstString4 = 'Chicago ';
      $secondString4 = 'Cubs';

      outputStr($firstString1, $secondString1);
      outputStr($firstString2, $secondString2);
      outputStr($firstString3, $secondString3);
      outputStr($firstString4, $secondString4);
    ?>

  </body>

</html>