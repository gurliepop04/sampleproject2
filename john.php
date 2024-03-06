<!DOCTYPE html>
<html>
	<head> 
	<title> Hungarian Pizza </title> <!-- This is a title -->
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
					font-size: 26px;
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
	<body style="background-image: url('john_bg.png'); "> <!-- backgroun img -->
		
		<div id="center-container"> <!-- picture and name -->
			<img src = "john.png" alt = "John Image" width = "80%">
			<div id = "pricetag">
				<img src = "john_tag.png" alt = "John Price Tag" width = "35%" >
				<p> John Lomongo <br /> aka Chicago Pizza </p>
			</div>
		</div>
		<br /> <br /> <br />
		
		<?php
		
		echo '<img src="PD.png" width="100%" height="120">'; // heading 1



		
		//data for table
		$DATA = array ( // declaring array to store infomation
		array ("Name","John Louise M. Lomongo"),
		array ("Mobile Number","0968 445 5465"),
		array ("Gender","Male"),
		array ("Marital Status","Single"),
		array ("Nationality","Filipino"),
		array ("Address","Libo, Enrique Villanueva, Siquijor"),
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
		array ("Father's Name","Nimrod Lomongo"),
		array ("Mother's Name","Liezel M. Lomongo"),
		array ("Email Address","johnmlomongo@su.edu.ph"),
		array ("Date of Birth"," 21 June 2005"),
		array ("Religion"," Roman Catholic"),
		array ("Language ","English & Filipino"),
		);
		
		// second table
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
		array ("Elementary","Libo Elementary School "),
		array ("Year Graduated"," 2017"),
		array ("Secondary","Siquijor State College"),
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
		
	
		
		echo '<img src="P.png" width="100%" height="120">';
		$DATA = array (
		array ("Reading"),
		array (" Web Novels"),
		array ("Gym"),
		array ("Badminton"),
		);
		//table
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
		array ("This aint for people like me : )"),
		array (" I conquer Galaxies "),
		
		);
		//table
		echo "<table border='1'>";
		echo "<tr><th>COMMUNITY INVOLVEMENT </th>";
		
		
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