<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 009 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      $var1 = 72;

      echo("var1 $var1 <br />\n");
      echo("var1++ " . $var1++ . " <br />\n");
      echo("var1 = $var1 <br />\n");

      echo("<br />\n");

      echo("var1 $var1 <br />\n");
      echo("++var1 " . ++$var1 . " <br />\n");
      echo("var1 = $var1 <br />\n");

      echo("<br />\n");

      echo("var1 = $var1 <br />\n");
      echo("var1-- = " . $var1-- . " <br />\n");
      echo("var1 = $var1 <br />\n");

      echo("<br />\n");

      echo("var1 = $var1 <br />\n");
      echo("--var1 = " . --$var1 . " <br />\n");
      echo("var1 = $var1 <br />\n");

    ?>

  </body>

</html>