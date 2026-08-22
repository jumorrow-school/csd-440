<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 021 </title>
    <meta charset='utf-8'>

  </head>

  <body>

      <table border='1' width='400'>
        <caption>
            Simple Table - Random Numbers!
        </caption>
        <thead>
          <tr>
            <td colspan='8'>
              Numbers 1 - 6
            </td>
          </tr>
        </thead>

        <tbody>
          <?php

            $i = 0;
            $j = 0;

            while($i < 8){

              $j = 0;
              echo('<tr>');

              while($j < 8){

                echo('<td>');
                echo(rand(1, 6));
                echo('</td>');

                ++$j;
              }
              echo('</tr>');
              ++$i;
            }
          ?>
        </tbody>
      </table>

  </body>

</html>