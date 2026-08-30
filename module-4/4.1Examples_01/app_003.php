<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> sprintf() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # sprintf() - Function that returns a string created by filling the format with the given arguments
      $string_a = 'String a';
      $string_b = 'String b';
      $string_c = 'String c';
      $breakLine = '<br />';

      $message = sprintf("The strings are 1 %s, 2 %s, 3 %s. %s", $string_a, $string_b, $string_c, $breakLine);
      echo($message);
      echo('-------------------------------------------------------------------' . $breakLine);
      echo(sprintf("The strings are 1 %s, 2 %s, 3 %s. %s", $string_a, $string_b, $string_c, $breakLine));

    ?>

  </body>

</html>