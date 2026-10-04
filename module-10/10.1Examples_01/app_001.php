<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 001 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # JSON stands for JavaScript Object Notation
      # Syntax for storing and exchanging data.

      # The JSON format is a text-based format
      # The data can be sent to and from a server

      # The json_encode() function is used to encode a value to JSON format.

      $newLine = '<br />';

      $teamsAndCities = array('Red Sox' => 'Boston', 'Pirates' => 'Pittsburgh', 'Giants' => 'New York', 'Athletics' => 'Philadelphia', 
                               'White Sox' => 'Chicago', 'Tigers' => 'Detroit', 'Cubs' => 'Chicago', 'Braves' => 'Boston', 'Phillies' => 'Philadelphia', 
                               'Robins' => 'Brooklyn', 'Reds' => 'Cincinnati', 'Indians' => 'Cleveland', 'Yankees' => 'New York', 'Senators' => 'Washington', 
                               'Nationals' => 'Washington', 'Cardinals' => 'St. Louis', 'Dodgers' => 'Brooklyn', 'Browns' => 'St. Louis', 'Orioles' => 'Baltimore', 
                               'Mets' => 'New York', 'Royals' => 'Kansas City', 'Brewers' => 'Milwaukee', 'Padres' => 'San Diego', 'Twins' => 'Minnesota', 
                               'Blue Jays' => 'Toronto', 'Marlins' => 'Florida', 'Diamondbacks' => 'Arizona', 'Angels' => 'Anaheim', 'Astros' => 'Houston', 
                               'Rockies' => 'Colorado', 'Rays' => 'Tampa Bay', 'Rangers' => 'Rangers');

      # This example shows how to encode an associative array into a JSON object

      echo json_encode($teamsAndCities);

    ?>

  </body>

</html>