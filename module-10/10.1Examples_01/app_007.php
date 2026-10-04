<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 007 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # This example shows how to loop through values in a PHP associative array

      $newLine = '<br />';

      $jsonobj = '{"Red Sox":"Boston","Pirates":"Pittsburgh","Giants":"New York","Athletics":"Philadelphia","White Sox":"Chicago","Tigers":"Detroit","Cubs":"Chicago",
                   "Braves":"Boston","Phillies":"Philadelphia","Robins":"Brooklyn","Reds":"Cincinnati","Indians":"Cleveland","Yankees":"New York","Senators":"Washington",
                   "Nationals":"Washington","Cardinals":"St. Louis","Dodgers":"Brooklyn","Browns":"St. Louis","Orioles":"Baltimore","Mets":"New York","Royals":"Kansas City",
                   "Brewers":"Milwaukee","Padres":"San Diego","Twins":"Minnesota","Blue Jays":"Toronto","Marlins":"Florida","Diamondbacks":"Arizona","Angels":"Anaheim",
                   "Astros":"Houston","Rockies":"Colorado","Rays":"Tampa Bay","Rangers":"Rangers"}';

      $jsonArray = json_decode($jsonobj, true);

      echo($newLine);

      foreach($jsonArray as $key => $value) {

        echo $key . " => " . $value . $newLine;
      }

    ?>

  </body>

</html>