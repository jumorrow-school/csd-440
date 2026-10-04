<!DOCTYPE html>
<html lang='en'>
    <!--
      Professor Darrell Payne
      Bellevue University
     -->
  <head>

    <title> App 004 </title>
    <meta charset='utf-8'>

  </head>

  <body>

    <?php

      # This example decodes JSON data into a PHP object
      # Prints some of the data

      $newLine = '<br />';

      $jsonobj = '{"Red Sox":"Boston","Pirates":"Pittsburgh","Giants":"New York","Athletics":"Philadelphia","White Sox":"Chicago","Tigers":"Detroit","Cubs":"Chicago",
                   "Braves":"Boston","Phillies":"Philadelphia","Robins":"Brooklyn","Reds":"Cincinnati","Indians":"Cleveland","Yankees":"New York","Senators":"Washington",
                   "Nationals":"Washington","Cardinals":"St. Louis","Dodgers":"Brooklyn","Browns":"St. Louis","Orioles":"Baltimore","Mets":"New York","Royals":"Kansas City",
                   "Brewers":"Milwaukee","Padres":"San Diego","Twins":"Minnesota","Blue Jays":"Toronto","Marlins":"Florida","Diamondbacks":"Arizona","Angels":"Anaheim",
                   "Astros":"Houston","Rockies":"Colorado","Rays":"Tampa Bay","Rangers":"Rangers"}';

      $jsonObject = json_decode($jsonobj);

      echo($newLine);

      echo $jsonObject->Pirates;
      echo($newLine);
      echo $jsonObject->Cardinals;
      echo($newLine);
      echo $jsonObject->Robins;

      echo($newLine);
      echo($newLine);

      echo $jsonObject->Rangers;
      echo($newLine);
      echo $jsonObject->Rockies;
      echo($newLine);
      echo $jsonObject->Browns;
      echo($newLine);
    ?>

  </body>

</html>