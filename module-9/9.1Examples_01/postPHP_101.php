<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01//EN'
  'http://www.w3.org/TR/1999/REC-html-19991224/strict.dtd'>

<html>
  <head>

  <!--
    Professor Darrell Payne
    Bellevue University
   -->

    <title> DB Team Results </title>

  </head>

  <body bgcolor='ffa07a'>

    <center>

    <br />
    Winning Team Results
    <br />
    <br />

    <?php

      $conn = new mysqli("localhost", "student1", "pass", "baseball_01");

      if ($conn->connect_error) {

        die("ERROR: Unable to connect: " . $conn->connect_error);
      } 

      $select = $_POST["select"];

      $sql = 'SELECT * FROM Wins_8_PHP WHERE Team = "' . $select . '"';

      $rs = mysqli_query($conn, $sql);

      if (!$rs){

        exit("Error in SQL");
      }
    ?>

    <table border='1' width='80%'>
      <tr align='center' style='background-color:#ffdead;'>
        <td width='20%' onmouseover=\"style.color='#ff0000'\"
        onmouseout=\"style.color='#000000'\"><b>Winning Team</b></td>
        <td width='20%' onmouseover=\"style.color='#ff0000'\"
        onmouseout=\"style.color='#000000'\"><b>Winning City</b></td>
        <td width='20%' onmouseover=\"style.color='#ff0000'\"
        onmouseout=\"style.color='#000000'\"><b>Year</b></td>
        <td width='20%' onmouseover=\"style.color='#ff0000'\"
        onmouseout=\"style.color='#000000'\"><b>Losing Team</b></td>
        <td width='20%' onmouseover=\"style.color='#ff0000'\"
        onmouseout=\"style.color='#000000'\"><b>Losing City</b></td>
      </tr>

    <?php
      if (mysqli_num_rows($rs) > 0) {

        while($row = mysqli_fetch_assoc($rs)){
    ?>
          <tr align='center' style='background-color:#ffdead;'>
            <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> <?php echo($row["Team"]); ?> </td>
            <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> <?php echo($row["City"]); ?> </td>
            <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> <?php echo($row["Year_T"]); ?> </td>
            <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> <?php echo($row["LoserTeam"]); ?> </td>
            <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> <?php echo($row["LoserCity"]); ?> </td>
          </tr>

    <?php

        }
      }
      else{

        echo 'no records';
      }

    ?>

    </table>

  <?php
  
    $sql = "SELECT DISTINCT Team FROM Wins_8_PHP";

    $rs = mysqli_query($conn, $sql);

    if (!$rs){

      exit("Error in SQL");
    }

  ?>

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

    <br />
    <a href="Form_101.php">Home</a>

  </center>

</body>
</html>