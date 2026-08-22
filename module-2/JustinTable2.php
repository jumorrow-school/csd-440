<!DOCTYPE html>
<html lang='en'>
    <!--
      Justin Morrow - 08/21/26
      Module 2.1 PHP Nested Loops and Random Numbers
      Code Examples used: app_023.php
	  To display this page: Place this file in c:\xampp\htdocs\JustinTable2.php and start xampp
	  Then in the browser goto: http://localhost/JustinTable2.php
     -->
	<head>

		<title>Justins PHP Random Number Table</title>
		<meta charset='utf-8'>

	</head>

	<body>
		<!-- Creating the HTML table with a border of 1 and a width of 500 pixels -->
		<table border='1' width='500'>
		  <caption>
			10x10 Table with Random numbers generated using a PHP nested loop
		  </caption>
		  <thead>
			<tr>
			  
			  <!-- Setting the grid size to 10 columns and displaying text in the top row -->
			  <td colspan='10'>
				Numbers generated are between 1 and 20
			  </td>
			</tr>
		  </thead>

		  <tbody>
			<?php
			  // The outer loop to create the 10 rows in the table
			  for($i = 0; $i < 10; ++$i){

				// Close PHP to write HTML
				?>
				
				<!-- Create a new table row -->
				<tr>
				
				<?php
				// The inner loop to create the 10 cells in each row
				for($j = 0; $j < 10; ++$j){

					// Close PHP to write HTML
					?>
					
					<!-- Create a new table cell -->
					<td>
					
					<?php
					// Generate a random number between 1 and 20 and display it using echo
					echo(rand(1, 20));
					?>
					
					<!-- Close the last cell -->
					</td>
					<?php
					
				// Closing the PHP inner loop
				}
				?>
				
				<!-- Close the last table row -->
				</tr>
				<?php
			
			// Closing the PHP outer loop
			}
			?>
		  </tbody>
		</table>
	</body>
</html>