<!DOCTYPE html>
<html lang='en'>
    <!--
      Justin Morrow - 08/11/26
      Module 1.3 My First PHP Program using variables, echo, print and calculations
      Code Examples used: app_002.php, app_006.php, app_007.php and app_008.php
	  w3schools difference of echo and print in PHP: https://www.w3schools.com/php/php_echo_print.asp
	  To display this page: Place this file in c:\xampp\htdocs\JustinFirstProgram.php and start xampp
	  Then in the browser goto: http://localhost/JustinFirstProgram.php
     -->
	<head>

		<title> Justins First PHP Program </title>
		<meta charset='utf-8'>

	</head>

	<body>

		<h1>Justins First PHP Program</h1>
		<p>The 1st line is using "echo" to display the first variable value</p>
		<p>The 2nd line is using "print" to display the second variable value</p>
		<p>The 3rd line is using "echo" to display the calculated value of variable 1 + variable 2</p>
		<p>The 4th line is using "print" to display the calculated value of variable 1 + variable 2</p>
		
		<?php

		// PHP variables defined for 2 values called var1 and var2
		$var1 = 47;
		$var2 = 20;

		// Using 2 display options echo and print for displaying the variables		
		echo("\$var1 = $var1 <br />\n");
		print("\$var2 = $var2 <br />\n");


		// Calculate and display the sum of the 2 variables
		$total = $var1 + $var2;
	
		echo("\$var1 + \$var2 = " . $total . " <br />\n");
		print("\$var1+ \$var2 = " . ($var1 + $var2) . " <br />\n");

		?>

	</body>

</html>