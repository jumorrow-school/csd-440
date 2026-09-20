<html>
<body bgcolor='ffa07a'>

<center>

<?php

  $lineBreak = '<br />';

  $conn = new mysqli("localhost", "student1", "pass", "baseball_01");

  if ($conn->connect_error) {
    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'World Series Year' . $lineBreak;

  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 1903, 'Pirates', 'Pittsburgh')");  
  echo '1903' . $lineBreak;
  echo $lineBreak;  # No World Series in 1904
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'New York', 1905, 'Athletics', 'Philadelphia')");  
  echo '1905' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('White Sox', 'Chicago', 1906, 'Cubs', 'Chicago')");  
  echo '1906' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cubs', 'Chicago', 1907, 'Tigers', 'Detroit')");  
  echo '1907' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cubs', 'Chicago', 1908, 'Tigers', 'Detroit')");  
  echo '1908' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Pirates', 'Pittsburgh', 1909, 'Tigers', 'Detroit')");  
  echo '1909' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Philadelphia', 1910, 'Cubs', 'Chicago')");  
  echo '1910' . $lineBreak;

  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Philadelphia', 1911, 'Giants', 'New York')");  
  echo '1911' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 1912, 'Giants', 'New York')");  
  echo '1912' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Philadelphia', 1913, 'Giants', 'New York')");  
  echo '1913' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Braves', 'Boston', 1914, 'Athletics', 'Philadelphia')");  
  echo '1914' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 1915, 'Phillies', 'Philadelphia')");  
  echo '1915' . $lineBreak;

  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 1916, 'Robins', 'Brooklyn')");  
  echo '1916' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('White Sox', 'Chicago', 1917, 'Giants', 'New York')");  
  echo '1917' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 1918, 'Cubs', 'Chicago')");  
  echo '1918' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Reds', 'Cincinnati', 1919, 'White Sox', 'Chicago')");  
  echo '1919' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Indians', 'Cleveland', 1920, 'Robins', 'Brooklyn')");  
  echo '1920' . $lineBreak;

  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'New York', 1921, 'Yankees', 'New York')");  
  echo '1921' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'New York', 1922, 'Yankees', 'New York')");  
  echo '1922' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1923, 'Giants', 'New York')");  
  echo '1923' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Senators', 'Washington', 1924, 'Giants', 'New York')");  
  echo '1924' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Pirates', 'Pittsburgh', 1925, 'Nationals', 'Wasnington')");  
  echo '1925' . $lineBreak;

  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1926, 'Yankees', 'New York')");  
  echo '1926' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1927, 'Pirates', 'Pittsburgh')");  
  echo '1927' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1928, 'Cardinals', 'St. Louis')");  
  echo '1928' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Philadelphia', 1929, 'Cubs', 'Chicago')");  
  echo '1929' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Philadelphia', 1930, 'Cardinals', 'St. Louis')");  
  echo '1930' . $lineBreak;

  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1931, 'Athletics', 'Philadelphia')");  
  echo '1931' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1932 'Cubs', 'Chicago')");  
  echo '1932' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'New York', 1933, 'Nationals', 'Wasnington')");  
  echo '1933' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1934, 'Tigers', 'Detroit')");  
  echo '1934' . $lineBreak;
  mysqli_query($conn, "INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Tigers', 'Detroit', 1935, 'Cubs', 'Chicago')");  
  echo '1935' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1936, 'Giants', 'New York')");
  echo '1936' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1937, 'Giants', 'New York')");
  echo '1937' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1938, 'Cubs', 'Chicago')");
  echo '1938' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1939, 'Reds', 'Cincinnati')");
  echo '1939' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Reds', 'Cincinnati', 1940, 'Tigers', 'Detroit')");
  echo '1940' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1941, 'Dodgers', 'Brooklyn')");
  echo '1941' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1942, 'Yankees', 'New York')");
  echo '1942' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1943, 'Cardinals', 'St. Louis')");
  echo '1943' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1944, 'Browns', 'St. Louis')");
  echo '1944' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Tigers', 'Detroit', 1945, 'Cubs', 'Chicago')");
  echo '1945' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1946, 'Red Sox', 'Boston')");
  echo '1946' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1947, 'Dodgers', 'Brooklyn')");
  echo '1947' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Indians', 'Cleveland', 1948, 'Braves', 'Boston')");
  echo '1948' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1949, 'Dodgers', 'Brooklyn')");
  echo '1949' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1950, 'Phillies', 'Philadelphia')");
  echo '1950' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1951, 'Giants', 'New York')");
  echo '1951' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1952, 'Dodgers', 'Brooklyn')");
  echo '1952' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1953, 'Dodgers', 'Brooklyn')");
  echo '1953' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'New York', 1954, 'Indians', 'Cleveland')");
  echo '1954' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Brooklyn', 1955, 'Yankees', 'New York')");
  echo '1955' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1956, 'Dodgers', 'Brooklyn')");
  echo '1956' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Braves', 'Milwaukee', 1957, 'Yankees', 'New York')");
  echo '1957' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1958, 'Braves', 'Milwaukee')");
  echo '1958' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Los Angeles', 1959, 'White Sox', 'Chicago')");
  echo '1959' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Pirates', 'Pittsburgh', 1960, 'Yankees', 'New York')");
  echo '1960' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1961, 'Reds', 'Cincinnati')");
  echo '1961' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1962, 'Giants', 'San Francisco')");
  echo '1962' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Los Angeles', 1963, 'Yankees', 'New York')");
  echo '1963' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1964, 'Yankees', 'New York')");
  echo '1964' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Los Angeles', 1965, 'Twins', 'Minnesota')");
  echo '1965' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Orioles', 'Baltimore', 1966, 'Dodgers', 'Los Angeles')");
  echo '1966' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1967, 'Red Sox', 'Boston')");
  echo '1967' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Tigers', 'Detroit', 1968, 'Cardinals', 'St. Louis')");
  echo '1968' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Mets', 'New York', 1969, 'Orioles', 'Baltimore')");
  echo '1969' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Orioles', 'Baltimore', 1970, 'Reds', 'Cincinnati')");
  echo '1970' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Pirates', 'Pittsburgh', 1971, 'Orioles', 'Baltimore')");
  echo '1971' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Oakland', 1972, 'Reds', 'Cincinnati')");
  echo '1972' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Oakland', 1973, 'Mets', 'New York')");
  echo '1973' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Oakland', 1974, 'Dodgers', 'Los Angeles')");
  echo '1974' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Reds', 'Cincinnati', 1975, 'Red Sox', 'Boston')");
  echo '1975' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Reds', 'Cincinnati', 1976, 'Yankees', 'New York')");
  echo '1976' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1977, 'Dodgers', 'Los Angeles')");
  echo '1977' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1978, 'Dodgers', 'Los Angeles')");
  echo '1978' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Pirates', 'Pittsburgh', 1979, 'Orioles', 'Baltimore')");
  echo '1979' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Phillies', 'Philadelphia', 1980, 'Royals', 'Kansas City')");
  echo '1980' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Los Angeles', 1981, 'Yankees', 'New York')");
  echo '1981' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 1982, 'Brewers', 'Milwaukee')");
  echo '1982' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Orioles', 'Baltimore', 1983, 'Phillies', 'Philadelphia')");
  echo '1983' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Tigers', 'Detroit', 1984, 'Padres', 'San Diego')");
  echo '1984' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Royals', 'Kansas City', 1985, 'Cardinals', 'St. Louis')");
  echo '1985' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Mets', 'New York', 1986, 'Red Sox', 'Boston')");
  echo '1986' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Twins', 'Minnesota', 1987, 'Cardinals', 'St. Louis')");
  echo '1987' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Los Angeles', 1988, 'Athletics', 'Oakland')");
  echo '1988' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Athletics', 'Oakland', 1989, 'Giants', 'San Francisco')");
  echo '1989' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Reds', 'Cincinnati', 1990, 'Athletics', 'Oakland')");
  echo '1990' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Twins', 'Minnesota', 1991, 'Braves', 'Atlanta')");
  echo '1991' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Blue Jays', 'Toronto', 1992, 'Braves', 'Atlanta')");
  echo '1992' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Blue Jays', 'Toronto', 1993, 'Phillies', 'Philadelphia')");
  echo '1993' . $lineBreak; # No World Series in 1994
  echo $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Braves', 'Atlanta', 1995, 'Indians', 'Cleveland')");
  echo '1995' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1996, 'Braves', 'Atlanta')");
  echo '1996' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Marlins', 'Florida', 1997, 'Indians', 'Cleveland')");
  echo '1997' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1998, 'Padres', 'San Diego')");
  echo '1998' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 1999, 'Braves', 'Atlanta')");
  echo '1999' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 2000, 'Mets', 'New York')");
  echo '2000' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Diamondbacks', 'Arizona', 2001, 'Yankees', 'New York')");
  echo '2001' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Angels', 'Anaheim', 2002, 'Giants', 'San Francisco')");
  echo '2002' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Marlins', 'Florida', 2003, 'Yankees', 'New York')");
  echo '2003' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 2004, 'Red Sox', 'Boston')");
  echo '2004' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('White Sox', 'Chicago', 2005, 'Astros', 'Houston')");
  echo '2005' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 2006, 'Tigers', 'Detroit')");
  echo '2006' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 2007, 'Rockies', 'Colorado')");
  echo '2007' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Phillies', 'Philadelphia', 2008, 'Rays', 'Tampa Bay')");
  echo '2008' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Yankees', 'New York', 2009, 'Phillies', 'Philadelphia')");
  echo '2009' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'San Francisco', 2010, 'Rangers', 'Texas')");
  echo '2010' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cardinals', 'St. Louis', 2011, 'Rangers', 'Texas')");
  echo '2011' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'San Francisco', 2012, 'Tigers', 'Detroit')");
  echo '2012' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 2013, 'Cardinals', 'St. Louis')");
  echo '2013' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Giants', 'San Francisco', 2014, 'Royals', 'Kansas City')");
  echo '2014' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Royals', 'Kansas City', 2015, 'Mets', 'New York')");
  echo '2015' . $lineBreak;

  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Cubs', 'Chicago', 2016, 'Indians', 'Cleveland')");
  echo '2016' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Astros', 'Houston', 2017, 'Dodgers', 'Los Angeles')");
  echo '2017' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Red Sox', 'Boston', 2018, 'Dodgers', 'Los Angeles')");
  echo '2018' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Nationals', 'Wasnington', 2019, 'Astros', 'Houston')");
  echo '2019' . $lineBreak;
  mysqli_query($conn,"INSERT INTO Wins_8_PHP(Team, City, Year_T, LoserTeam, LoserCity)VALUES('Dodgers', 'Los Angeles', 2020, 'Rays', 'Tampa Bay')");
  echo '2020' . $lineBreak;

  $conn->close();
?>

</center>

</body>
</html>