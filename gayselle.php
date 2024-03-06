<!DOCTYPE html>
<html>
	<head> 
	<title> Pepperoni Pizza </title> <!-- This is a title -->
	<link rel="stylesheet" href="PHP.css" type="text/css"> <!-- link to external css -->
	<link rel="icon" type="image" href="dh_bg.png"> <!-- for icon -->
	 <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }

        #center-container {
            text-align: center;
						margin-top: 5%;
						background-color: #C1502E;
						width: 35%;
						height: 615px;
        }
				
        #center-container img {
            margin-top: 8%;
        }
				
				#pricetag p {
					text-align: left;
					font-family: "American Typewriter", serif;
					font-weight: bold;
					font-size: 25px;
					margin-top: 5%;
					margin-left: 10%;
					margin-bottom: 0px;
					color: #DBCEB0;
				}

				#pricetag img {
					float: right;
					margin-top: 0px;
					margin-right: 0px;
				}

        table {
            margin-top: 10px;
        }

        hr {
            width: 100%;
        }
    </style>
	</head>
	<body style="background-image: url('gayselle_bg.png'); "> <!-- backgroun img -->
		
		<div id="center-container">
			<img src = "gayselle.png" alt = "Gayselle Image" width = "80%"> <!-- picture and name -->
			<div id = "pricetag">
				<img src = "gayselle_tag.png" alt = "Gayselle Price Tag" width = "35%" >
				<p> Gayselle Corsame <br /> aka Pepperoni Pizza </p>
			</div>
		</div>
		<br /> <br /> <br />
		
		<?php
		
		echo '<img src="PD.png" width="100%" height="120">';



		
		//data for table
		$DATA = array (
		array ("Name","Gayselle Gianni B. Corsame"),
		array ("Mobile Number","0955 591 8483"),
		array ("Gender","Female"),
		array ("Marital Status","Single"),
		array ("Nationality","Filipino"),
		array ("Address","Bagacay, Dumaguete City, Negros Oriental"),
		);
		//table
		echo "<table border='1'> ";  // Start creating an HTML table with a border

		foreach ($DATA as $row) {  // Loop through each row in the $DATA array
			echo "<tr>";  // Start a new table row for each element in $DATA

			foreach ($row as $cell) {  // Loop through each cell (element) in the current row
				echo "<td>$cell</td>";  // Output the cell content within HTML table data (td) tags
			}

			echo "</tr>";  // End the current table row
		}

		echo "</table>", "<br />";  // End the HTML table and add a line break 
		
		$DATA = array (
		array ("Father's Name","Gaspar M. Corsame"),
		array ("Mother's Name","Evelyn B. Corsame"),
		array ("Email Address","gaysellebcorsame@su.edu.ph"),
		array ("Date of Birth"," 06 June 2004"),
		array ("Religion"," Roman Catholic"),
		array ("Language ","English & Filipino"),
		);
		
		//table
		echo "<table border='1'>";
		
		
		foreach ($DATA as $row) {
			echo "<tr>";
			foreach ($row as $cell) {
				echo "<td>$cell</td>";
			}
			echo "</tr>";
		}
		echo "</table>","<br />";

		echo '<img src="edu.png" width="100%" height="120">'; // heading 2
		$DATA = array (
		array ("Elementary","Silliman University Elementary School "),
		array ("Year Graduated"," 2017"),
		array ("Secondary","Silliman University High School"),
		array ("Year Graduated", "2023"),
		array ("College","Silliman University College of Computer Studies"),
		array ("Year Graduated", "---"),
		);
		//table
		echo "<table border='1'>";
		
		
		foreach ($DATA as $row) {
			echo "<tr>";
			foreach ($row as $cell) {
				echo "<td>$cell</td>";
			}
			echo "</tr>";
		}
		echo "</table>","<br />";
		
	
		
		
		
		echo "</table>","<br />";
		
		echo '<img src="P.png" width="100%" height="120">';
		$DATA = array (
		array ("Reading"),
		array ("Book Discussions"),
		array ("Journaling"),
		array ("Community Work"),
		array ("Volleyball and Badminton"),
		array ("Daydreaming"),
		);
		// // table
		echo "<table border='1'>";
		echo "<tr><th>HOBBIES AND INTERESTS </th>"; // Start a new table row with a header cell
		
		
		foreach ($DATA as $row) {
			echo "<tr>";
			foreach ($row as $cell) {
				echo "<td>$cell</td>";
			}
			echo "</tr>";
		}
		echo "</table>","<br />";
		
		

		$DATA = array (
		array ("Social Media Administrator for the Local Barangay"),
		array ("Local Clean-up Drives"),
		array ("Disaster Relief Efforts"),
		array ("Community Outreach Events and Activities"),
		array ("Training and Seminars in Locality"),
		
		);
		//table
		echo "<table border='1'>";
		echo "<tr><th>COMMUNITY INVOLVEMENT </th>"; // Start a new table row with a header cell
		
		
		foreach ($DATA as $row) {
			echo "<tr>";
			foreach ($row as $cell) {
				echo "<td>$cell</td>";
			}
			echo "</tr>";
		}
		echo "</table>","<br />";
		
		

		?>
	  <link rel="stylesheet" href="PHP.css" type="text/css"> <!--link to css  -->
	  <input type="button" value="Go to Welcome Page" onclick="window.location.href='welcome.php'" id="styled-button"> <!-- button linking to welcome.php -->
		
		 <!-- Copyright section -->
		<div id = "copyright">
			2023 &copy;  DOUGHVEN PIZZA. All rights reserved.
		</div>
		
		<!-- Disclaimer section -->
		<div id = "disclaimer">
		    <marquee behavior = "scroll" direction = "left">
		        Disclaimer: This website is created for school purposes only. &nbsp; All content, information, and data on this site are fictional and for educational use. &nbsp;
						None of the information presented here is real, and it should not be considered as such.
		    </marquee>
		</div>
		
		
	</body> <!-- closing for body-->
</html> <!-- end of file-->