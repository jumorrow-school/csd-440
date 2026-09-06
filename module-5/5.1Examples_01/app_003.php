<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> Create Multiple Dimension Table </title>
    <meta charset='utf-8'>

    <?php

      # Create random number 
      function getNumber(){

        return rand(3, 8);
      }

      # Print Multiple Dimension Table
      # Number of rows and cols for the table
      function printTable($row, $col){

        switch(rand(1, 9)){

          case 1:
          $bgcolor='Tomato';
          break;
          case 2:
          $bgcolor='Green';
          break;
          case 3:
          $bgcolor='Orange';
          break;
          case 4:
          $bgcolor='Red';
          break;
          case 5:
          $bgcolor='LightGray';
          break;
          case 6:
          $bgcolor='Violet';
          break;
          case 7:
          $bgcolor='MediumSeaGreen';
          break;
          case 8:
          $bgcolor='DodgerBlue';
          break;
          case 9:
          $bgcolor='SlateBlue';
          break;
        }

        print("<table border='1' bgcolor='$bgcolor'>\n");

        for($i = 1; $i <= $row; $i++){

          print("<tr>\n");

          for($j = 1; $j <= $col; $j++){

            print("<td>\n");
            print("Row $i Col $j");
            print("</td>\n");

          }

          print("</tr>\n");
        }

        print("</table\n");

      }
    ?>

  </head>

  <body>

    <?php

      $newLine = "<br />";

      # printTable parameters- Numbers of rows for each of the four tables
      $valueRows = array(getNumber(), getNumber(), getNumber(), getNumber());
      # printTable parameters - Numbers of cols for each of the four tables
      $valueCols = array(getNumber(), getNumber(), getNumber(), getNumber());

      # Sort to print smaller tables first
      sort($valueRows);
      sort($valueCols);

      for($i = 0; $i < count($valueRows) && $i < count($valueCols); $i++){

        # invoke function to print a table each iteration
        # based on the array sizes
        printTable($valueRows[$i], $valueCols[$i]);
        # print <br /> between each table
        print($newLine . $newLine);
      }

    ?>

  </body>

</html>