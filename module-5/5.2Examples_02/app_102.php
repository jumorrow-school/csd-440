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

      $teamsAndCities = array('Red Sox' => 'Boston', 'Pirates' => 'Pittsburgh', 'Giants' => 'New York', 'Athletics' => 'Philadelphia', 
                               'White Sox' => 'Chicago', 'Tigers' => 'Detroit', 'Cubs' => 'Chicago', 'Braves' => 'Boston', 'Phillies' => 'Philadelphia', 
                               'Robins' => 'Brooklyn', 'Reds' => 'Cincinnati', 'Indians' => 'Cleveland', 'Yankees' => 'New York', 'Senators' => 'Washington', 
                               'Nationals' => 'Wasnington', 'Cardinals' => 'St. Louis', 'Dodgers' => 'Brooklyn', 'Browns' => 'St. Louis', 'Orioles' => 'Baltimore', 
                               'Mets' => 'New York', 'Royals' => 'Kansas City', 'Brewers' => 'Milwaukee', 'Padres' => 'San Diego', 'Twins' => 'Minnesota', 
                               'Blue Jays' => 'Toronto', 'Marlins' => 'Florida', 'Diamondbacks' => 'Arizona', 'Angels' => 'Anaheim', 'Astros' => 'Houston', 
                               'Rockies' => 'Colorado', 'Rays' => 'Tampa Bay', 'Rangers' => 'Rangers');

      $arrlength = count($teamsAndCities);

      foreach($teamsAndCities as $key => $value){

        echo($key . ' => ' . $value . $newLine);
      }

      #ksort($teamsAndCities);
      #arsort($teamsAndCities);

        echo($newLine . $newLine);

      foreach($teamsAndCities as $key => $value){

        echo($key . ' => ' . $value . $newLine);
      }
    ?>

  </body>

</html>