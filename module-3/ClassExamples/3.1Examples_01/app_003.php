<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 003 </title>
    <meta charset='utf-8'>

    <?php
      require('fun_001.php');
    ?>

  </head>

  <body>

    <?php

      # Scope - Assign return
      $int_01 = 6;
      $int_02 = 12;
      $int_03 = 53;
      $int_04 = 723;

      # Assign return value
      $int_01 = addTwo($int_01);
      $int_02 = addTwo($int_02);
      $int_03 = addTwo($int_03);
      $int_04 = addTwo($int_04);

      echo($int_01 . '<br />');
      echo($int_02 . '<br />');
      echo($int_03 . '<br />');
      echo($int_04 . '<br />');
    ?>

  </body>

</html>