<!DOCTYPE html>
    <!--
		Justin Morrow - 09/19/26
		Module 8.2
			Use a DB called baseball_01 with user student1 and password pass
			Create 4 PHP programs that use MySQLi on a topic that interests me
			to Create a table, Populate the table, Query the table data, and Drop the table
		Code Example used:
			createAllTables_08.php
		Online Resources:
			2025 NFL Standings - https://www.pro-football-reference.com/years/2025/
			Seattle Seahawks Colors - https://teamcolorcodes.com/seattle-seahawks-color-codes/
		To display this page:
			Place file JustinCreateTable.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinCreateTable.php
     -->
	<head>
		<title>Justin's 2025 NFC West Team Standings Module 8.2 - Create Table</title>
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
			echo "You are now connected to the baseball_01 database." . $lineBreak;

			# Create the NFC West 2025 table and display the results
			if ($conn){
				$sql="CREATE TABLE NFC_WEST_2025(Team CHAR(20) NOT NULL, Wins INT NOT NULL, Losses INT NOT NULL, Ties INT NOT NULL, WinPct DECIMAL(4,3) NOT NULL, PointsFor INT NOT NULL, PointsAgainst INT NOT NULL)";
			}

			if ($conn->query($sql) === TRUE) {
				echo "The NFC_WEST_2025 table was created successfully." . $lineBreak;
			} else {
				echo "An Error occurred in creating the NFC_WEST_2025 table: " . $conn->error . $lineBreak;
			}
			
			# Close the database connection
			$conn->close();
		?>
	</center>
	</body>
</html>