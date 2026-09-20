<html>
<body bgcolor='ffa07a'>

<center>

<?php

  $conn = new mysqli("localhost", "student1", "pass", "baseball_01");

  if ($conn->connect_error) {

    die("ERROR: Unable to connect: " . $conn->connect_error);
  } 

  $sql="SELECT * FROM Wins_8_PHP";

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
      if($row["Year_T"] == 1903){
?>

       <tr align='center' style='background-color:#ffdead;'>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> 1904 </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
       </tr>
<?php
      }
      if($row["Year_T"] == 1993){
?>

       <tr align='center' style='background-color:#ffdead;'>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> 1994 </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
         <td width='20%' onmouseover="style.color='#ff0000'" onmouseout="style.color='#000000'"> </td>
       </tr>
<?php
      }
    }
  }
  else{

    echo 'no records';
  }

  $conn->close();

?>

  </table>

</center>

</body>
</html>