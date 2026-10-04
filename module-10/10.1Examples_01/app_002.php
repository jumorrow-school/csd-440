<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 002 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      $newLine = '<br />';

      $worldSeriesTeams = array("Red Sox", "Pirates", "Giants", "Athletics", "White Sox", "Tigers", "Cubs", "Braves", "Phillies", "Robins", "Reds",
                    "Indians", "Yankees", "Senators", "Nationals", "Cardinals", "Dodgers", "Browns", "Orioles", "Mets", "Royals",
                    "Brewers", "Padres", "Twins", "Blue Jays", "Marlins", "Diamondbacks", "Angels", "Astros", "Rockies", "Rays",
                    "Rangers");

      $worldSeriesCities = array("Boston", "Pittsburgh", "New York", "Philadelphia", "Chicago", "Detroit", "Chicago", "Boston", "Philadelphia", "Brooklyn", "Cincinnati",
                    "Cleveland", "New York", "Washington", "Washington", "St. Louis", "Brooklyn", "St. Louis", "Baltimore", "New York", "Kansas City",
                    "Milwaukee", "San Diego", "Minnesota", "Toronto", "Florida", "Arizona", "Anaheim", "Houston", "Colorado", "Tampa Bay",
                    "Rangers");

      # This example shows how to encode indexed arrays into JSON arrays

      echo json_encode($worldSeriesTeams);

      echo($newLine);
      echo($newLine);

      echo json_encode($worldSeriesCities);

    ?>

  </body>

</html>