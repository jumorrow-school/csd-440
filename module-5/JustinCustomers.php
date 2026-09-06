<!DOCTYPE html>
<html lang='en'>
    <!--
		Justin Morrow - 09/05/26
		Module 5.2 - Working with Arrays
			Created and display an array that includes first/last name, age, phone number
			Using an array method find multiple records and display the matched details
		Code Examples used:
			app_001.php Indexed arrays and for-loops
			app_002.php Count and arrays
			app_003.php Working with multidimensional arrays
		Online Resources:
			https://www.w3schools.com/php/php_arrays.asp
			https://www.w3schools.com/php/php_arrays_associative.asp
				Though I didn't use it in this program but found useful
			https://www.w3schools.com/php/php_arrays_multidimensional.asp
			https://www.w3schools.com/php/php_looping_foreach.asp
		To display this page:
			Place file JustinCustomers.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinCustomers.php
     -->
	<head>

		<title>Justin's PHP Customer Array</title>
		<meta charset='utf-8'>

	</head>

	<body>
		<h1>Seattle Seahawks</h1><br>

		<?php

			$newLine = '<br />';

			# The seahawks array is created to contain first name, last name, age, and phone number
			# Note: Base 0: First[0], Last[1], Age[2], Phone[3]
			$seahawks = array(
				array('Bobby', 'Wagner', 36, '425-555-1001'),
				array('Earl', 'Thomas', 37, '425-555-1002'),
				array('Ernest', 'Jones', 26, '425-555-1003'),
				array('Jaxon', 'Smith-Njigba', 24, '425-555-1004'),
				array('Kam', 'Chancellor', 38, '425-555-1005'),
				array('Leonard', 'Williams', 32, '425-555-1006'),
				array('Lofa', 'Tatupu', 43, '425-555-1007'),
				array('Marshawn', 'Lynch', 40, '425-555-1008'),
				array('Matt', 'Hasselbeck', 50, '425-555-1009'),
				array('Richard', 'Sherman', 38, '425-555-1010'),
				array('Russell', 'Wilson', 37, '425-555-1011'),
				array('Tyler', 'Lockett', 33, '425-555-1012')
			);

			# This gets the length of seahawks array
			$arrlength = count($seahawks);

			# Display all seahawks/customers details
			echo('<h2>Past/Present Player Details</h2>');

			for($x = 0; $x < $arrlength; $x++) {
				echo('First Name: ' . $seahawks[$x][0] . $newLine);
				echo('Last Name: ' . $seahawks[$x][1] . $newLine);
				echo('Age: ' . $seahawks[$x][2] . $newLine);
				echo('Phone Number: ' . $seahawks[$x][3] . $newLine);
				echo($newLine);
			}

			# Search for person using first name
			echo('<h2>Search by First Name: Bobby</h2>');

			for($x = 0; $x < $arrlength; $x++) {
				if($seahawks[$x][0] == 'Bobby') {
					echo('First Name: ' . $seahawks[$x][0] . $newLine);
					echo('Last Name: ' . $seahawks[$x][1] . $newLine);
					echo('Age: ' . $seahawks[$x][2] . $newLine);
					echo('Phone Number: ' . $seahawks[$x][3] . $newLine);
					echo($newLine);
				}
			}

			# Search for person using last name
			echo('<h2>Search by Last Name: Lynch</h2>');

			for($x = 0; $x < $arrlength; $x++) {
				if($seahawks[$x][1] == 'Lynch') {
					echo('First Name: ' . $seahawks[$x][0] . $newLine);
					echo('Last Name: ' . $seahawks[$x][1] . $newLine);
					echo('Age: ' . $seahawks[$x][2] . $newLine);
					echo('Phone Number: ' . $seahawks[$x][3] . $newLine);
					echo($newLine);
				}
			}

			# Search for person using age
			echo('<h2>Search by Age: 24</h2>');

			for($x = 0; $x < $arrlength; $x++) {
				if($seahawks[$x][2] == 24) {
					echo('First Name: ' . $seahawks[$x][0] . $newLine);
					echo('Last Name: ' . $seahawks[$x][1] . $newLine);
					echo('Age: ' . $seahawks[$x][2] . $newLine);
					echo('Phone Number: ' . $seahawks[$x][3] . $newLine);
					echo($newLine);
				}
			}

			# Search for person using phone number
			echo('<h2>Search by Phone Number: 425-555-1006</h2>');

			for($x = 0; $x < $arrlength; $x++) {
				if($seahawks[$x][3] == '425-555-1006') {
					echo('First Name: ' . $seahawks[$x][0] . $newLine);
					echo('Last Name: ' . $seahawks[$x][1] . $newLine);
					echo('Age: ' . $seahawks[$x][2] . $newLine);
					echo('Phone Number: ' . $seahawks[$x][3] . $newLine);
					echo($newLine);
				}
			}
		?>
	</body>
</html>