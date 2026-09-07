<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 001 </title>
    <meta charset='utf-8'>

    <?php

      $newLine = '<br />';

      # Declare a class
      class MyFirstClass{

        public $var_01 = 'var_01 value';
        public $var_02 = 'var_02 value';
        private $var_03 = 'var_03 value';
        private $var_04 = 'var_04 value';
      }

    ?>

  </head>

  <body>

    <?php

      # Create an instance
      $myClass = new MyFirstClass;

      echo("{$myClass->var_01}" . $newLine);
      echo("{$myClass->var_02}" . $newLine);
      # Error - $myClass->var_03 is private
      echo("{$myClass->var_03}" . $newLine);
      # Error - $myClass->var_04 is private
      echo("{$myClass->var_04}" . $newLine);

    ?>

  </body>

</html>