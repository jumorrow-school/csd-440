<!DOCTYPE html>
<html lang='en'>
    <!--
      Justin Morrow - 08/29/26
      Module 4.2 Test 6 strings and display if the they are a Palindrome or not
		Palindrome is a word spelled the same forwards and backwards like racecar
      Code Example used:
		app_001.php used for substr to extract part of the string
		app_002.php used for strlen to count number the characters
	  Online Resources:
		https://www.geeksforgeeks.org/dsa/palindrome-string/
		https://www.w3schools.com/pHP/func_string_strlen.asp
		https://www.w3schools.com/pHp/func_string_substr.asp
		https://www.w3schools.com/php/func_string_strrev.asp
	  To display this page:
		Place file JustinPalindrome.php in c:\xampp\htdocs\ and start xampp
		Then in the browser goto: http://localhost/JustinPalindrome.php
     -->
	<head>

		<title>Justin's Palindrome String Test</title>
		<meta charset='utf-8'>

	</head>

	<body>
		<h1>Justin's PHP Palindrome String Test</h1><br>

		<?php

			# Function to test if a string is the same when read forward and backward
			function palindromeTest($stringValue){

				# Reverse the string using strrev as found on w3schools: PHP strrev() Function
				$reverseString = strrev($stringValue);
				
				# Compare the original string to the reverse string
				if($stringValue == $reverseString){
					return('This is a Palindrome');
				}else{
					return('This is Not a Palindrome');
				}
			}

			# Six strings/words that will be tested to see if they are a Palindrome
			$string_1 = 'racecar';
			$string_2 = 'apple';
			$string_3 = 'level';
			$string_4 = 'orange';
			$string_5 = 'radar';
			$string_6 = 'grape';

			$breakLine = '<br/>';

			# First string test
			$reverse_1 = '';
			for($i = strlen($string_1) - 1; $i >= 0; --$i){
				$reverse_1 = $reverse_1 . substr($string_1, $i, 1);
			}
			echo('The word (' . $string_1 . ') backwards is (' . $reverse_1 . '). ' . palindromeTest($string_1) . $breakLine . $breakLine);

			# Second string test
			$reverse_2 = '';
			for($i = strlen($string_2) - 1; $i >= 0; --$i){
				$reverse_2 = $reverse_2 . substr($string_2, $i, 1);
			}
			echo('The word (' . $string_2 . ') backwards is (' . $reverse_2 . '). ' . palindromeTest($string_2) . $breakLine . $breakLine);

			# Third string test
			$reverse_3 = '';
			for($i = strlen($string_3) - 1; $i >= 0; --$i){
				$reverse_3 = $reverse_3 . substr($string_3, $i, 1);
			}
			echo('The word (' . $string_3 . ') backwards is (' . $reverse_3 . '). ' . palindromeTest($string_3) . $breakLine . $breakLine);

			# Fourth string test
			$reverse_4 = '';
			for($i = strlen($string_4) - 1; $i >= 0; --$i){
				$reverse_4 = $reverse_4 . substr($string_4, $i, 1);
			}
			echo('The word (' . $string_4 . ') backwards is (' . $reverse_4 . '). ' . palindromeTest($string_4) . $breakLine . $breakLine);

			# Fifth string test
			$reverse_5 = '';
			for($i = strlen($string_5) - 1; $i >= 0; --$i){
				$reverse_5 = $reverse_5 . substr($string_5, $i, 1);
			}
			echo('The word (' . $string_5 . ') backwards is (' . $reverse_5 . '). ' . palindromeTest($string_5) . $breakLine . $breakLine);

			# Sixth string test
			$reverse_6 = '';
			for($i = strlen($string_6) - 1; $i >= 0; --$i){
				$reverse_6 = $reverse_6 . substr($string_6, $i, 1);
			}
			echo('The word (' . $string_6 . ') backwards is (' . $reverse_6 . '). ' . palindromeTest($string_6) . $breakLine . $breakLine);
		?>
	</body>
</html>