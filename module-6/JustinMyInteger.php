<!DOCTYPE html>
<html lang='en'>
    <!--
		Justin Morrow - 09/06/26
		Module 6.2 - Working with Integers, Constructors and Methods
			Create the class MyInteger to hold a single integer to be set in the constructor by a parameter
			The class needs to contain the methods: isEven, isOdd, isPrime, getter, and setter
		Code Examples used:
			app_001.php Classes, Public/Private Variables and Instances
			app_003.php Getter and Setter Methods
			app_004.php Creating a constructor and passing parameters
		Online Resources:
			https://www.geeksforgeeks.org/php/php-classes/
			https://www.geeksforgeeks.org/php/php-constructors-and-destructors/
			https://www.w3Justins.com/php/php_oop_classes_objects.asp
		To display this page:
			Place file MyInteger.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/MyInteger.php
     -->
	<head>

		<title>Justin's PHP MyInteger Module 6.2</title>
		<meta charset='utf-8'>

		<?php
			$newLine = '<br />';

			# Write a program that defines a class titled MyInteger
			class MyInteger{

				# The class is to hold a single integer that is set in the constructor by a parameter
				private $singleInteger;

				# Constructor
				function __construct($newInteger){
					$this->singleInteger = $newInteger;
				}

				# Method to test if the integer is Even by diving the Value by 2 with a remainder of 0
				function isEven($value){
					if($value % 2 == 0){
						return true;
					}
					else{
						return false;
					}
				}

				# Method to test if the integer is Odd by diving the Value by 2 with a remainder not 0
				function isOdd($value){
					if($value % 2 != 0){
						return true;
					}
					else{
						return false;
					}
				}

				# The class will have an isPrime() method. 
				function isPrime(){
					# Prime numbers are greater than 1 and only divisible by 1 and itself (2, 3, 5, 7, 11, 13)
					if($this->singleInteger < 2){
						return false;
					}
					# Check each number from 2 up to the integer value to see if it divides evenly
					for($i = 2; $i < $this->singleInteger; $i++){
						# If the integer divides evenly by the current number in the for loop it is not prime
						if($this->singleInteger % $i == 0){
							return false;
						}
					}
					return true;
				}

				# Getter method
				function getInteger(){
					return $this->singleInteger;
				}

				# Setter method
				function setInteger($newInteger){
					$this->singleInteger = $newInteger;
				}
			}
		?>
	</head>

	<body>
		<h1>Justin's PHP MyInteger Class</h1><br>
		
		<?php
			# Create two instances and test all the methods
			$myInteger_01 = new MyInteger(8); # 8 is not a prime number
			$myInteger_02 = new MyInteger(11); # 11 is a prime number

			echo('<h2>Testing the 1st Integer Instance myInteger_01</h2>');

			# Display the value of myInteger_01
			echo('Integer Value: ' . $myInteger_01->getInteger() . $newLine);

			# Test the isEven method on myInteger_01 and display Yes for True or No for False
			if($myInteger_01->isEven($myInteger_01->getInteger())){
				echo('Is the Integer Even: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Even: No' . $newLine);
			}

			# Test the isOdd method on myInteger_01 and display Yes for True or No False
			if($myInteger_01->isOdd($myInteger_01->getInteger())){
				echo('Is the Integer Odd: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Odd: No' . $newLine);
			}

			# Test the isPrime method on myInteger_01 and display Yes for True or No False
			if($myInteger_01->isPrime()){
				echo('Is the Integer Prime: Yes' . $newLine);			
			}			
			else{
				echo('Is the Integer Prime: No' . $newLine);
			}

			# Using Setter to change myInteger_01 to a prime number
			$myInteger_01->setInteger(7);
			echo($newLine);
			echo('After using the Setter method the Integer is changed to: ' . $myInteger_01->getInteger() . $newLine);

			# Testing the methods again after using setter for myInteger_01
			if($myInteger_01->isEven($myInteger_01->getInteger())){
				echo('Is the Integer Even: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Even: No' . $newLine);
			}

			if($myInteger_01->isOdd($myInteger_01->getInteger())){
				echo('Is the Integer Odd: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Odd: No' . $newLine);
			}

			if($myInteger_01->isPrime()){
				echo('Is the Integer Prime: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Prime: No' . $newLine);
			}


			# Second instance testing
			echo('<h2>Testing the 2nd Integer Instance myInteger_02</h2>');
			
			# Display the value of myInteger_02
			echo('Integer Value: ' . $myInteger_02->getInteger() . $newLine);

			# Test the isEven method on myInteger_02 and display Yes for True or No False
			if($myInteger_02->isEven($myInteger_02->getInteger())){
				echo('Is the Integer Even: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Even: No' . $newLine);
			}

			# Test the isOdd method on myInteger_02 and display Yes for True or No False
			if($myInteger_02->isOdd($myInteger_02->getInteger())){
				echo('Is the Integer Odd: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Odd: No' . $newLine);
			}

			# Test the isPrime method on myInteger_02 and display Yes for True or No False
			if($myInteger_02->isPrime()){
				echo('Is the Integer Prime: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Prime: No' . $newLine);
			}

			# Using Setter to change myInteger_02 to a non-prime number
			$myInteger_02->setInteger(10);
			echo($newLine);
			echo('After using the Setter method the Integer is changed to: ' . $myInteger_02->getInteger() . $newLine);

			# Testing the methods again after using setter for myInteger_02
			if($myInteger_02->isEven($myInteger_02->getInteger())){
				echo('Is the Integer Even: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Even: No' . $newLine);
			}

			if($myInteger_02->isOdd($myInteger_02->getInteger())){
				echo('Is the Integer Odd: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Odd: No' . $newLine);
			}
			if($myInteger_02->isPrime()){
				echo('Is the Integer Prime: Yes' . $newLine);
			}
			else{
				echo('Is the Integer Prime: No' . $newLine);
			}
		?>
	</body>
</html>