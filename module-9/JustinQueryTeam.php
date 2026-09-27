<!DOCTYPE html>
    <!--
		Justin Morrow - 09/26/26
		Module 9.2
			Use Module 8.2 DB called baseball_01 with user student1 and password pass
			Continue using MySQLi and the files from Module 8.2
			Create 3 new PHP programs
				Index Page to allow the user to easily select any of the 7 PHP Programs
				Form to allow adding a new team and stats (We can assume its an expansion team)
				Query Page since we have a Query all this one will query just the team selected
		Code Example used:
			Form_101.php, postPHP_101.php and Module 8.2 PHP Example files and assignment files
		Online Resources:
			2025 NFL Standings - https://www.pro-football-reference.com/years/2025/
			Seattle Seahawks Colors - https://teamcolorcodes.com/seattle-seahawks-color-codes/
		To display this page:
			Place file JustinQueryTeam.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinQueryTeam.php
     -->
	<head>
		<title>Justin's 2025 NFC West Team Standings Module 9.2 - Query by Team</title>
		<meta charset='utf-8'>
	</head>
	
	<!-- Seahawks Colors (Wolf Grey: A5ACAF), (College Navy: 002244), (Action Green: 69BE28) -->
	<body bgcolor='#A5ACAF' text='#002244'>
	<center>	
		<?php			
			$lineBreak = '<br />';
			
			# Create a connection between PHP and the MySQL database
			$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

			# Verify the database connection and display an error if the connection fails
			if ($conn->connect_error) {
				die("ERROR: Unable to connect to the baseball_01 database: " . $conn->connect_error);
			}

			# Select all the distinct teams from the NFC_WEST_2025 table
			$sql = "SELECT DISTINCT Team FROM NFC_WEST_2025";

			# Run the MySQLi query
			$rs = mysqli_query($conn, $sql);

			# Verify the SQL query was successful
			if (!$rs){
				exit("There was a MySQLi Error");
			}
		?>

		<h1>2025 NFC West Team Search</h1>
		<h2>Choose a team below to Search for their 2025 stats</h2>
		<br/><a href='JustinIndex.php'>Return to the Index Page</a>
		
		<form action='JustinQueryTeam.php' method='post'>
			<p>
				<select name='select'>
					<?php
						# Check if the query returned any rows of data
						if (mysqli_num_rows($rs) > 0) {
							# Retrieve each distinct team and create a selection option
							while($row = mysqli_fetch_assoc($rs)){
								echo('<option value="' . $row['Team'] . '">' . $row['Team'] . '</option>');							
							}
						}
					?>
				</select>
			</p>
			<p>
				<input type='submit' value='Search' />
			</p>
		</form>

		<?php
			# Check if a team was selected and submitted from the form
			if (isset($_POST["select"])) {
				$select = $_POST["select"];

				# Search the NFC_WEST_2025 table for the selected team
				$sql = 'SELECT * FROM NFC_WEST_2025 WHERE Team = "' . $select . '"';

				# Run the MySQLi query
				$rs = mysqli_query($conn, $sql);

				# Verify the SQL query was successful
				if (!$rs){
					exit("There was a MySQLi Error");
				}
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
					echo 'No records were found for the selected NFC West team';
				}

				# Close the database connection
				$conn->close();
			# Closing the if isset PHP block above
			}
			?>
		</table>
	</center>
	</body>
</html>