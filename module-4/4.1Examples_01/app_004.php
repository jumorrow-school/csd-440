<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> echo() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # echo() - no ()s - outputs information to browser
      $string_a = 'String a';
      $string_b = 'String b';
      $string_c = 'String c';
      $breakLine = '<br />';

      $message = sprintf("The strings are 1 %s, 2 %s, 3 %s. %s", $string_a, $string_b, $string_c, $breakLine);
      echo $message;
      echo '-------------------------------------------------------------------' . $breakLine ;
      echo sprintf("The strings are 1 %s, 2 %s, 3 %s. %s", $string_a, $string_b, $string_c, $breakLine);

    ?>

  </body>

</html>