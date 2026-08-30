<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> strlen() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # strlen() - String Length
      $string_01 = 'This is a great day to work with PHP.';

      $subLength = strlen($string_01);
      echo($subLength . '<br />');
      echo('-------------------------------<br />');

      echo(strlen($string_01) . '<br />');
      echo('-------------------------------<br />');

    ?>

  </body>

</html>