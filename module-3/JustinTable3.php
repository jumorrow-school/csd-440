<!DOCTYPE html>
<html lang='en'>
    <!--
      Justin Morrow - 08/22/26
      Module 3.2 Reuse PHP table from Module 2.2, use require for the external function JustinFunction3.php
	  Additions from Module 2.2 are labeled below with the comments starting with NEW
      Code Example used: app_003.php use of require for the fuction found in fun_001.php. Section code in Assign return value.
	  To display this page: Place both files JustinTable3.php and JustinFunction3.php in c:\xampp\htdocs\ and start xampp
	  Then in the browser goto: http://localhost/JustinTable3.php
     -->
	<head>

		<title>Justins PHP Random Number Table</title>
		<meta charset='utf-8'>

		<!-- NEW - Use of require for the function
		<?php
		  require('JustinFunction3.php');
		?>
	</head>

	<body>
		<!-- Creating the HTML table with a border of 1 and a width of 500 pixels -->
		<table border='1' width='500'>
		  <caption>
			10x10 Table with sum of 2 random numbers
		  </caption>
		  <thead>
			<tr>
			  
			  <!-- Setting the grid size to 10 columns and displaying text in the top row -->
			  <td colspan='10'>
				Random numbers between 1-20 added together will be a Sum between 2-40
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

					// NEW - Generate two random numbers between 1 and 20
					$rand_1 = rand(1, 20);
					$rand_2 = rand(1, 20);

					// Close PHP to write HTML
					?>
					
					<!-- Create a new table cell -->
					<td>
					
					<?php
					// NEW - Call the external function addTwoRandNum to add the two random numbers generated in the inner loop and display the sum
					echo(addTwoRandNum($rand_1, $rand_2));
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