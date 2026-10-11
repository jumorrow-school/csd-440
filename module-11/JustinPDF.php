<?php

	/*
		Module 11
			Create a PDF holding all your database data from Module 8.
			In the PDF, display general information about the topic related to the data, and then display the data in a table format.
			Include in your data table a header and a footer.
		Example files used:
			toPDF.php, PDF_Program.php, toPDF_002.php, PDF_Program_002.php and my Module 8 JustinQueryTable.php
		Online Resources:
			2026 NFL Standings: https://www.pro-football-reference.com/years/2026/
			Seahawks Colors: https://teamcolorcodes.com/seattle-seahawks-color-codes/
			FPDF Download: https://fpdf.org/en/dl.php?v=19&f=zip
			FPDF Cell Documentation: https://fpdf.org/en/doc/cell.htm
			FPDF Export Options: https://fpdf.org/en/doc/output.htm
			Wikipedia General Info about the NFC West: https://en.wikipedia.org/wiki/NFC_West
		To run this program:
			Place files JustinPDF.php, JustinPDF_Program.php and unzipped fpdf19 folder in c:\xampp\htdocs\ and start XAMPP
			Then open http://localhost/JustinPDF.php in the browser
	*/

	# Create a connection between PHP and the MySQL database as used in Module 8 JustinQueryTable.php
	$conn = new mysqli("localhost", "student1", "pass", "baseball_01");

	# Verify the database connection and display an error if the connection fails
	if ($conn->connect_error) {
		die("ERROR: Unable to connect to the baseball_01 database: " . $conn->connect_error);
	}

	# Select all the records from the NFC_WEST_2025 table
	$sql="SELECT * FROM NFC_WEST_2025";

	# Run the MySQLi query
	$rs = mysqli_query($conn, $sql);

	# Verify the SQL query was successful
	if (!$rs){
		die("ERROR: There was a MySQLi Error: " . $conn->error);
	}

	# FPDF function - Library File (I added root folder fpdf19 instead of putting the files in module-11 root directory needed)
	require('./fpdf19/fpdf.php');

	# Create an FPDF object
	$pdf=new FPDF();

	# Add a new page to the PDF
	$pdf->AddPage();

	# Set the title font and color. Set Font used from class example Arial/Bold/Size 16. RGB Text Color set to Seahawks College Navy.
	$pdf->SetFont('Arial','B',16);
	$pdf->SetTextColor(0, 34, 68);

	# Display the title of the PDF Document (A4 210mm L/R Margin 10mm each so Max Cell is 190mm)
	# Cell Width (190mm), Height (10), Text, Border (0=none), ln (1=move to next line), Align (C=Center)
	$pdf->Cell(190,10,'NFC West 2025 Team Statistics',0,1,'C');

	# Add space below the title
	$pdf->ln();

	# Set the font and color for the general information about the topic section below the title and above the table data. Arial/Regular/Size 10, Black.
	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(0,0,0);

	# Display the Wikipedia general information about the NFL/NFC West Division. Formated as align left with no border.
	$pdf->MultiCell(190,5,'The NFC West is one of the four divisions of the National Football Conference (NFC) in the National Football League (NFL). It currently has four members: the Arizona Cardinals, the Los Angeles Rams, the San Francisco 49ers, and the Seattle Seahawks.',0,'L');

	# Add space between the comments
	$pdf->ln();

	# Display the general information about the NFL/NFC West 2025 Statistics in my Database table from Module 8. Formated as align left with no border.
	$pdf->MultiCell(190,5,'The table below contains the 2025 regular season team statistics including Wins: (W), Losses: (L), Ties: (T), Win-Loss: (W-L%), Points For: (PF), and Points Allowed: (PA).',0,'L');

	# Add space before the table
	$pdf->ln();

	# Set the table header font as Arial Bold Size 10
	$pdf->SetFont('Arial','B',10);

	# Set the Table Header as Seahawks Action Green and College Navy text
	$pdf->SetFillColor(105,190,40);
	$pdf->SetTextColor(0,34,68);

	# Create the table header columns utilizing the max width of 190 across 7 columns.
	# Border (1=on), Position (0=Move right same row, 1=Move beginning of next line), Align (C=Centered)
	$pdf->Cell(50,10,'Team',1,0,'C',true);
	$pdf->Cell(20,10,'Wins',1,0,'C',true);
	$pdf->Cell(20,10,'Losses',1,0,'C',true);
	$pdf->Cell(20,10,'Ties',1,0,'C',true);
	$pdf->Cell(20,10,'Win %',1,0,'C',true);
	$pdf->Cell(30,10,'Points For',1,0,'C',true);
	$pdf->Cell(30,10,'Points Allowed',1,1,'C',true);

	# Set the Table records font Arial/Regular/Size 10, Text Color as College Navy and the Cell Row Fill Color as Wolf Grey
	$pdf->SetFont('Arial','',10);
	$pdf->SetTextColor(0,34,68);
	$pdf->SetFillColor(165,172,175);

	# Create variables to identify the NFC West Champion by calculating the team with the most wins.
	$mostWins = -1;
	$nfcwChampion = "";		
	
	# Check if the query returned any rows of data
	if (mysqli_num_rows($rs) > 0) {

		# Retrieve and display each record from the NFC_WEST_2025 table
		while($row = mysqli_fetch_assoc($rs)){

			# Checks if the current team in the loop has more wins than the current leading team
			if ($row["Wins"] > $mostWins) {
				$mostWins = $row["Wins"];
				$nfcwChampion = $row["Team"];
			}
			
			# Display each database record in the PDF table
			$pdf->Cell(50,8,$row["Team"],1,0,'L',true);
			$pdf->Cell(20,8,$row["Wins"],1,0,'C',true);
			$pdf->Cell(20,8,$row["Losses"],1,0,'C',true);
			$pdf->Cell(20,8,$row["Ties"],1,0,'C',true);
			$pdf->Cell(20,8,$row["WinPct"],1,0,'C',true);
			$pdf->Cell(30,8,$row["PointsFor"],1,0,'C',true);
			$pdf->Cell(30,8,$row["PointsAgainst"],1,1,'C',true);
		}
	}
	else{

		# Display a message if no records were found in the table
		$pdf->SetFont('Arial','B',10);
		$pdf->SetTextColor(255,0,0);
		$pdf->Cell(190,10,'No records were found in the NFC_WEST_2025 table.',1,1,'C');
	}

	# Table Footer to display the NFC West winning team
	if ($nfcwChampion != "") {

		# Set the footer font, text color, and background color
		$pdf->SetFont('Arial','B',10);
		$pdf->SetTextColor(255,255,255);
		$pdf->SetFillColor(0,34,68);

		# Display the team with the most wins
		$pdf->Cell(190,10,"The 2025 NFC West Championship Team was: " . $nfcwChampion,1,1,'C',true);
	}
	
	# Add space below the table
	$pdf->ln();

	# Close the database connection
	$conn->close();

	# Finally, the document is closed and sent to the browser with Output(). You could also change to Force a download as well with ('D', 'report.pdf');
	$pdf->Output();
?>