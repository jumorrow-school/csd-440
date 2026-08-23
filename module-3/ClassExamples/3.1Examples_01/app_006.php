<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 006 </title>
    <meta charset='utf-8'>

    <?php
      require('fun_001.php');
    ?>

  </head>

  <body>

    <?php

      # Pass-By-Reference
      $int_01 = 6;

      echo($int_01 . '<br />');
      passByRef($int_01);

      echo($int_01 . '<br />');
      passByRef($int_01);

      echo($int_01 . '<br />');
      passByRef($int_01);

      echo($int_01 . '<br />');

    ?>

  </body>

</html>