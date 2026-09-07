<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 004 </title>
    <meta charset='utf-8'>

    <?php

      $newLine = '<br />';

      # Declare a class
      class MyFirstClass{

        private $var_01 = 'var_01 value';
        private $var_02 = 'var_02 value';

        # Constructor
        function __construct(){

          $this->var_01 = 'Starting Constructor Value 01';
          $this->var_02 = 'Starting Constructor Value 02';
        }

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

      $myClass->setVar_01('New Value');
      $myClass->setVar_02('New Value');

      echo($newLine);
      echo("{$myClass->getVar_01()}" . $newLine);
      echo("{$myClass->getVar_02()}" . $newLine);


    ?>

  </body>

</html>