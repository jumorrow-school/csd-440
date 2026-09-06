<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> Indexed Arrays </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      $newLine = "<br />";

      # indexed array
      $worldSeriesTeams = array("Red Sox", "Pirates", "Giants", "Athletics", "White Sox", "Tigers", "Cubs", "Braves", "Phillies", "Robins", "Reds",
                    "Indians", "Yankees", "Senators", "Nationals", "Cardinals", "Dodgers", "Browns", "Orioles", "Mets", "Royals",
                    "Brewers", "Padres", "Twins", "Blue Jays", "Marlins", "Diamondbacks", "Angels", "Astros", "Rockies", "Rays",
                    "Rangers");

      echo($worldSeriesTeams[0] . $newLine);
      echo($worldSeriesTeams[9] . $newLine);
      echo($worldSeriesTeams[15] . $newLine);

      $arrlength = count($worldSeriesTeams);

      echo($newLine . 'Print all teams.' . $newLine);

      for($x = 0; $x < $arrlength; $x++) {

        echo $worldSeriesTeams[$x];
        echo $newLine;
      }
    ?>

  </body>

</html>