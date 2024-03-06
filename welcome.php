<!-- HTML Document for DOUGHVEN PIZZA website -->
<!DOCTYPE html>
<html>
	<!-- Head section for the webpage -->
	<head>
		<title> DOUGHVEN PIZZA! </title> <!-- Website Title -->
		<link rel = "icon" type = "image/x-icon" href = "logo.png"> <!-- Logo Icon -->
		<link rel = "stylesheet" href = "welcomestyle.css"> <!-- CSS Stylesheet -->
	</head>
	
	<!-- Body section containing the content of the webpage -->
	<body>
		<!-- User information box -->
		<div id = "user_box">
			<img src = "user.png" alt = "User Logo" width = "120px"> <!-- User Logo Image -->
			<div id = "logo_right">
				<img src = "logo.png" alt = "Website Logo" width = "100px">	<!-- Logo Image -->
			</div>
			<p id="username_display"> Username: <?php echo $_POST["user1"]; ?> </p> 
			<!-- Cannot store username data when coming back from Biodata Pages only after Login --> 
			<!-- Cannot store username data from New Account Page -->
			<!-- Cannot ONLY store username data after Login --> 
			<div id = "logout_button">
				<input type = "button" name = "logout" value = "Logout" onclick="window.location.href='index.html'"> <!-- Link to Login Page -->
			</div>
		</div>
		
		<!-- Welcome message section -->
		<div id = "welcome_message">
			<h1> Welcome to <br /> DOUGHVEN PIZZA! </h1>
			<h3> Indulge in Our Heavenly Pizza! </h3>
			<br /> <br />
			<!-- Paragraphs with information about DOUGHVEN PIZZA -->
			<p> We are thrilled to welcome you to DOUGHVEN PIZZA, where passion meets dough, and every slice is divine. 
					Whether you’re a long-time pizza lover or a rookie to savory delights, our pizzeria is designed to satisfy your cravings and blow your taste buds. </p> <br />
			<p> Behind every perfectly crafted pizza is our team of passionate chefs. We take pride in our artisanal approach, 
					ensuring that each pizza is a culinary masterpiece made with love and dedication. </p> <br />
			<p> From the classic Pepperoni to bold and innovative creations, our menu is a symphony of flavors crafted with the finest ingredients. 
					Dive into a world of mouthwatering options that will leave you craving more. </p>
		</div>
		
		<br /> <br />
		
		<!-- Developer (Menu) display section -->
		<div id = "menu_display">
			<center>
				<h1> <img src = "line.png" alt = "Fancy Line" width = "35%" > Explore Our Menu: <img src = "line.png" alt = "Fancy Line" width = "35%" >  </h1>
			</center>
		</div>
		
		<br /> <br />
		
		<!-- Gayselle Corsame section -->
		<div id = "gayselle">
			<center>
				<!-- Link to Gayselle Corsame Biodata -->
				<a href = "gayselle.php" style = "text-decoration: none"> <img src = "gayselle.png" alt = "Gayselle Image" width = "80%"> <!-- Gayselle Corsame Image -->
			</center>
			<div id = "pricetag">
				<img src = "gayselle_tag.png" alt = "Gayselle Price Tag" width = "35%" > <!-- Gayselle Corsame Price Tag -->
				<p> Gayselle Corsame <br /> aka Pepperoni Pizza </p> </a> <!-- Gayselle Corsame Name -->
			</div>
		</div>
		
		<!-- Myles Cardenas section -->
		<div id = "myles">
			<center>
				<!-- Link to Myles Cardenas Biodata -->
				<a href = "myles.php" style = "text-decoration: none"> <img src = "myles.png" alt = "Myles Image" width = "80%"> <!-- Myles Cardenas Image -->
			</center>
			<div id = "pricetag_myles">
				<img src = "myles_tag.png" alt = "Myles Price Tag" width = "35%" > <!-- Myles Cardenas Tag -->
				<p> Myles Cardenas <br /> aka Cheese Pizza </p> </a> <!-- Myles Cardenas Name -->
			</div>
		</div>
		
		<!-- John Lomongo section -->
		<div id = "john">
			<center>
				<!-- Link to John Lomongo Biodata -->
				<a href = "john.php" style = "text-decoration: none"> <img src = "john.png" alt = "John Image" width = "80%"> <!-- John Lomongo Image -->
			</center>
			<div id = "pricetag_john">
				<img src = "john_tag.png" alt = "John Price Tag" width = "35%" > <!-- John Lomongo Tag -->
				<p> John Lomongo <br /> aka Chicago Pizza </p> </a> <!-- John Lomongo Name -->
			</div>
		</div>
		
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
		
	</body>
</html>