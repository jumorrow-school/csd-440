<!DOCTYPE html>
    <!--
		Justin Morrow - 09/12/26
		Module 7.2
			Display the results submitted for verification via PHP CGI in a well-formatted page
			If values aren't submitted the user should see an error message with the issue
		Code Example used:
			postPHP.php
		To display this page:
			Place file JustinResponse.php in c:\xampp\htdocs\ and start xampp
			Then in the browser goto: http://localhost/JustinResponse.php
     -->
	<head>
		<title>Justin's Seahawks Ticket Purchase PHP Verification Module 7.2</title>
		<meta charset='utf-8'>
	</head>
	<body>	
		<?php
		
			# Receive the values submitted from JustinForm.html
			$name = $_POST["name"];
			$contactMethod = $_POST["contactMethod"];
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$tickets = $_POST["tickets"];
			$seats = $_POST["seats"];
			$willCall = $_POST["willCall"];

			# Variable to keep track of any errors
			$error = false;

			# Verify the forms fields were populated for (Name, Contact Method, Email, Phone, Tickets, Seats, Will Call)
			if(empty($name)){
				$error = true;
			}
			if(empty($contactMethod)){
				$error = true;
			}
			if(empty($email)){
				$error = true;
			}
			if(empty($phone)){
				$error = true;
			}
			if(empty($tickets)){
				$error = true;
			}
			if(empty($seats)){
				$error = true;
			}
			if(empty($willCall)){
				$error = true;
			}

			# If an error was found display a user friendly message for each item
			if($error == true){
				print("<h1>Seattle Seahawks Tickets!</h1>");
				print("<h2>No Data was entered for the following fields:</h2>");

				if(empty($name)){
					print("Your Name was not entered.<br/>");
				}
				if(empty($contactMethod)){
					print("Preferred Contact Method was not selected.<br/>");
				}
				if(empty($email)){
					print("An Email address was not entered.<br/>");
				}
				if(empty($phone)){
					print("A Phone number was not entered.<br/>");
				}
				if(empty($tickets)){
					print("Number of Tickets was left blank.<br/>");
				}
				# Due to an error I was getting if blank, I defaulted the Form Entry as Any so this should never be blank
				if(empty($seats)){
					print("A Seat Selection was not selected.<br/>");
				}
				if(empty($willCall)){
					print("Will Call secret phrase was not entered.<br/>");
				}
				# Link to JustinForm.html for easy return to fill out the form correctly
				print("<br/><a href='JustinForm.html'>Click here</a><a> to return to the Seahawks ticket form and fill out the missing information</a><br/>");
			}
			
			# If no errors were found display the submitted information in a clean output
			else{
				print("<h1>Your Seattle Seahawks Ticket Request is Confirmed!</h1>");
				print("<h2>Go to the Will Call booth on game day to get your tickets</h2>");
				print("<br/>---------------------------------------------------------------------------------------------<br/>");
				print("<h3>Ticket Information</h3>");
				print("First/Last Name: $name<br/><br/>");
				print("Preferred Contact Method: $contactMethod<br/><br/>");
				print("Email: $email<br/><br/>");
				print("Phone: $phone<br/><br/>");
				print("Number of Tickets: $tickets<br/><br/>");
				print("Seat Selection: $seats<br/><br/>");
				print("Will Call Secret Phrase: $willCall<br/><br/>");
				print("<br/>---------------------------------------------------------------------------------------------<br/>");
				print("<p><h2>We look forward to seeing you on Game Day! Lets Go Seahawks!</h2></p>");
				print("<br/><a href='JustinForm.html'>Click Here</a> to Purchase More Tickets</a><br/>");
			}
		?>	
	</body>
</html>