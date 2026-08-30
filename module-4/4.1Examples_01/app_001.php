<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> substr() </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # substr() - Sub String
      $string_01 = 'This is a great day to work with PHP.';

      $subString = substr($string_01, 0, 5); # This
      echo($subString . '<br />');
      echo('-------------------------------<br />');

      $subString = substr($string_01, -4); # PHP.
      echo($subString . '<br />');
      echo('-------------------------------<br />');

      echo($string_01 . '<br />');
      echo('-------------------------------<br />');

    ?>

  </body>

</html>