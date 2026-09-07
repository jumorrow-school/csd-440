<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 005 </title>
    <meta charset='utf-8'>

    <?php

      $newLine = '<br />';

      # Declare a class
      class MyFirstClass{
  
        public $classNewLine = '<br />';

        # Constructor
        public function __construct(){

          $arguments = func_get_args();
          $numberOfArguments = func_num_args();

          if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
             call_user_func_array(array($this, $function), $arguments);
          }
          else{

            echo('0 Params' . $this->classNewLine);
          }
        }

        public function __construct1($param1){

          echo('1 Param' . $this->classNewLine);
        }

        public function __construct2($param1, $param2){

          echo('2 Params' . $this->classNewLine);
        }

        public function __construct3($param1, $param2, $param3){

          echo('3 Params' . $this->classNewLine);
        }

        public function __construct4($param1, $param2, $param3, $param4){

          echo('4 Params' . $this->classNewLine);
        }
      }

    ?>

  </head>

  <body>

    <?php

      # Create an instance
      $myClass = new MyFirstClass;
      $myClass_01 = new MyFirstClass('param 1');
      $myClass_02 = new MyFirstClass('param 1', 'param 2');
      $myClass_03 = new MyFirstClass('param 1', 'param 2', 'param 3');
      $myClass_04 = new MyFirstClass('param 1', 'param 2', 'param 3', 'param 4');

    ?>

  </body>

</html>