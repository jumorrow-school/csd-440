<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 004 </title>
    <meta charset='utf-8'>

    <?php
      require('fun_001.php');
    ?>

  </head>

  <body>

    <?php

      # Scope - No return
      $int_01 = 6;
      $int_02 = 12;
      $int_03 = 53;
      $int_04 = 723;

      addTwoScope($int_01);
      addTwoScope($int_02);
      addTwoScope($int_03);
      addTwoScope($int_04);

      # Note no change
      echo($int_01 . '<br />');
      echo($int_02 . '<br />');
      echo($int_03 . '<br />');
      echo($int_04 . '<br />');

    ?>

  </body>

</html>