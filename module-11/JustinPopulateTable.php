<!DOCTYPE html>
    <!--
		Justin Morrow - 09/19/26
		Module 8.2
			Use a DB called baseball_01 with user student1 and password pass
			Create 4 PHP programs that use MySQLi on a topic that interests me
			to Create a table, Populate the table, Query the table data, and Drop the table
		Code Example used:
			insertRecords_08.php
		Online Resources:
			2025 NFL Standings - https://www.pro-football-reference.com/years/2025/
			Seattle Seahawks Colors - https://teamcolorcodes.com/seattle-seahawks-color-codes/
		To display this page:
			Place file JustinPopulateTable.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinPopulateTable.php
     -->
	<head>
		<title>Justin's 2025 NFC West Team Standings Module 8.2 - Populate Table</title>
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
			echo 'You are now connected to the baseball_01 database.' . $lineBreak;
			echo 'NFC West 2025 Team Statistics' . $lineBreak;

			# Populate the table with the NFC West team statistics (Seahawks, Rams, 49ers, Cardinals)
			mysqli_query($conn, "INSERT INTO NFC_WEST_2025(Team, Wins, Losses, Ties, WinPct, PointsFor, PointsAgainst) VALUES('Seattle Seahawks', 14, 3, 0, 0.824, 483, 292)");
			echo 'The Seattle Seahawks data was populated in the table successfully' . $lineBreak;

			mysqli_query($conn, "INSERT INTO NFC_WEST_2025(Team, Wins, Losses, Ties, WinPct, PointsFor, PointsAgainst) VALUES('Los Angeles Rams', 12, 5, 0, 0.706, 518, 346)");
			echo 'The Los Angeles Rams data was populated in the table successfully' . $lineBreak;

			mysqli_query($conn, "INSERT INTO NFC_WEST_2025(Team, Wins, Losses, Ties, WinPct, PointsFor, PointsAgainst) VALUES('San Francisco 49ers', 12, 5, 0, 0.706, 437, 371)");
			echo 'The San Francisco 49ers data was populated in the table successfully' . $lineBreak;

			mysqli_query($conn, "INSERT INTO NFC_WEST_2025(Team, Wins, Losses, Ties, WinPct, PointsFor, PointsAgainst) VALUES('Arizona Cardinals', 3, 14, 0, 0.176, 355, 488)");
			echo 'The Arizona Cardinals data was populated in the table successfully' . $lineBreak;

			# Close the database connection
			$conn->close();
		?>
	</center>
	</body>
</html>