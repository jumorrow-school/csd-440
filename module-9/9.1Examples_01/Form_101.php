<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
  'http://www.w3.org/TR/1999/REC-html-19991224/strict.dtd'>

<html>

  <head>

  <!--
    Professor Darrell Payne
    Bellevue University
   -->

    <title> DB Form - Select Team </title>

  </head>

  <body>

  <?php
  
    $conn = new mysqli("localhost", "student1", "pass", "baseball_01");

    if ($conn->connect_error) {

      die("ERROR: Unable to connect: " . $conn->connect_error);
    } 

    $sql = "SELECT DISTINCT Team FROM Wins_8_PHP";

    $rs = mysqli_query($conn, $sql);

    if (!$rs){

      exit("Error in SQL");
    }

  ?>

    <center>

    <form action='postPHP_101.php' method='post'>

      <p>
        <label>
          Winning Team Selection
          <br />
          <br />
        </label>

        <select name='select'>

        <?php

          if (mysqli_num_rows($rs) > 0) {

            while($row = mysqli_fetch_assoc($rs)){

               echo('<option value = "' . $row['Team'] . '">' . $row['Team'] . '</option>');
          
            }
          }

          $conn->close();

        ?>

      </select>
      </p>

      <p>
        <input type='submit' value='Submit' />
      </p>

    </form>
    
    </center>

  </body>
</html>