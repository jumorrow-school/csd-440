<html>
<body bgcolor='ffa07a'>

<center>

<?php

  $lineBreak = '<br />';

  # MySQLi extension 

  # MySQL Improved Extension
  # Connection between PHP and MySQL
  # The MySQLi extension is designed to work with MySQL version 4.1.13 or newer
  $conn = new mysqli("localhost", "student1", "pass", "baseball_01");

  if ($conn->connect_error) {

    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  echo 'Connected to the database.<br>';

  if ($conn){

    $sql='DROP TABLE Wins_8_PHP';
  }

  if ($conn->query($sql) === TRUE) {

    echo "Table Wins_8_PHP dropped." . $lineBreak;
  } else {

    echo "Error dropping table: " . $conn->error . $lineBreak;
  }

  if ($conn){

    $sql="CREATE TABLE Wins_8_PHP(Team CHAR(20) NOT NULL, City CHAR(20) NOT NULL, Year_T INT NOT NULL PRIMARY KEY, LoserTeam CHAR(20) NOT NULL, LoserCity CHAR(20) NOT NULL)";
  }

  if ($conn->query($sql) === TRUE) {

    echo "Table Wins_8_PHP created successfully" . $lineBreak;
  } else {

    echo "Error creating Wins_8_PHP table: " . $conn->error . $lineBreak;
  }

  $conn->close();

?>

</center>

</body>
</html>