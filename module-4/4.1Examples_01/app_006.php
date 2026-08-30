<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> strtolower(), strtoupper(), ucwords() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # strtolower(), strtoupper(), ucwords() - Case Format
      $string_01 = 'This is a great day to work with PHP.';
      $breakLine = '<br />';

      echo($string_01 . $breakLine . $breakLine);
      echo(strtolower($string_01) . $breakLine);
      echo(strtoupper($string_01) . $breakLine);
      echo(ucwords($string_01) . $breakLine . $breakLine);

      # No original string change
      echo($string_01);

    ?>

  </body>

</html>