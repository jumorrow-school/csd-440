<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 002 </title>
    <meta charset='utf-8'>

    <?php

      $newLine = '<br />';

      # Declare a class
      class MyFirstClass{

        private $var_01 = 'var_01 value';
        private $var_02 = 'var_02 value';
        private $var_03 = 'var_03 value';
        private $var_04 = 'var_04 value';

        function getVar_01(){

          return $this->var_01;
        }

        function getVar_02(){

          return $this->var_02;
        }

        function getVar_03(){

          return $this->var_03;
        }

        function getVar_04(){

          return $this->var_04;
        }
      }

    ?>

  </head>

  <body>

    <?php

      # Create an instance
      $myClass = new MyFirstClass;

      # Getters
      echo("{$myClass->getVar_01()}" . $newLine);
      echo("{$myClass->getVar_02()}" . $newLine);
      echo("{$myClass->getVar_03()}" . $newLine);
      echo("{$myClass->getVar_04()}" . $newLine);

    ?>

  </body>

</html>