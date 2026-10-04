<!DOCTYPE html>
    <!--
		Justin Morrow - 10/01/26
		Module 10.2
			Create a form with 8 fields and use json_encode to display the output in JSON format
		Code Examples used:
			app_001.php encoding an associative array into JSON format using json_encode
			app_007.php foreach loops with a PHP associative array
		Online Resources:
			2026 NFL Standings: https://www.pro-football-reference.com/years/2026/
			Dropdown Menu: https://www.w3schools.com/tags/tag_select.asp
			Foreach Loop Dropdown Array List: https://www.geeksforgeeks.org/php/how-to-populate-dropdown-list-with-array-values-in-php/
			PHP JSON Pretty Print: https://www.geeksforgeeks.org/html/php-json-pretty-print/
		To display this page:
			Place file JustinJSON.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinJSON.php
     -->
	<head>
		<title>Justin's NFL Team Selection</title>
		<meta charset='utf-8'>
	</head>
	
	<body bgcolor='#FFFFFF' text='#000000'>
	<center>	
	<h1>Justin's NFL Team JSON Output Generator</h1>
	
	<br/><a href='https://www.pro-football-reference.com/years/2026/' target="_blank">Look up the current 2026 NFL Team Standings</a>
	
		<form action='JustinJSON.php' method='post'>		
			<p>
				<label>Team Name:<br />
					<select name='TeamName'>
						<?php
							# Array for all 32 2026 NFL Teams
							$nflTeams = array(
								"Arizona Cardinals",
								"Atlanta Falcons",
								"Baltimore Ravens",
								"Buffalo Bills",
								"Carolina Panthers",
								"Chicago Bears",
								"Cincinnati Bengals",
								"Cleveland Browns",
								"Dallas Cowboys",
								"Denver Broncos",
								"Detroit Lions",
								"Green Bay Packers",
								"Houston Texans",
								"Indianapolis Colts",
								"Jacksonville Jaguars",
								"Kansas City Chiefs",
								"Las Vegas Raiders",
								"Los Angeles Chargers",
								"Los Angeles Rams",
								"Miami Dolphins",
								"Minnesota Vikings",
								"New England Patriots",
								"New Orleans Saints",
								"New York Giants",
								"New York Jets",
								"Philadelphia Eagles",
								"Pittsburgh Steelers",
								"San Francisco 49ers",
								"Seattle Seahawks",
								"Tampa Bay Buccaneers",
								"Tennessee Titans",
								"Washington Commanders"
							);

							# Foreach loop to create the PHP Team Dropdown List
							foreach($nflTeams as $team){
								echo('<option value="' . $team . '">' . $team . '</option>');
							}
						?>
					</select>
				</label>
			</p>

			<p>
				<label>Conference:<br />
					<select name='Conference'>
						<option value='AFC'>AFC</option>
						<option value='NFC'>NFC</option>
					</select>
				</label>
			</p>

			<p>
				<label>Division:<br />
					<select name='Division'>
						<option value='East'>North</option>
						<option value='North'>South</option>
						<option value='South'>East</option>
						<option value='West'>West</option>
					</select>
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
				<label>Points For (PF):<br />
					<input type='text' name='PointsFor' />
				</label>
			</p>

			<p>
				<label>Points Against (PA):<br />
					<input type='text' name='PointsAgainst' />
				</label>
			</p>

			<p>
				<input type='submit' value='Submit' />
			</p>
		</form>

		<?php
			$lineBreak = '<br />';

			# Check if the form sent the Team data and if so continue processing the values from the below fields
			if (isset($_POST["TeamName"])) {

				$TeamName = $_POST["TeamName"];
				$Conference = $_POST["Conference"];
				$Division = $_POST["Division"];
				$Wins = $_POST["Wins"];
				$Losses = $_POST["Losses"];
				$Ties = $_POST["Ties"];
				$PointsFor = $_POST["PointsFor"];
				$PointsAgainst = $_POST["PointsAgainst"];

				# Create an associative array containing the form data like seen in app_001.php
				$teamData = array(
					"Team Name" => $TeamName,
					"Conference" => $Conference,
					"Division" => $Division,
					"Wins" => $Wins,
					"Losses" => $Losses,
					"Ties" => $Ties,
					"Points For" => $PointsFor,
					"Points Against" => $PointsAgainst
				);
			
				# Encode the Associative Array into JSON format using json_encode instead of decoding JSON using true
				# JSON_Pretty_Print formats the output with indentation and line breaks
				$jsonData = json_encode($teamData, JSON_PRETTY_PRINT);

				# Check if the json_encode function successfully created the JSON data
				if ($jsonData !== false) {
					# Print a horizontal line below the Submit button then the header/title info
					echo "<hr />";
					echo "<h2>JSON Format Output</h2>";

					# HTML tag to preserve the spacing, indentation and line breaks
					echo "<pre>";
					echo $jsonData;
					echo "</pre>";
				}
				else{
					# Display an error message if the JSON output was not created below a horizontal line
					echo "<hr />";
					echo "<h2>ERROR in attempting to encode the form data into JSON format</h2>";
				}
			}
		?>		
	</center>
	</body>
</html>