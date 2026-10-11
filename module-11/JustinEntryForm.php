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
			Place file JustinEntryFrom.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinEntryFrom.php
     -->
	<head>
		<title>Justin's 2025 NFC West Team Standings Module 9.2 - Entry Form</title>
		<meta charset='utf-8'>
	</head>
	
	<!-- Seahawks Colors (Wolf Grey: A5ACAF), (College Navy: 002244), (Action Green: 69BE28) -->
	<body bgcolor='#A5ACAF' text='#002244'>
	<center>
	<h1>Add 2025 Records for a New team as an Expansion team to the NFC West</h1>
	
	<br/><a href='JustinIndex.php'>Return to the Index Page</a><a> | </a><a href='https://www.pro-football-reference.com/years/2025/' target="_blank">Look up 2025 Stats</a>
	
		<form action='JustinEntryForm.php' method='post'>
			<p>
				<label>Team Name:<br />
					<input type='text' name='Team' />
				</label>
			</p>

			<p>
				<label>Games Won (W):<br />
					<input type='text' name='Wins' />
				</label>
			</p>

			<p>
				<label>Games Lost (L):<br />
					<input type='text' name='Losses' />
				</label>
			</p>

			<p>
				<label>Tie Games (T):<br />
					<input type='text' name='Ties' />
				</label>
			</p>

			<p>
				<label>(W)in-(L)oss %:<br /> (Enter 85% as Decimal 0.85)<br />
					<input type='text' name='WinPct' />
				</label>
			</p>

			<p>
				<label>Points Scored by team (PF):<br />
					<input type='text' name='PointsFor' />
				</label>
			</p>

			<p>
				<label>Points Scored by opposition (PA):<br/>
					<input type='text' name='PointsAgainst' />
				</label>
			</p>

			<p>
				<input type='submit' value='Add Team' />
			</p>
		</form>

		<?php
			$lineBreak = '<br />';

			# Create a connection between PHP and the MySQL database
			$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

			# Verify the database connection and display an error if the connection fails
			if ($conn->connect_error) {
				die("ERROR: Unable to connect to the baseball_01 database: " . $conn->connect_error);
			}

			# Check if the form sent the Team data and if so continue processing the values from the below fields
			if (isset($_POST["Team"])) {

				$Team = $_POST["Team"];
				$Wins = $_POST["Wins"];
				$Losses = $_POST["Losses"];
				$Ties = $_POST["Ties"];
				$WinPct = $_POST["WinPct"];
				$PointsFor = $_POST["PointsFor"];
				$PointsAgainst = $_POST["PointsAgainst"];

				# Insert the new team stats into the NFC_WEST_2025 table
				$sql = "INSERT INTO NFC_WEST_2025(Team, Wins, Losses, Ties, WinPct, PointsFor, PointsAgainst) VALUES('$Team', $Wins, $Losses, $Ties, $WinPct, $PointsFor, $PointsAgainst)";

				# Run the MySQLi query and report if it was successful or an error occured
				if ($conn->query($sql) === TRUE) {
					echo "The $Team stats were added to the NFC_WEST_2025 table successfully." . $lineBreak;
				} else {
					echo "An Error occurred in adding the $Team stats to the NFC_WEST_2025 table: " . $conn->error . $lineBreak;
				}
			}

			# Close the database connection
			$conn->close();
		?>
	</center>
	</body>
</html>