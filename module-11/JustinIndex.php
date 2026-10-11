<!DOCTYPE html>
    <!--
		Justin Morrow - 10/11/26
		Module 11.2 (Cloned Module 9.2 Index file and added the Create PDF Link)
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
			Place file JustinIndex.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinIndex.php
     -->
	<head>
		<title>Justin's 2025 NFC West Team Standings Module 11.2 - Index Page</title>
		<meta charset='utf-8'>
	</head>
	
	<!-- Seahawks Colors (Wolf Grey: A5ACAF), (College Navy: 002244), (Action Green: 69BE28) -->
	<body bgcolor='#002244' text='#FFFFFF'>
	<center>	
	<h1>Justin's 2025 NFC West Team Standings</h1>
	<h2>Modules 11.2, 9.2, 8.2 combined PHP Program Selection</h2>
		<table border='1' width='60%'>

			<!-- Header for Module 8.2 Original 4 PHP Programs -->
			<tr align='center' style='background-color:#69BE28; color:#002244;'>
				<td><b>Module 8.2 PHP Programs for the NFC West Teams (Opens in new tab)</b></td>
			</tr>

			<!-- Links to each of the 4 PHP Programs from Module 8.2 -->
			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinCreateTable.php' target="_blank">Create the NFC West 2025 Table</a></td>
			</tr>

			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinPopulateTable.php' target="_blank">Populate the NFC West 2025 Team Stats into the Table</a></td>
			</tr>

			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinQueryTable.php' target="_blank">Query the 2025 Stats for All the NFC West Teams</a></td>
			</tr>

			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinDropTable.php' target="_blank">Drop/Delete the entire NFC West Table</a></td>
			</tr>

			<!-- Header for Module 9.2 New 3 PHP Programs -->
			<tr align='center' style='background-color:#69BE28; color:#002244;'>
				<td><b>Module 9.2 PHP Programs for the NFC West Teams (Opens in same tab)</b></td>
			</tr>

			<!-- Links to the 2 new PHP Programs for Module 9.2 -->
			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinEntryForm.php'>Add Stats for a new NFC Expansion Team from 2025</a></td>
			</tr>

			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinQueryTeam.php'>Query the 2025 Stats by a Single NFC West Team</a></td>
			</tr>
			
			<!-- New Header for Module 11.2: PDF Program -->
			<tr align='center' style='background-color:#69BE28; color:#002244;'>
				<td><b>Module 11.2 PDF Program (Opens in new tab)</b></td>
			</tr>

			<!-- New Link to generate the NFC West 2025 PDF report -->
			<tr align='center' style='background-color:#A5ACAF; color:#002244;'>
				<td><a href='JustinPDF.php' target="_blank">Create a PDF of the 2025 NFC West Team Statistics</a></td>
			</tr>
		</table>
	</center>
	</body>
</html>