<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> Associated Arrays </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      $newLine = "<br />";

      # indexed array to be used to fill associated array (key)
      $worldSeriesTeams = array("Red Sox", "Pirates", "Giants", "Athletics", "White Sox", "Tigers", "Cubs", "Braves", "Phillies", "Robins", "Reds",
                    "Indians", "Yankees", "Senators", "Nationals", "Cardinals", "Dodgers", "Browns", "Orioles", "Mets", "Royals",
                    "Brewers", "Padres", "Twins", "Blue Jays", "Marlins", "Diamondbacks", "Angels", "Astros", "Rockies", "Rays",
                    "Rangers");

      # indexed array to be used to fill associated array (value)
      $worldSeriesCities = array("Boston", "Pittsburgh", "New York", "Philadelphia", "Chicago", "Detroit", "Chicago", "Boston", "Philadelphia", "Brooklyn", "Cincinnati",
                    "Cleveland", "New York", "Washington", "Wasnington", "St. Louis", "Brooklyn", "St. Louis", "Baltimore", "New York", "Kansas City",
                    "Milwaukee", "San Diego", "Minnesota", "Toronto", "Florida", "Arizona", "Anaheim", "Houston", "Colorado", "Tampa Bay",
                    "Rangers");

      # Declase empty associated array
      $teamsAndCities = array();

      # Gets leangt of worldSeriesTeams array
      $arrlength = count($worldSeriesTeams);
      $arrTest = count($worldSeriesCities);

      # If both array sizes are the same, populate the $teamsAndCities array
      if($arrlength == $arrTest){

        # Add elements sets to array
        for($x = 0; $x < $arrlength; $x++) {

          # Key from worldSeriesTeams
          # Value from worldSeriesCities
          $teamsAndCities[$worldSeriesTeams[$x]] = $worldSeriesCities[$x];
        }

        # Single displays
        echo('Red Sox => ' . $teamsAndCities['Red Sox'] . $newLine);
        echo('Athletics => ' . $teamsAndCities['Athletics'] . $newLine);
        echo('Tigers => ' . $teamsAndCities['Tigers'] . $newLine);
        echo('Reds => ' . $teamsAndCities['Reds'] . $newLine);
        echo('Cardinals => ' . $teamsAndCities['Cardinals'] . $newLine);
        echo('Angels => ' . $teamsAndCities['Angels'] . $newLine . $newLine);

        $arrlength = count($teamsAndCities);

        # Display using 'for' loop
        for($x = 0; $x < $arrlength; $x++) {

          # teamsAndCities holding pairs
          # worldSeriesTeams used as the keys for diapaly
          echo $worldSeriesTeams[$x] . ' => ' . $teamsAndCities[$worldSeriesTeams[$x]];

          echo $newLine;
        }
      }
      # If arrays are not the same in length, display problem
      else{

        echo('Houston we have a problem.');
      }
    ?>

  </body>

</html>