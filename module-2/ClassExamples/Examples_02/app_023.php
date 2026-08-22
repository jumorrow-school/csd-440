<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 023 </title>
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
            for($i = 0; $i < 8; ++$i){

              ?>
              <tr>
              <?php
              for($j = 0; $j < 8; ++$j){

                ?>
                <td>
                <?php
                echo(rand(1, 6));
                ?>
                </td>
                <?php
              }
              ?>
              </tr>
              <?php
            }
          ?>
        </tbody>
      </table>

  </body>

</html>