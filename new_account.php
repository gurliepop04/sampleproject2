<html>
	<head>
		<title>New Account Credentials</title>
		<link rel="stylesheet" href="NCC.css" media="screen">
	</head>
	
	<body>
		<div class="container">  <!-- contains all spaces in the screen-->
			
			<div class="profile">  <!-- Name of username -->
				<img src="user.png" width = "200px">
					<div class="tag">
				<h3> <img src = "user_tag.png" alt = "User Price Tag" width = "40%" > <!-- User Price Tag --> 
						<?php echo $_POST["first_name"] ." ". $_POST["last_name"];?> </h3>
					</div>
			</div>
			
			<div class="credentials">  <!--User Credentials-->
				<div class="account_info"> <!--Account Informations-->
					<h2>ACCOUNT INFORMATION</h2> 
						<h3>First Name: <?php echo $_POST["first_name"];?></h3> 
						<h3>Last Name: <?php echo $_POST["last_name"];?></h3> 
						<h3>Username: <?php echo $_POST["user1"];?> </h3> 
						<h3>Password: <?php echo $_POST["password"];?></h3>
				</div>
				
				<div class="per_tails">  <!--Personal details-->
					<h2>PERSONAL DETAILS</h2>  
						<h3>Email: <?php echo $_POST["email"];?> </h3> 
						<h3>Date of Birth: <?php echo $_POST["selected_month"] ." ". $_POST["selected_day"] ." ". $_POST["selected_year"];?> </h3> 
						<h3>Gender: <?php echo $_POST["selected_gender"]; ?> </h3> 
						<h3>Location: <?php echo $_POST["address"]; ?> </h3> 
						<h3>Mobile Number: <?php echo $_POST["mobile"];?></h3>
					</div>
			
				</div>
					<div id = "buttons">
						<input type="submit" value = "Create Account" onclick= "window.location.href='welcome.php'">  
						<input type = "button" value = "Back to Create New Account" onclick="window.location.href='create_account.php'">
						<input type = "button" value = "Back to Login" onclick="window.location.href='index.html'">
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