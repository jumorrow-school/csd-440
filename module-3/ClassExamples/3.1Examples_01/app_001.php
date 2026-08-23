<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 001 </title>
    <meta charset='utf-8'>

    <?php
      require('fun_001.php');
    ?>

  </head>

  <body>

    <?php

      # Function return
      $firstString1 = 'St. Louis ';
      $secondString1 = 'Cardinals';

      $firstString2 = 'Philadelphia ';
      $secondString2 = 'Athletics';

      $firstString3 = 'New York ';
      $secondString3 = 'Giants';

      $firstString4 = 'Boston ';
      $secondString4 = 'Braves';

      echo(strcat($firstString1, $secondString1) . '<br />');
      echo(strcat($firstString2, $secondString2) . '<br />');
      echo(strcat($firstString3, $secondString3) . '<br />');
      echo(strcat($firstString4, $secondString4) . '<br />');

    ?>

  </body>

</html>