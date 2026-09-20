<!DOCTYPE html>
    <!--
		Justin Morrow - 09/19/26
		Module 8.2
			Use a DB called baseball_01 with user student1 and password pass
			Create 4 PHP programs that use MySQLi on a topic that interests me
			to Create a table, Populate the table, Query the table data, and Drop the table
		Code Example used:
			readWins_08.php
		Online Resources:
			2025 NFL Standings - https://www.pro-football-reference.com/years/2025/
			Seattle Seahawks Colors - https://teamcolorcodes.com/seattle-seahawks-color-codes/
		To display this page:
			Place file JustinQueryTable.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinQueryTable.php
     -->
	<head>
		<title>Justin's 2025 NFC West Team Standings Module 8.2 - Query Table</title>
		<meta charset='utf-8'>
	</head>
	
	<!-- Seahawks Colors (Wolf Grey: A5ACAF), (College Navy: 002244), (Action Green: 69BE28) -->
	<body bgcolor='#002244' text='#FFFFFF'>
	<center>	
		<?php			
			$lineBreak = '<br />';
			
			# Create a connection between PHP and the MySQL database
			$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

			# Verify the database connection and display an error if the connection fails
			if ($conn->connect_error) {
				die("ERROR: Unable to connect to the baseball_01 database: " . $conn->connect_error);
			}

			# Select all the records from the NFC_WEST_2025 table
			$sql="SELECT * FROM NFC_WEST_2025";

			# Run the MySQLi query
			$rs = mysqli_query($conn, $sql);

			# Verify the SQL query was successful
			if (!$rs){
				exit("There was a MySQLi Error");
			}

			# Printing the Header text over the table results
			print("<h1>NFC West 2025 Team Statistics</h1>");

		?>
		<table border='1' width='80%'>
			<!-- Seahawks Action Green table header with College Navy text -->
			<tr align='center' style='background-color:#69BE28; color:#002244;'>
				<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Team</b></td>
				<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Wins</b></td>
				<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Losses</b></td>
				<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Ties</b></td>
				<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Win %</b></td>
				<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Points For</b></td>
				<td width='16%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"><b>Points Against</b></td>
			</tr>

			<?php
				# Check if the query returned any rows of data
				if (mysqli_num_rows($rs) > 0) {

					# Retrieve and display each record from the NFC_WEST_2025 table
					while($row = mysqli_fetch_assoc($rs)){
			?>
						<!-- Seahawks Wolf Gray colored table rows and white hover. Setting 6 columns to 14% width and the last as 16% width to equal 100% -->
						<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
							<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["Team"]); ?> </td>
							<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["Wins"]); ?> </td>
							<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["Losses"]); ?> </td>
							<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["Ties"]); ?> </td>
							<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["WinPct"]); ?> </td>
							<td width='14%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["PointsFor"]); ?> </td>
							<td width='16%' onmouseover="style.color='#FFFFFF'" onmouseout="style.color='#002244'"> <?php echo($row["PointsAgainst"]); ?> </td>
						</tr>
			<?php
					# Continue looping until all the rows of data have been returned by the query
					}
				}
				# Display a message if no records were found in the table
				else{
					echo 'No records were found in the NFC_WEST_2025 table';
				}

				# Close the database connection
				$conn->close();
			?>
		</table>
	</center>
	</body>
</html>