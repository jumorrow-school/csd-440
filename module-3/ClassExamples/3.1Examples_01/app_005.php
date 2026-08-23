<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 005 </title>
    <meta charset='utf-8'>

    <?php
      require('fun_001.php');
    ?>

  </head>

  <body>

    <?php

      # Global
      $int_01 = 6;

      echo($int_01 . '<br />');
      globalAddTwoInt_01();

      echo($int_01 . '<br />');
      globalAddTwoInt_01();

      echo($int_01 . '<br />');
      globalAddTwoInt_01();

      echo($int_01 . '<br />');

    ?>

  </body>

</html>