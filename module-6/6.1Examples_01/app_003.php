<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 003 </title>
    <meta charset='utf-8'>

    <?php

      $newLine = '<br />';

      # Declare a class
      class MyFirstClass{

        private $var_01 = 'var_01 value';
        private $var_02 = 'var_02 value';

        function getVar_01(){

          return $this->var_01;
        }

        function setVar_01($newValue){

          $this->var_01 = $newValue;
        }

        function getVar_02(){

          return $this->var_02;
        }

        function setVar_02($newValue){

          $this->var_02 = $newValue;
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

      $myClass->setVar_01('New Value 1');
      $myClass->setVar_02('New Value 2');

      echo($newLine);
      echo("{$myClass->getVar_01()}" . $newLine);
      echo("{$myClass->getVar_02()}" . $newLine);


    ?>

  </body>

</html>