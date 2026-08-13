<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 005 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

    // Data Types
    // Integers - -2,147,483,648 to 2,147,483,647
    $myInt1 = 2147483647;
    $myInt2 = -2147483648;
    echo($myInt1 . '<br />');
    echo($myInt2 . '<br />');

    // Floating-Point - 1.7E-308 - 1.7E+308 - Holds Approximate values
    $mtFloat1 = 1234.4321;
    echo($mtFloat1 + $mtFloat1 . '<br />');
    echo(($mtFloat1 + $mtFloat1 + $mtFloat1) . '<br />');

    // Strings ' ' and " "
    $string1 = "Cardinals";
    $string2 = "Red Sox";
    echo($string1 . '<br />');
    echo($string2 . '<br />');
 
    // Other types

    // Booleans - true or false
    // False - false, 0, 0.0, "0"
    // True - true if not false

    // Arrays

    // Objects

    ?>

  </body>

</html>