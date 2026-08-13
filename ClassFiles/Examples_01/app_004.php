<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 004 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

     // Constant (final)
     define('valueName', 'John');
     define('valueInt', 23);

     // concatenation operator, more in chapter 4
     echo(valueName . '<br />');
     echo(valueInt . '<br />');

     // Errors
     #valueName = "Tom"
     #valueInt = "44"

     // Errors, variable identifiers are case sensitive
     #echo(valuename . "<br />");
     #echo(valueint . "<br />");

    ?>

  </body>

</html>